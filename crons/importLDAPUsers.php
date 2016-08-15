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
 *  -in=OBJECT-ID restrict actions to domain/po/user...
 *  -bcc=admmailaddress
 * if no flags are given all will be set
 */

#define('__devmode',true);
#define('__devRequests',true);

require_once "application.php";
require_once 'helpers/worker.cls.php';

use mlu\groupwise\apiResult,
    mlu\common,
    mlu\groupwise\wadl\directory,
    mlu\groupwise\wadl\user,
    mlu\groupwise\wadl\system,
    mlu\groupwise\xsd\user as iUser,
    mlu\groupwise\xsd\dirImport as iDirImport,
    mlu\groupwise\xsd\postOffice as iPostOffice,
    mlu\groupwise\xsd\moveRequest as iMoveRequest,
    mlu\groupwise\xsd\moveSource as iMoveSource,
    mlu\groupwise\xsd\syncResult as iSyncResult,
    mlu\groupwise\listCache as cache,
    Exception as E
    ;

// configuration
$directoryId=@gwLDAP;
$tempPOId="POST_OFFICE.gwdom0.system";
$WorkerThreads=100;

// preload POs and IDomains...
cache::PostOffices( 'count=10000' );
cache::InternetDomains( 'count=1000' );


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
            if(static::$$f) common::logWrite(" + $f\n");
        }
        foreach(static::$options as $k=>$v) {
            common::logWrite(" - $k:$v\n");
        }
    }
}
cfg::init($argv);

//die();*/

/**
 * @return Worker
 */
function worker() {
    global $WorkerThreads;
    isset($WorkerThreads)||$WorkerThreads=16;

    static $instance;
    isset($instance)||$instance=new Worker($WorkerThreads);
    return $instance;
}

/**
 * build association list between internet domains and post offices
 */
// list post offices
$PONames = array();
cache::PostOffices()->each(function($PO)use(&$PONames) {
    /** @var $PO iPostOffice */
    if(false === stripos($PO->id,".gw-extern."))
         $PONames[$PO->name]=$PO->id;
});

// list internet domains
$InternetDomainPostOffices=array();
cache::InternetDomains()->each(function($iDom) use(&$InternetDomainPostOffices,$PONames) {
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
            common::logWrite("Waiting for import-job to finish...");
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
                common::logWrite("Failed to import <$res->ldapDn>: $res->message",STDERR,PHP_EOL);
            } catch (E $e) {
            }
        });
    } catch(E $e){}
    common::logWrite("LDAP-Import Done.\n");
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
        common::logWrite(sprintf("Updating %s@%s...",$prefMailId,$internetDomain));
        $userID=implode('.',array('USER',$user->domain,$user->postoffice,$user->user));
        try {
            try {
                $lookup = system::setVars(array(@email => "$prefMailId@$internetDomain"))->lookupUserByEmail();
                $err = $lookup('id');
		        if($err==$userID) throw new Exception('UPDATE OK!');
                common::logWrite("Could not update User <$userID>: Address <$prefMailId@$internetDomain> conflicts with <$err>", STDERR, PHP_EOL);
            } catch (\Exception $e) {
                // check if user should be disabled or "deleted" by email-id
                $mailPrefix=strtolower(array_shift(explode('_',$prefMailId)));
                $forceInvis=false;
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
                        $forceInvis=true;

                }
                // update address and visibilty according to internet domain
                $more=array_merge($more,$userState,array(
                    @preferredEmailId => $prefMailId,
                    @visibility => ($internetDomain=='student.uni-halle.de'||$forceInvis)?@NONE:@DOMAIN
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
            common::logWrite(sprintf("Could not update %s <%s@%s>: %s\n",$userID,$prefMailId,$internetDomain,$e->getMessage()),STDERR,PHP_EOL);
        }
    };
}

/**
 * @param $targetPO string
 * @param $users iMoveSource[]
 *
 * @return callable
 */
function userMoveAction($targetPO,$users) {
    return function() use($targetPO,$users) {
        common::logWrite(sprintf("Moving %d users to PO %s: %s",
            count($users),
            $targetPO,
            implode(' ',array_map(function($u){return $u->id;},$users))
        ),STDERR,"\n");
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
            common::logWrite(sprintf("Could move %d users to  <%s>: %s\n",count($users),$targetPO,$e->getMessage()),STDERR,PHP_EOL);
        }
    };
}

