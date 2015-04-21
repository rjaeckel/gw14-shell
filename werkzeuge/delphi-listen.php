#!/usr/bin/env php
<?php

namespace mlu\groupwise\tools;

use mlu\groupwise\apiResult;
use mlu\groupwise\xsd\user;
use worker;

//define('__devmode',true);
//define('__devRequests',true);

require_once('application.php');
require_once('helpers/worker.cls.php');
require_once('helpers/sharedMemory.cls.php');
$w = new worker(8);

$extDelphi1=Users('count=10000&attrs=internetDomainName','POST_OFFICE.gw-extern.delphi1-urz-uni-halle-de');
do {
    $extDelphi1->each(function($u) use ($w) {
        $w->enqueue(function()use($u) {
            /** @var $u user|apiResult */
            $u = $u->url(@GET);
            $gr = $u->link(@groupmemberships, @GET)->item()->id;
            //print_r(Groups(null,$gr)->item()->url());
            //echo "\n";
            $grpMail = Groups(null, $gr)->item()->url(@GET)->emailAddresses[0];
            //print_r($grpMail);
            //print_r($u->content);
            printf("%s,%s@%s\n", $grpMail, $u->name, $u(@internetDomainName, (object)null)->value);
        });
    });
} while ($extDelphi1=$extDelphi1->nextListPage());
$w->work();

