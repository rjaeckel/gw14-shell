#!/usr/bin/env php
<?php

namespace mlu\groupwise\tools;

use mlu\common;
use mlu\groupwise\xsd\nickname;
use mlu\groupwise\xsd\user;

require_once 'application.php';

/**
 * @var $bin        string path to executable
 * @var $uid        string user id to be modified
 * @var $iDomain    string user's new internetDomainName
 */
$arglist=array('bin','uid','iDomain');
foreach($arglist as $n) $$n=@array_shift($argv)?:'?';
//$bin = basename(array_shift($argv));

if($argc<3) {
    echo <<<eoi
Ändert die Internet Domain für einen Account und erstellt einen Nickname für die alte Adresse.
    $bin {username} {NewSurname} {NewPrefEmailId}

    your input $bin $uid $iDomain

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
$oldMail=$user->extractGreedy(@preferredEmailId,@internetDomainName,@givenName,@surname);
// extract user's container
/** @var nickname $base */
$base = $user->extractGreedy(@domainName,@postOfficeName,@visibility);
// generate reference for nickname
$ref=$user->extractGreedy(@domainName,@postOfficeName,@name)->prefix('user');
// update user's information
/** @var $userUpd user */
$user->url(@PUT,common::putEffectiveValues((object)null,array(
    @internetDomainName=>$iDomain
)));
// create nickname with old address data
$user->requestApiInstance(
    $user->link(@postoffice).'/nicknames',@POST,
    $base->merge(
        $oldMail,
        $ref,
        array(@name=>'nickname_'.$uid,@expirationDate=>$exp)
    )
);

