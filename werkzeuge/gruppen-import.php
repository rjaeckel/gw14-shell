#!/usr/bin/env php
<?php

namespace mlu\groupwise\migrate\aliases;

use mlu\common,
    mlu\groupwise\apiResult as res,
    mlu\groupwise\wadl\system as sys,
    mlu\groupwise\xsd\nickname as structNick,
    mlu\groupwise\xsd\restAddressable as structAddressable,
    mlu\groupwise\xsd\user as structUser,
    mlu\groupwise\xsd\group as structGroup,
    mlu\groupwise\wadl\postoffice,
    mlu\groupwise\wadl\group,
    worker,
    sharedMemory,
    Exception;

//define('__devmode',false);

require_once 'application.php';
require_once 'helpers/worker.cls.php';
require_once 'helpers/sharedMemory.cls.php';

common::def('aliasDir','group-import/');


/**
 * get the id of a real alias member
 *
 * translates nicknames into referenced object's id
 * @param $obj structAddressable|structNick|res
 * @return string
 * @throws \Exception
 */
function getMemberId($obj) {
    if (!is_object($obj)) {
        throw new Exception ('api-result expected');
        return;
    }
    return (0===stripos($obj('id'),'nickname.'))
        ?implode('.',(array)$obj->extract('realMemberType','userDomainName','userPostOfficeName','userName')->getIterator())
        :$obj('id');
}

/**
 * generate the alias name for an email address and optionally gather the local and domain parts
 * @param $email string
 * @param $localPart string reference; will be filled with the local part of the address
 * @param $iDomain string reference; will be filled with the domain part of the address
 * @return string the generated alias name
 */
function generateAliasName($email,&$localPart,&$iDomain) {
    $mailParts= explode('@', $email);
    $localPart=$mailParts[0];
    $iDomain=$mailParts[1];
    $local= preg_replace('/[^a-z0-9]/i', '-', $localPart);
    $domain= preg_replace('/[^a-z0-9]/i', '-',$iDomain);
    return implode('_',array('liste',$local,'at',$domain));
}

/**
 * try to create an alias by email-address
 *
 * @param $addr string alias email address to be generated
 * @return bool|structGroup|res false on error or the created object-data
 */
function createAlias($addr) {
    // validate idomain
    try {
        $poName=array_shift(common::getPostofficesForInternetdomain(preg_replace('/.*@/', '', $addr)));
    } catch (Exception $e) {
        trigger_error("Internetdomain not registered for <$addr>",E_USER_WARNING);
        return false;
    }
    // validate postoffice
    try {
        $targetPo=Postoffices("name=$poName")->select('name',$poName)->item();
    } catch (Exception $e) {
        trigger_error("Could not determine Postoffice for <$addr>",E_USER_WARNING);
        return false;
    }
    // generate alias-id by given data
    $aliasId=implode('.',array(
        "GROUP",
        $targetPo->domainName,
        $targetPo->name,
        $aliasName=generateAliasName($addr,$mailLocal,$mailDomain)
    ));
    // check for id-conflict
    try {
        $g=Groups("id=$aliasId")->select('id',$aliasId)->item();
        trigger_error("Alias <$aliasId> already exists: $g", E_USER_WARNING);
        return false;
    } catch (Exception $e){ /* alright, the alias may be created */ }
    // create group
    try {
        /** @var structGroup $groupData */
        $group=group::setVars(call_user_func_array(
            common::getStructSplitter('.',false),
            array($aliasId,'','domain','postoffice','group')
        ));
        $groupData=common::putEffectiveValues((object)array('name'=>$aliasName,'preferredEmailId'=>$mailLocal),
            array(
                'internetDomainName'=>$mailDomain,
                'allowedAddressFormats'=>array('FULL')
            )
        );
        // send the data and reload the url to gather full data

        return $group->create($groupData)->reload();
    } catch (Exception $e) {
        // somethin went wrong during creation...
        trigger_error("Creation of group <$aliasId> failed: {$e->getMessage()}", E_USER_WARNING);
        return false;
    }
}

/**
 * update group memberships
 * @param $groupId string the gw-identifier for the group
 * @param $members string[] list of IDs to be added
 * @return bool true on successful update
 */
