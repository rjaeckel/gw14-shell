#!/usr/bin/env php
<?php

/**
 * run ldap-userimport into local postoffices
 * flags:
 *  ldap        search ldap for new users
 *  update      update user-properties to match ldap e.g. email-address and names
 *  move        move users into matching PostOffice by InternetDomain
 *  imported    limit synchronization to the temporary PostOffice
 *
 *  options:
 *  -in=OBJECT-ID restrict actions to domain/po...
 * if no flags are given all will be set
 */

require_once "application.php";
require_once 'helpers/worker.cls.php';

use mlu\groupwise\apiResult,
    mlu\common,
    mlu\groupwise\wadl\directory,
    mlu\groupwise\wadl\user,
    mlu\groupwise\wadl\internetdomain,
    mlu\groupwise\wadl\system,
    mlu\groupwise\xsd\internetDomain as iInternetDomain,
    mlu\groupwise\xsd\user as iUser,
    mlu\groupwise\xsd\group as iGroup,
    mlu\groupwise\xsd\dirImport as iDirImport,
    mlu\groupwise\xsd\postOffice as iPostOffice,
    mlu\groupwise\xsd\moveRequest as iMoveRequest,
    mlu\groupwise\xsd\moveSource as iMoveSource,
    mlu\groupwise\xsd\listResult as iListResult,
    mlu\groupwise\xsd\syncResult as iSyncResult,
    Exception as E
    ;

// configuration
$directoryId=@gwLDAP;
$tempPOId="POST_OFFICE.gwdom0.system";
$WorkerThreads=100;

class cfg {
    public static $ldap;
    public static $update;
    public static $move;
    public static $imported;
    public static $options=array();
    static function init($data) {
        $fields=explode(' ','ldap update move imported');
        $params=array();
        $flagged=count(array_filter($data,function($param)use(&$params) {
                return !($param[0]=='-'&&$params[]=$param);
            }))>1;
        foreach($fields as $f) static::$$f=$flagged?in_array($f,$data):true;
        foreach($params as $p) {
            if(preg_match('/-([a-z]+)=(.*)/',$p,$matched)) {
                static::$options[$matched[1]]=$matched[2];
            }
        }
        foreach($fields as $f) {
            if(static::$$f) logWrite(" + $f\n");
        }
        foreach(static::$options as $k=>$v) {
            logWrite(" - $k:$v\n");
        }
    }
}
cfg::init($argv);

//die();*/

/**
 * @return apiResult|iListResult|iPostOffice[]
 */
function cachePostOffices() {
    static $cache;
    isset($cache)||$cache=postoffices('count=10000');
    return $cache;
}

/**
 * @return apiResult|iListResult|iInternetDomain[]
 */
function cacheInternetDomains() {
    static $cache;
    isset($cache)||$cache=internetdomain::getList();
    //print_r($cache);
    return $cache;
}

/**
 * @return worker
 */
function worker() {
    global $WorkerThreads;
    static $instance;
    isset($instance)||$instance=new worker($WorkerThreads);
    return $instance;
}

/**
 * build association list between internet domains and post offices
 */
// list post offices
$PONames = array();
cachePostOffices()->each(function($PO)use(&$PONames) {
    /** @var $PO iPostOffice */
    if(false === stripos($PO->id,".gw-extern."))
         $PONames[$PO->name]=$PO->id;
});

// list internet domains
$InternetDomainPostOffices=array();
cacheInternetDomains()->each(function($iDom) use(&$InternetDomainPostOffices,$PONames) {
    $POsOfInternetDomain=array_filter(
        preg_split("/[\r\n]+/",$iDom(@description,''))
    );
    isset($InternetDomainPostOffices[$iDom->name])
        ||$InternetDomainPostOffices[$iDom->name]=array();
    foreach($POsOfInternetDomain as $IDPOName) {
        if(isset($PONames[$IDPOName]))
            $InternetDomainPostOffices[$iDom->name][]=$PONames[$IDPOName];
    }
});
/**
 * @param $InternetDomain string
 *
 * @return string PostOffice ID
 * @throws Exception if no PO could be matched
 */
function getPoForInternetDomain($InternetDomain) {
    // internet domain association list
    $InternetDomain=strtolower($InternetDomain);
    global $InternetDomainPostOffices;
    // initialize poState if not done already
    static $poStates=array();
    isset( $poStates[$InternetDomain])
        || $poStates[$InternetDomain]=mt_rand(0,767);
    // count the possible post offices once only
    static $count=array();
    isset( $count[$InternetDomain])
        || $count[$InternetDomain]=isset($InternetDomainPostOffices[$InternetDomain])?
                count($InternetDomainPostOffices[$InternetDomain]):0;
    // throw error if no po exists
    if(!$count[$InternetDomain]) {
        throw new E("No PO for <$InternetDomain> configured");
    }
    // return the next po in list
    return $InternetDomainPostOffices[$InternetDomain][$poStates[$InternetDomain]++ % $count[$InternetDomain]];
}

