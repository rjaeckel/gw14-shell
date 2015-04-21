#!/usr/bin/env php
<?php

#define('__devmode',true);
#define('__devRequests',true);
require_once 'application.php';
require_once 'helpers/worker.cls.php';

$internetDomain="paedagogik.uni-halle.de";
$newVisibility="POST_OFFICE"; //NONE POST_OFFICE DOMAIN SYSTEM

use mlu\groupwise\apiResult as res,
    \mlu\groupwise\xsd\restAddressable as iAddressable,
    mlu\groupwise\xsd\listResult;

$worker=new worker(100);

$list = array(
    //'postoffices'=>'externalRecord=true', #external postoffices incl. addresses
    //'groups'=>'', #aliases
    'users'=>'internetdomainname='.$internetDomain,
    //'nicknames'=>'', #alternate and mailequivalent addresses
    //'users'=>'ldapdn=uid=&internetdomainname=student.uni-halle.de', #ldap-users
    //'users'=>'internetdomainname=student.uni-halle.de',
    //'internetdomains'=>'',
    #'users'=>'lastModifiedOp=add' #import-failures
);

foreach($list as $fn=>$filter) {
    try {
        $query=$qry = "$filter&count=1000&attrs=name";
        $total = 0;
        $nextid='';
        do {
            //echo "\rDeleting $fn({$filter}{$nextid})... ";
            /** @var res|listResult $l */
            $l=$fn($query.$nextid/*,"DOMAIN.gwdoms"*/);
            //$removes=array();
            if ($l('object', false)) {
                $l->each(function ($item) use (&$worker,$newVisibility) {
                    $worker->enqueue(function()use($item,$newVisibility){
                        /** @var $item iAddressable|res */
                        //print_r(@mlu\common::putEffectiveValues((object)null,array('internetdomainname'=>'groupwise.uni-halle.de')));
                        echo $item('id')."\r ... ";
                        $item->url(@PUT,(object)array(@visibility=>$newVisibility))->reload();
                    },worker::AUTOSTART);
                });
                /** @var \mlu\groupwise\api $q */
                $q = $l->request->apiInstance;
                $total+=$c=count($l('object'));
                //$worker->enqueue(function()use($q,$l,$removes){
                //    $q($l->request->url, 'put', array('remove' => $removes));
                //},worker::AUTOSTART);
            }
            echo "found $total. ";
        } while (isset($l('resultInfo',(object)null)->nextId) && ($nextid="&nextid=".$l('resultInfo')->nextId));
        echo "\n";
    } catch (Exception$e){echo $e->getMessage()."\n";};
}
echo "Waiting for tasks to finish...";
$worker->work()->wait();
echo "\nDone :D\n";
/**
 * $apiResult->request=array(
 * 'base'=>$this->base,
'method'=>$method,
'url'=>$url,
'data'=>$data,
'apiInstance'=>$this
);
 */