function setAliasTargets($groupId,$members) {
    // create update payload
    if(!count($members)) {
	trigger_error("Alias <$groupId> has no Members!",E_USER_WARNING);
	return false; 
    }
    $memberUpdate=(object)array('add'=>array());
    
    foreach($members as $member) {
        $memberUpdate->add[]=array(
            'id'=>$member,
            'participation'=>'PRIMARY'
        );
    }
    #echo "$groupId: ".implode(', ',$members)."\n";
    try {
        $group=groups('',$groupId)->item()->url('get');
        $group->link('members','put',\json_encode($memberUpdate));
        //$group->updateMembers($memberUpdate);
        return true;
    } catch (Exception $e) {
        trigger_error($e->getMessage(),E_USER_WARNING);
        trigger_error("Could not set members for group <$groupId>",E_USER_WARNING);
    }
    return false;
}

/**
 * perform an email address search
 * @param $addr string E-Mail-Address
 * @return bool|structAddressable|res false if email unused else the address' owner
 */
function getObjByEMail($addr) {
    try {
        return sys::setVars(array('email' => $addr))->lookupUserByEmail();
    } catch (\Exception $e ) {
        //trigger_error("No object with address <{$addr}> found: {$e->getMessage()}",E_USER_NOTICE);
    }
    return false;
}

/**
 * helper function to iterate over an array
 * @param $arr mixed[] list to iterate over
 * @param $cb callable function to be applied the first two parameters are the value and the referencing index <p>
 * the callback may return a value which will replace the value in the result array if the returned value differs from null.</p>
 * @param $arg,.. mixed optional arguments to pass into callback
 * @return array
 */
function feach($arr,$cb,$arg=null) {
    $args = func_get_args();
    $arr = array_shift($args);
    $cb = array_shift($args);
    $res = array();
    foreach ($arr as $k=>$v) {
        $res[$k]=(null===($r=call_user_func_array($cb, array_merge(array($v,$k),$args))))?$v:$r;
    }
    return $res;
}

/**
 * get a list of files in the import-directory
 * @param $dir
 * @return array
 */
function aliasFiles($dir=aliasDir) {
    return array_filter(scandir($dir),function($f){
        return $f[0]!='.';
    });
}

/**
 * read out and validate all lines in all alias files
 * @return array
 */
function getAliases () {
    return array_filter(
        feach(call_user_func_array('array_merge',
            feach(aliasFiles(),function($aFile){
                $c=file(aliasDir.$aFile);
                return array_filter(
                    feach($c,function($line){
			echo substr($line,0,30)." ".memory_get_usage(1)."\n";
                        static $last='';
                        $line=trim($line);
                        if($line && $line[0]=='!') { return false; }
                        if(substr($line, -1)=='\\') {
                            $last.=' '.substr($line, 0,-1);
                            return false;
                        } else {
                            $aliasLine=trim("$last $line");
                            $last='';
                            return str_replace('@verwaltung.uni-halle.de','@zuv12.verwaltung.uni-halle.de',strtolower($aliasLine));
                        }
                    })
                );
            })
        ), function($aliasLine){
            //if(preg_match('/^[a-z.\-0-9_]+@[a-z.\-0-9_]+\s*:(\s*[a-z.\-0-9_]+@[a-z.\-0-9_]+)+\s*$/i', $aliasLine))
                return preg_split('/\s*:?\s+/', $aliasLine);
            fwrite(STDERR,"Invalid Line in Aliasfile: {$aliasLine}".PHP_EOL);
            return false;
        })
    );
}

class externalDomain {
    protected $domainName='gw-extern';
    protected $postOffices=array();

    public function __construct($domainName=null) {
        if(func_num_args()) $this->domainName=$domainName;
    }

