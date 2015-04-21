#!/usr/bin/env php
<?php

namespace mlu\groupwise\tools;

use mlu\groupwise\apiResult;
use mlu\groupwise\xsd\restAddressable;

require_once 'application.php';

/**
 * @var $bin        string path to executable
 * @var $domain        string user id to be modified
 */
$argList=array('bin','domain');
foreach($argList as $n) $$n=@array_shift($argv)?:'?';
//$bin = basename(array_shift($argv));

if($argc<2) {
   echo <<<eoi
Listet alle Email-Adressen und Objekt-IDs einer InternetDomain auf.
    $bin {username} {iDomain}

    your input $bin $domain

eoi;
    exit($argc);
}

$objects=Baseobjects('count=1000&internetdomainname='.$domain);
do {
    $objects->each(function($o){
        /** @var $o restAddressable|apiResult */
        $o=$o->url(@GET);
        echo $o->emailAddresses[0].' '.$o->id.' '."\n";
    });
} while($objects=$objects->nextListPage());