function isPostOfficeForInternetDomain($poName,$internetDomainName) {
    global $InternetDomainPostOffices;
    $POs = $InternetDomainPostOffices[$internetDomainName];
    return count(array_filter($POs,function($poId)use($poName){
        $compName=array_pop(explode('.',$poId));
        return strtolower($poName)==strtolower($compName);
    }));
}

function importUsers($tempPOId) {
    /* @var $importConfig iDirImport */
    $importConfig=array(
        @postOfficeId=>$tempPOId,
        @searchSubtree=>true,
        @commit=>true,
        @showFailed=>true,
        @showSkipped=>false,
        @showSucceeded=>false
    );
// find new users in ldap using config above
    $importJob=directory::ldapImport($importConfig);
    try {
        /** @var $importJob \mlu\groupwise\xsd\syncResult|apiResult */
        $importJob(@total);
    } catch (E $e) {
        /** @var \mlu\groupwise\xsd\asyncStatus|apiResult $importJob*/
        while(!$importJob(@done,false)) {
            logWrite("Waiting for import-job to finish...");
            sleep(1);
            $importJob=$importJob->reload();
        }
        $importJob=apiResult::merge($importJob(@result));
    }
// print out failed imports
    try {
        /** @var $importJob \mlu\groupwise\xsd\syncResult|apiResult */
        $importJob(@results);
        $importJob->each(@results,function(apiResult $res) {
            /** @var $res iSyncResult|apiResult **/
            try {
                $res(@error);
                logWrite("Failed to import <$res->ldapDn>: $res->message",STDERR,PHP_EOL);
            } catch (E $e) {
            }
        });
    } catch(E $e){}
    logWrite("LDAP-Import Done.\n");
}

/**
 * @param $user user
 * @param $internetDomain string
 * @param $prefMailId string
 *
 * @return callable
 */
function userUpdateAction($user,$internetDomain,$prefMailId,$more=array()) {
    return function() use($user,$internetDomain,$prefMailId,$more) {
        /** @var $user user|iUser */
        logWrite(sprintf("Updating %s@%s...",$prefMailId,$internetDomain));
        $userID=implode('.',array('USER',$user->domain,$user->postoffice,$user->user));
        try {
            try {
                $lookup = system::setVars(array(@email => "$prefMailId@$internetDomain"))->lookupUserByEmail();
                $err = $lookup('id');
		        if($err==$userID) throw new Exception('UPDATE OK!');
                logWrite("Could not update User <$userID>: Address <$prefMailId@$internetDomain> conflicts with <$err>", STDERR, PHP_EOL);
            } catch (\Exception $e) {
                // check if user should be disabled or "deleted" by email-id
                $mailPrefix=strtolower(array_shift(explode('_',$prefMailId)));
                $userState=$userState=array(
                    @loginDisabled=>false,
                    @forceInactive=>false
                );
                switch($mailPrefix) {
                    case @geloescht:
                        $userState[@forceInactive]=true;
                    //no break to disable login as well!
                    case @gesperrt:
                        $userState[@loginDisabled]=true;
                }
                // update address and visibilty according to internet domain
                $more=array_merge($more,$userState,array(
                    @preferredEmailId => $prefMailId,
                    @visibility => $internetDomain=='student.uni-halle.de'?@NONE:@DOMAIN
                    //@visibility => @NONE
                ));
                // perform update
                $user->update(
                    common::putEffectiveValues((object)$more,
                        array(@internetDomainName => $internetDomain)
                    )
                );
            };
        } catch(E $e) {
            logWrite(sprintf("Could not update %s <%s@%s>: %s\n",$userID,$prefMailId,$internetDomain,$e->getMessage()),STDERR,PHP_EOL);
        }
    };
}

function logWrite($msg,$target=STDOUT,$eol="\r") {
    global $argv;
    #$cols = ((int)`if [ $-==*i* ]; then tput cols; fi`);
    $cols = ((int)`if [ -t 0 ]; then tput cols; fi`);
    $s = sprintf("[%s %s] %s",
        date("d.m.Y-H:i:s"),
        basename($argv[0],'.php'),
        $msg
    );
    $out = $cols?substr($s,0,$cols):$s;

    fwrite($target,sprintf("%-{$cols}s$eol",$out));
}

/**
 * search ldap using the api
 *
 * requires global $directoryId to be set
 *
 * @param $searchKey string ldap-search string
 * @return iUser|iGroup|apiResult
 * @throws Exception if no entry was found
 */
function searchLDAP ($searchKey) {
    do {
        /** @var apiResult|iListResult|iUser[] $sr */
        // directory search could fail as there are quite a lot connections...
        $sr = Directory::search(null, 'filter=(' . $searchKey . ')');
    } while (substr($sr->header('http/1.1'), 0, 1) != '2');
    // read out email-address data
    if(isset($sr->resultInfo) && $sr->resultInfo->outOf==0) {
        global $directoryId;
        throw new Exception("No Entry for <{$searchKey}> in <$directoryId>");
    }
    return $sr->item();
}