    public function createAccount($emailAddress) {
        /**
         * @var string $local
         * @var string $domain
         */
        extract(call_user_func(common::getStructSplitter('@',false),$emailAddress,'local','domain'));
        $poName=$this->poNameFromIDomain($domain);
        if(in_array($domain,iDoms())) fwrite(STDERR,"Warning: false external: $emailAddress ...\n");
        /** @var structUser $userData */
        $userData = (object)array(
            'name'=>$this->generateExternalName($local),
            'preferredEmailId'=>$local,
        );
        common::putEffectiveValues($userData,array(
            'internetDomainName'=>$domain,
            'allowedAddressFormats'=>array('FULL')
        ));
        try {
            return common::gwApi($this->getOrCreatePostOffice($poName)->link('users'), 'post', $userData)->reload();
        } catch (Exception $e) {
            trigger_error("Could not create external user <$emailAddress>: {$e->getMessage()}");
        }
        return false;
    }
    protected function createPostOffice($name) {
        try {
            return postoffice::setVars(array('domain'=>$this->domainName))->create(array('name'=>$name))->reload();
        } catch (Exception $e) {
            // it may have been created by another process meanwhile...
            try {
                $pos = postoffices("domain=$this->domainName&name=$name");
                $pos('object');
                return $pos->item()->url('get');
            } catch(Exception $e) {
                // something really went wrong...
                trigger_error("Could not create external Postoffice <{$this->domainName}.{$name}>: {$e->getMessage()}",E_USER_WARNING);
            }
        }
        return false;
    }
    protected function poNameFromIDomain ($internetDomainName) {
        return strtolower(str_replace('.','-',$internetDomainName));
    }
    protected function generateExternalName ($localMailPart) {
        return $this->poNameFromIDomain($localMailPart);
    }
    protected function getPostOffice ($name) {
        try {
            return postoffices("name={$name}&externalRecord=true")->select('name',$name)->item()->url('get');
        } catch (Exception $e) {}
        return false;
    }
    protected function getOrCreatePostOffice($name) {
        return isset($this->postOffices[$name])?$this->postOffices[$name]:$this->postOffices[$name]=$this->getPostOffice($name)?:$this->createPostOffice($name);
    }
}

function iDoms() {
    static $idoms;
    return isset($idoms)?$idoms:$idoms=Internetdomains()->each(function($iDom){return $iDom->name;})->content;
}

// statistics
$timeStart=microtime(1);

/**
 * magic starts here ^.^
 */
// helper to create external postoffices on the fly
$gwExt=new externalDomain();
echo "0\n";
$aliasAddresses = array();
$targetAddresses = array();
$aliasGenerators = array();
//generate list of aliases and their targets

#$allAliases=getAliases();
echo "1\n";
array_walk(getAliases(),function($entry)use(&$aliasAddresses,&$targetAddresses,&$aliasGenerators){
    $aliasAddresses[]=$entry[0];
    $targetAddresses=array_merge($targetAddresses,$aliasGenerators[$entry[0]]=array_slice($entry,1));
});
echo count($aliasAddresses)." Aliases found.\n\n";
//remove duplicate targets from list
$cTargets=count($targetAddresses=array_unique($targetAddresses));
//print_r($targetAddresses);

// validate integrity of alias list
if (count($aliasAddresses)!=$cAliases=count($aliasAddresses=array_unique($aliasAddresses))) {
    trigger_error("There were duplicate alias-addresses! need2fix!",E_USER_ERROR);
}
sort($aliasAddresses);
sort($targetAddresses);
// requirements fulfilled.
echo "processing...\n";

$worker=new worker(100);

//check aliases for existence...
$mem=new sharedMemory(sharedMemory::MiB(32));
$mem->aliases=array();
$mem->existing=array();
$mem->external=array();

fwrite(STDOUT,sprintf("%-".trim(`tput cols`).'s', "checking alias addresses...")."\n");
$worker->map($aliasAddresses,function($addr,$k)use($mem){
    fwrite(STDOUT,sprintf("%-".trim(`tput cols`).'s',"checking alias address: $addr ")."\r");
    $o=getObjByEMail($addr);
    $mem->beginTransaction();
    if($o) {
        fwrite(STDERR,"found conflict: <{$addr}> already set for <{$o->id}>\n");
        $l=$mem->existing;
        $l[$addr]=getMemberId($o);
        $mem->existing=$l;
    } else {
        $l=$mem->aliases;
        $l[]=$addr;
        $mem->aliases=$l;
    }
    $mem->endTransaction();
})->work();

