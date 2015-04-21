#!/usr/bin/env php
<?php

namespace mlu\groupwise\crons;

use mlu\common,
    mlu\groupwise\xsd\internetDomain,
    mlu\groupwise\apiResult,
    mlu\groupwise\xsd\user;

require_once 'application.php';

internetdomains("count=1000&externalrecord=false")->each(function($iDom){
    echo "{$iDom(@name)} . . . \r";
    $found=false;
    /** @var $iDom internetDomain */
    $u = users("externalRecord=true&internetdomainname=".$iDom->name);
    do {
        if(!$u('object',false)) break;
        $found=true;
        $u->each(function ($u) {
            /** @var $u apiResult|user */
            fwrite(STDERR,sprintf("%-80s\t%s\n",
                $u(@preferredEmailId).'@'.$u(@internetDomainName)->value,
                $u(@id)
            ));
            //print_r($u);
        });
    } while ($u = $u->nextListPage());
    $found&&fwrite(STDERR,"\n");
});