common::logWrite("Started user import...",STDOUT,PHP_EOL);

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
        # common::logWrite(sprintf("Working page %d...",$page));
        if(isset($usersToUpdate->resultInfo)&&isset($usersToUpdate->resultInfo->outOf)&&$usersToUpdate->resultInfo->outOf==0)
            break;
        $usersToUpdate->each(function ($user) use (&$usersToMove,&$current,$page) {
            /* @var $user iUser|apiResult */
            common::logWrite(sprintf("Working page %d/%d (%s)...",$page,++$current,$user->id));
            $reference = $user->split(@id, '', @domain, @postoffice, @user);
            // ldap-search
            $searchKey = array_shift(explode(',', $user->ldapDn));
            try {
                $ldapRes = common::searchLDAP($searchKey);
                $ldapMail = strtolower($ldapRes->emailAddresses[0]);
                $mailParts = explode('@', $ldapMail);
                $prefMailId = array_shift($mailParts);
                $internetDomain = array_shift($mailParts);
            } catch (Exception $e) {
                common::logWrite("LDAP Search failed for User <{$user->id}> (s: $searchKey): {$e->getMessage()}",STDERR,"\n");
                common::logWrite(" - - Trace: ".$e->getTraceAsString(),STDERR,"\n");
                // break each-function here
                return;
            }
            if (cfg::$update) {
                try {
                    // function to keep track of binary flags (track, what has changed)
                    $comp=function($inc=0){ static $c=0; $c+=$inc; return $c; };
                    // verify user data
                    if (!(
                        $comp(1) &&
                        isset($user->internetDomainName) && $comp(2) &&
                        $user->internetDomainName->value == $internetDomain && $comp(4) &&
                        $user(@preferredEmailId,'') == $prefMailId && $comp(8) &&
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
                    // if user was updated, not initialized as a new user has no iDomain set
                    if (2==($comp()&2)) {
                        // check the user was or will not be disabled
                        $deletedState = (0===stripos($prefMailId,'geloescht_'))||
                                        (0===stripos($prefMailId,'gesperrt_'))||
                                        (0===stripos($user(@preferredEmailId,''),'geloescht_'))||
                                        (0===stripos($user(@preferredEmailId,''),'gesperrt_'));

                        if(!$deletedState && (0==($comp()&4)||0==($comp()&8))) {
                        //email-address changed, create nickname
                            worker()->enqueue(function()use($user,$ldapMail,$ldapRes){
                                // generate java-timestamp -> time()*1000 for expiration date
                                $exp=1000*(
                                        mktime(0,0,0) // midnight +
                                        +7776000    // 90 days -> 3600s*24*90
                                    );
                                common::logWrite("Creating Nickname for <{$user->id}>",STDERR,"\n");
                                common::createNickname(
                                    $user->id,
                                    $user->preferredEmailId,
                                    $user->internetDomainName,
                                    array(
                                        @visibility=>@NONE,
                                        @expirationDate=>$exp
                                    )
                                )->reload();

                                $givenName=$ldapRes(@givenName,'');
                                $surname=$ldapRes(@surname,'');
                                $title=$ldapRes(@title,'');
                                if($title)$title.=' ';
                                $internetDomain=$user->internetDomainName->value;
                                $preferredEmailId=$user->preferredEmailId;
                                $uid=$user->name;
                                $mail=<<<EMAIL
Sehr geehrte*r $title$givenName $surname,

aufgrund einer Namensänderung wurde die E-Mail-Adresse zu Ihrem Account "$uid" von "$preferredEmailId@$internetDomain" auf "$ldapMail" geändert.

Die alte Adresse wird automatisch 90 Tage lang auf die neue umgeleitet.

Nutzen Sie bitte diese Zeit, um alle Ihre Korrespondenten über die neue Adresse zu informieren und bestehende Verknüpfungen mit der alten Adresse, wie Weiterleitungen und Registrierungen, anzupassen.

Bitte überprüfen Sie ggf. auch Ihre Signatur und Abwesenheitsnachricht.

Sollten Sie statt des GroupWise-Clients einen anderen lokalen Mailclient nutzen (wie Outlook, Thunderbird, Apple Mail etc.), so müssen Sie dort in Ihrem Mailkonto die Absenderadresse auf die neue Adresse umstellen.

Bei Fragen oder Problemen antworten Sie einfach auf diese E-Mail.

Mit freundlichen Grüßen

Ihr E-Mail-Team des ITZ

EMAIL;
                                $subject="Neue E-Mail-Adresse";
				$oldMail = $preferredEmailId . '@' . $internetDomain;
				$newMail = $ldapMail;
                                $to = $oldMail; // funktioniert in jedem Fall noch
                                //$to .= ', ' . $newMail; // funktioniert noch nicht
				$mailHeaders = array(
                                    "From: ".common::def('__mailFrom'),
                                    "X-Mailer: gw-admin-shell PHP/".phpversion(),
                                    "Content-Type: text/plain; Charset=utf-8");
				if (isset(cfg::$options['bcc'])) {
				    array_push($mailHeaders, "Bcc: " . cfg::$options['bcc']);
                                    $success = mail($to,$subject,$mail,implode("\r\n",$mailHeaders), "-f ".cfg::$options['bcc']);
				} else {
                                    $success = mail($to,$subject,$mail,implode("\r\n",$mailHeaders));
				}
                                $success || common::logWrite("Could not send nickname notification to <$to>",STDERR,"\n");
                            })->work(false);
                        }
                    }
                } catch (E $e) {
                    common::logWrite("Could not update User: {$e->getMessage()}",STDERR,"\n");
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
                    common::logWrite("Could not move user <{$user->id}>: " . $e->getMessage(),STDERR,"\n");
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

common::logWrite("Done.",STDOUT,"\n");
//fwrite(STDOUT,sprintf("[%s] Done.   \n",date("d.m.Y h:i:s")));
