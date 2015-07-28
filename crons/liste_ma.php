#!/usr/bin/env php
<?php

namespace mlu\groupwise\crons;

use mlu\common,
    mlu\common as c,
    mlu\groupwise\apiResult,
    mlu\groupwise\xsd\membership,
    mlu\groupwise\xsd\restAddressable,
    mlu\nutzerprojekt\addr_db,
    PDO;

require_once 'application.php';
require_once 'helpers/worker.cls.php';

/*
Table: addr_ma
Columns:
email_id	varchar(128) PK
email_domain	varchar(128) PK
gw_id	varchar(128)
gw_time	datetime
db_time	timestamp
 */

/** @var PDO $db */
$db=c::getPDO(unserialize(c::def('__listDb')));
// clear table contents...
$db->query("Delete from addr_ma",PDO::FETCH_OBJ);
$worker = new \worker(20);

/** @var $ma_group membership **/
$ma_group=(object)array(@participation=>@BLIND_COPY,@id=>"GROUP.gwdomm.pom00.nutzer_ma");

$u = Baseobjects('count=1000','DOMAIN.gwdomm');
do {
    $u->each(function($u)use($worker,$ma_group){
        /** @var $u apiResult|restAddressable */
        $worker->enqueue(function()use($u,$ma_group){
            $memberships=$u->url().'/groupmemberships';
            //echo $memberships."\n";
            if(0===stripos($u->id,@USER)) $u->requestApiInstance($memberships, @POST, $ma_group);
            /** @var $u apiResult|restAddressable */
            $u=$u->url(@GET);
            echo "{$u->id} - {$u->emailAddresses[0]}\n";
            $db=c::getPDO(unserialize(c::def('__listDb')));
            $db->query('INSERT INTO addr_ma VALUES ("'.implode('","',array(
                           //emailid,domain,id,gwtime
                           $u(@preferredEmailId,$u(@name)),
                           $u->internetDomainName->value,
                           $u->id,
                           date("Y-m-d h:i:s",(int)($u->timeLastMod/1000))
                       )).'",NULL);')||print_r($db->errorInfo());
        })->work(false);
    });
} while($u=$u->nextListPage());
$worker->work()->wait();