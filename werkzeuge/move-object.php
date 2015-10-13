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

echo "Object(s) to be moved:\n";
foreach ( $users as $uName ) {
	$userIDs[] = $u = Baseobjects( "name=$uName" )->select( @name, $uName )->item()->extract( @id )->content;
	echo " - {$u->id}\n";
}
/** @var $moveRequest \mlu\groupwise\xsd\moveRequest */
$moveRequest=(object)null;
$moveRequest->postOfficeId=$poId;
$moveRequest->sources=$userIDs;


echo \mlu\groupwise\wadl\system::moveUsers($moveRequest);
