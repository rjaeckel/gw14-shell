#!/usr/bin/env php
<?php

namespace mlu\groupwise\crons;

use mlu\common,
    mlu\groupwise\apiResult,
    mlu\groupwise\xsd\user;
use mlu\groupwise\xsd\membership;

require_once 'application.php';
require_once 'helpers/worker.cls.php';

$worker = new \worker(20);

/** @var $ma_group membership **/
$ma_group=(object)array(@participation=>@BLIND_COPY,@id=>"GROUP.gwdomm.pom03.liste_bc_at_biochemtech");

$u = users('internetdomainname=biochemtech.uni-halle.de&count=1000','DOMAIN.gwdomm');
do {
    $u->each(function($u)use($worker,$ma_group){
        /** @var $u apiResult|user */
        if (false!== strpos($u->preferredEmailId,'.')||$u->preferredEmailId=='pruefungsamt')
        $worker->enqueue(function()use($u,$ma_group){
            $memberships=$u->url().'/groupmemberships';
            //echo $memberships."\n";
            $u->requestApiInstance($memberships,@POST,$ma_group);
            /** @var $u apiResult|user */
            $u=$u->url(@GET);
            echo "{$u->id} - {$u->emailAddresses[0]}\n";
        })->work(false);
    });
} while($u=$u->nextListPage());
$worker->work()->wait();