/**
 * @param $targetPO string
 * @param $users iMoveSource[]
 *
 * @return callable
 */
function userMoveAction($targetPO,$users) {
    return function() use($targetPO,$users) {
        logWrite(sprintf("Moving %d users to PO %s...",
            count($users),
            $targetPO
        ));
        /** @var $move iMoveRequest */
        /** @var $users iMoveSource[] */
        try {
            system::moveUsers((object)
                array(
                    @postOfficeId=>$targetPO,
                    @sources=>$users
                )
            );
        } catch (E $e) {
            logWrite(sprintf("Could move %d users to  <%s>: %s\n",count($users),$targetPO,$e->getMessage()),STDERR,PHP_EOL);
        }
    };
}
logWrite("Started user import...",STDOUT,PHP_EOL);
cfg::$ldap&&importUsers($tempPOId);
if(cfg::$move||cfg::$update) {
    // generate update-list
    $filter = 'attrs=ldapdn,preferredemailid,internetdomainname,title,givenName,surname,visibility&count=5000&directoryId=' . $directoryId;
    $usersToUpdate = cfg::$imported?
        users($filter,$tempPOId):
        (isset(cfg::$options['in'])?
            users($filter,cfg::$options['in']):
            users($filter)
        );
    $page = 0;
    do {
        $page++;
	    $current=0;
        $usersToMove = array();
        # logWrite(sprintf("Working page %d...",$page));
        if(isset($usersToUpdate->resultInfo)&&isset($usersToUpdate->resultInfo->outOf)&&$usersToUpdate->resultInfo->outOf==0)
            break;
        $usersToUpdate->each(function ($user) use (&$usersToMove,&$current,$page) {
            /* @var $user iUser|apiResult */
            logWrite(sprintf("Working page %d/%d (%s)...",$page,++$current,$user->id));
            $reference = $user->split(@id, '', @domain, @postoffice, @user);
            // ldap-search
            $searchKey = array_shift(explode(',', $user->ldapDn));
            try {
                $ldapRes = searchLDAP($searchKey);
                $ldapMail = strtolower($ldapRes->emailAddresses[0]);
                $mailParts = explode('@', $ldapMail);
                $prefMailId = array_shift($mailParts);
                $internetDomain = array_shift($mailParts);
            } catch (Exception $e) {
                logWrite("LDAP Search failed for User <{$user->id}> (s: $searchKey): {$e->getMessage()}",STDERR,"\n");
                logWrite(" - - Trace: ".$e->getTraceAsString(),STDERR,"\n");
                // break each-function here
                return;
            }
            if (cfg::$update) {
                try {
                    $comp=function($inc=0){ static $c=0; $c+=$inc; return $c; };
                    // verify user data
                    if (!(
                        $comp(1) &&
                        isset($user->internetDomainName) && $comp(2) &&
                        $user->internetDomainName->value == $internetDomain && $comp(4) &&
                        $user->preferredEmailId == $prefMailId && $comp(8) &&
                        $user->visibility!=@SYSTEM && $comp(16) &&
                        $user(@surname,'') == $ldapRes(@surname,'') && $comp(32) &&
                        $user(@givenName,'') == $ldapRes(@givenName,'') && $comp(64) &&
                        $user(@title ,'')== $ldapRes(@title,'') && $comp(128)
                    )) {
                        //echo "\n{$user->id}: {$comp(0)}\n";
                        // update user if required
                        worker()->enqueue(userUpdateAction(
                            user::setVars($reference),
                            $internetDomain,
                            $prefMailId,
                            (array)$ldapRes->extractGreedy(@surname, @givenName, @title)->content
                        ))->work(false);
                    }
                } catch (E $e) {
                    logWrite("Could not update User: {$e->getMessage()}",STDERR,"\n");
                    #worker()->enqueue(userUpdateAction(user::setVars($reference), $internetDomain, $prefMailId))->work(false);
                }
            }
            // move user, if in wrong PO...
            if (cfg::$move && !isPostOfficeForInternetDomain($reference[@postoffice],$internetDomain)) {
                try {
                    $userPo = getPoForInternetDomain($internetDomain);
                    isset($usersToMove[$userPo]) || $usersToMove[$userPo] = array();
                    //if(!stripos($userPo,'.'.$user(@postOfficeName).'.')
                    $usersToMove[$userPo][] = $user->extract(@id)->content;
                } catch (E $e) {
                    logWrite("Could not move user <{$user->id}>: " . $e->getMessage(),STDERR,"\n");
                }
            }


        });
        worker()->work()->wait();
        // move users
        foreach ($usersToMove as $po => $users) {
            worker()->enqueue(userMoveAction($po, $users));
        }
        worker()->work()->wait();
    } while ($usersToUpdate = $usersToUpdate->nextListPage());
    //echo "\n";
}

logWrite("Done.",STDOUT,"\n");
//fwrite(STDOUT,sprintf("[%s] Done.   \n",date("d.m.Y h:i:s")));