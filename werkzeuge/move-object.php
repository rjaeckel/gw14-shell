#!/usr/bin/env php
<?php

/*
define('__devmode',1);
define('__devRequests',1);

*/

//define('id','sdfas');

require_once 'application.php';

$bin = array_shift($argv);

if($argc<3) die (<<<usage
Not enough arguments.

Usage: $bin <poname> <username> ...

usage
);


$poName = array_shift($argv);
$users=$argv;

echo "Target: ".($poId=Postoffices("name=$poName")->select('name',$poName)->item()->id)."\n";
$userIDs=array();

foreach ($users as $uName) {
	$userIDs[]=Baseobjects("name=$uName")->select(@name,$uName)->item()->extract(@id)->content;
}
echo "Object to be moved:\n";
foreach ($userIDs as $u) {
	echo " - {$u->id}\n";
}
/** @var $moveRequest \mlu\groupwise\xsd\moveRequest */
$moveRequest=(object)null;
$moveRequest->postOfficeId=$poId;
$moveRequest->sources=$userIDs;


echo \mlu\groupwise\wadl\system::moveUsers($moveRequest);
