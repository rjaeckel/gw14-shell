#!/usr/bin/env php
<?php

use mlu\groupwise\wadl\poa;
use mlu\groupwise\wadl\internetagent as gwia;
use mlu\groupwise\wadl\mta;



$argc>2 || die (<<<execDoc
Not enough arguments need {type} and {name}.\n

Types: MTA GWIA POA

execDoc
);


require ('application.php');
// argumente einlesen
list($bin,$type,$name)=$argv;

$qryFn=$type.'s';

$type2paramPrefix=array(
	'mta'=>'domain',
	'poa'=>'postOffice',
	'gwia'=>'domain',
);

$type=strtolower($type);
$param=$type2paramPrefix[$type].'Name';

/** @var \mlu\groupwise\apiResult|\mlu\groupwise\xsd\listResult $res */
$res=$qryFn("$param=$name");
$obj=$res->item();
$toPrint=(array)($obj->content);
ksort($toPrint);
//echo $qryFn("$param=$name");

print_r($toPrint);