echo count($aliasAddresses)."\n\n";

fwrite(STDOUT,sprintf("%-".trim(`tput cols`).'s', "checking target addresses...")."\n");
// find external records to be created...
$worker->map($targetAddresses,function($addr)use($mem){
    fwrite(STDOUT,sprintf("%-".trim(`tput cols`).'s',"checking target address: $addr ")."\r");
    $mem->beginTransaction();
    $existing = $mem->existing;
    $external = $mem->external;
    $aliases = $mem->aliases;
    // skip aliases to be created
    if(in_array($addr,$aliases)) return $mem->endTransaction();
    // check for existence and add if needed
    // address in already checked list
    if(array_key_exists($addr,$existing)) return $mem->endTransaction();
    // lookup address and add if necessary
    if($o=getObjByEMail($addr)) {
        $existing[$addr]=getMemberId($o);
        $mem->existing=$existing;
        return $mem->endTransaction();
    }
    // no alias or object with this address; add to externals
    $external[]=$addr;
    $mem->external=$external;
    return $mem->endTransaction();
})->work();
// clean up shared mem for externals and aliases as these lists won't be modified anymore
$exteral = $mem->external;
unset($mem->external);

$aliases = $mem->aliases;
unset($mem->aliases);

//throw new Exception('testing only.');

fwrite(STDOUT,sprintf("%-".trim(`tput cols`).'s',"creating external accounts...")."\n");
// create externals...
$worker->map($exteral,function($addr)use($mem,$gwExt){
    fwrite(STDOUT,sprintf("%-".trim(`tput cols`).'s',"creating external address: $addr ")."\r");
    if($account=$gwExt->createAccount($addr)) return $mem->transactVar('existing',function($l)use($addr,$account){
        $l[$addr]=$account->id;
        return $l;
    });
    trigger_error("External Account <$addr> not created.",E_USER_WARNING);
})->work();

$mem->createdAliases=array();
fwrite(STDOUT,sprintf("%-".trim(`tput cols`).'s',"creating aliases...")."\n");
// create aliases...
$worker->map($aliases,function($addr)use($mem){
    fwrite(STDOUT,sprintf("%-".trim(`tput cols`).'s',"creating alias: $addr ")."\r");
    if($o=createAlias($addr)) {
        $mem->beginTransaction();
        $e=$mem->existing;
        $c=$mem->createdAliases;
        $e[$addr]=$o->id;
        $c[]=$addr;
        $mem->existing=$e;
        $mem->createdAliases=$c;
        $mem->endTransaction();
        return;
    }
    trigger_error("Alias <$addr> not created.",E_USER_WARNING);
})->work();

// clean shared memory as it will not be used anymore...
$existing=$mem->existing;
$createdAliases=$mem->createdAliases;
unset($mem->existing,$mem->createdAliases);
$mem->remove();
unset($mem);


fwrite(STDOUT,sprintf("%-".trim(`tput cols`).'s',"filling aliases...")."\n");
// fill aliases
$worker->map($createdAliases,function($addr)use($aliasGenerators,$existing){
    fwrite(STDOUT,sprintf("%-".trim(`tput cols`).'s',"Filling group with members: $addr ")."\n");
    if (isset($aliasGenerators[$addr])&&isset($existing[$addr])) {
        $targets = @$aliasGenerators[$addr];
        $members=array();
        array_walk($targets,function($mail)use($existing,&$members){
            if(!isset($existing[$mail])) {
                trigger_error("No Account for <$mail> defined.",E_USER_WARNING);
                return;
            }
            $members[]=$existing[$mail];

        });
        if(!setAliasTargets($existing[$addr], $members)) trigger_error("Members for <$addr> not set!",E_USER_WARNING);
    } else {
        trigger_error("No Targets for Alias <$addr>: Alias ".(getObjByEMail($addr)?'exists':'not created'),E_USER_WARNING);
    }
})->work();

$timeEnd=microtime(1);
$timeComplete = ($timeEnd-$timeStart)/60;
trigger_error("Process took {$timeComplete} Minutes.",E_USER_WARNING);
