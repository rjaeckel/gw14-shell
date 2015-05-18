#!/usr/bin/env php
<?php

namespace mlu\groupwise\tools;

use mlu\common;
use mlu\groupwise\apiResult;
use mlu\groupwise\xsd\nickname;
use mlu\groupwise\xsd\restAddressable;
use mlu\groupwise\xsd\user;
use mlu\value;

require_once 'application.php';

/**
 * @var $bin        string path to executable
 * @var $uid        string user id to be modified
 * @var $emailId    string preferred email id
 * @var $iDomain    string user's new internetDomainName
 */
$arglist=array('bin','uid','emailId','iDomain');
foreach($arglist as $n) $$n=@array_shift($argv)?:'?';
//$bin = basename(array_shift($argv));

if($argc<3) {
    echo <<<eoi
Erstellt einen beliebigen Nickname für ein vorhandenes Ojeckt.
Ist keine iDomain angegeben, wird die des referenzierten Objekt genutzt.

    $bin {objID} {emailId} [{iDomain}]

    your input $bin $uid $emailId $iDomain

eoi;
    exit($argc);
}

// get user information
/** @var restAddressable|apiResult $obj */
$obj=Baseobjects('count=1&attrs=name',$uid)->item()->url(@GET);

// use defined iDomain or take the user's one
($iDomain!='?')||$iDomain=$obj->internetDomainName->value;
// extract object's container
$base = $obj->extractGreedy(@domainName,@postOfficeName);
// generate reference for nickname
$ref=$obj->extractGreedy(@domainName,@postOfficeName,@name)->prefix('user');
// put all properties together
$nick=common::putEffectiveValues(
    apiResult::merge(
        $base,
        $ref,
        array(
            @preferredEmailId=>$emailId,
            @visibilty=>@none,
            @name=>'nickname_'.str_replace('.','-',$emailId).'_at_'.strtolower(str_replace('.','-',$iDomain))
        )
    ),
    array(@internetDomainName=>$iDomain)
);

// create the new nickname and show the data
echo $obj->requestApiInstance($obj->link(@postoffice).'/nicknames',@POST,$nick)->reload();

