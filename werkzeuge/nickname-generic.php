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
$argList=array('bin','uid','emailId','iDomain');
foreach($argList as $n) $$n=@array_shift($argv)?:'?';
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

echo common::createNickname($uid,$emailId,(object)array(@value=>$iDomain,@inherited=>false,@exclusive=>true));