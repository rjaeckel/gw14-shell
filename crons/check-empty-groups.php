#!/usr/bin/env php
<?php

namespace mlu\groupwise\crons;

use mlu\common,
    mlu\groupwise\apiResult,
    mlu\groupwise\xsd\group,
    mlu\groupwise\xsd\listResult;

require_once 'application.php';
require_once 'helpers/worker.cls.php';

$worker = new \worker(20);

$g = groups();

do {
    $g->each(function($g)use($worker){
        /** @var $g apiResult|group */
        $worker->enqueue(function()use($g){
            /** @var $members listResult */
            $members=$g->requestApiInstance($g->url().'/members');
            $count=@$members->resultInfo->outOf||@$members->resultInfo->nextId;
            if(!$count) {
                fwrite(STDERR,sprintf("%s\t%s\n", $g(@preferredEmailId) . '@' . $g(@internetDomainName)->value, $g(@id)));
                //print_r($members);
            }
        });
    });
} while($g=$g->nextListPage());

$worker->work();