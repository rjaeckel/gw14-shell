#!/usr/bin/env php
<?php

namespace mlu\groupwise\tools;

use mlu\groupwise\xsd\nickname;
use mlu\groupwise\xsd\user;

require_once 'application.php';

/**
 * @var $bin        string path to executable
 * @var $uid        string user id to be modified
 * @var $sn         string user's new surname
 * @var $emailId    string user's new email-id
 */
$arglist=array('bin','uid','sn','emailId');
foreach($arglist as $n) $$n=@array_shift($argv)?:'?';
//$bin = basename(array_shift($argv));

if($argc<4) {
   echo <<<eoi
Aktualisiert den Namensteil eines Accounts und erstellt einen passenden Nickname für die alte Adresse.
    $bin {username} {NewSurname} {NewPrefEmailId}

    your input $bin $uid $sn $emailId

eoi;
    exit($argc);
}

// get user information
$user=users("name=$uid")->select('name',$uid)->item()->url(@GET);
// generate java-timestamp -> time()*1000
$exp=1000*(
        mktime(0,0,0) // midnight +
        +7776000    // 90 days -> 3600s*24*90
);
// extract user's mail portion and name
$oldMail=$user->extractGreedy(@internetDomainName,@preferredEmailId,@givenName,@surname);
// extract user's container
/** @var nickname $base */
$base = $user->extractGreedy(@domainName,@postOfficeName,@visibility);
// generate reference for nickname
$ref=$user->extractGreedy(@domainName,@postOfficeName,@name)->prefix('user');
// update user's information
/** @var $userUpd user */
$user->url(@PUT,(object)array(@surname=>$sn,@preferredEmailId=>$emailId));
// create nickname with old address data
$user->requestApiInstance(
    $user->link(@postoffice).'/nicknames',@POST,
    $base->merge(
        $oldMail,
        $ref,
        array(@name=>'nickname_'.$uid,@expirationDate=>$exp)
    )
);

