#!/usr/bin/env php
<?php
namespace mlu\groupwise\crons;

use mlu\groupwise\apiResult,
    mlu\groupwise\xsd\user
    ;

require_once 'application.php';
require_once 'helpers/worker.cls.php';

$worker=new \worker(20);
$users=users("externalRecord=true");
do {
    $users->each(function ($extU) use ($worker,&$c) {
        /** @var $extU user|apiResult */
        $worker->enqueue(function () use ($extU,$c) {
            try {
                $groupCount = $extU->requestApiInstance($extU->url() . '/groupmemberships?count=10000', @GET)->resultInfo->outOf;
                $nickCount = $extU->requestApiInstance($extU->url() . '/nicknames?count=10000', @GET)->resultInfo->outOf;
                if (!$groupCount+$nickCount) echo "{$extU->id}\n";
            } catch (\Exception $e) {
            }
        })->work(false);
    });
} while($users=$users->nextListPage());
$worker->work(false)->wait();
