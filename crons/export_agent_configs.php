#!/usr/bin/env php
<?php

use
	mlu\groupwise\xsd\mta,
	mlu\groupwise\xsd\poa,
	mlu\groupwise\xsd\internetAgent as gwia,
	mlu\groupwise\apiResult
	;

// configuration
$outputDir='/var/adm/gw-agent-configs';

require('application.php');

//  create output directory, if necessary; suppress warnings by @-prefix
@mkdir($outputDir,0750,true);
// remove current cfg-files to get git to know which agents were removed
@`rm $outputDir/*.cfg`;

$agents=apiResult::merge(array(
	// $type->$match
	'MTA'=>'domain',
	'POA'=>'postOffice',
	'GWIA'=>'domain'
 ))->each(function($match,$type)use($outputDir){
	// set the function to read out the agents by type
	$fn=$type.'s'; // implies MTAs, POAs or GWIAs
	$fn()->each(function($obj)use($outputDir,$match,$type){
		/** @var $obj apiResult */
		// create the filename -> {AGENTTYPE}.{AGENTNAME}.cfg
		$fName=implode('.',array(
			$type,
			// Agent name is defined by the container.
			$obj($match.'Name'), // $obj->{$match.'Name'}
			'cfg'
		));
		// get raw contents
		$cfg = (array)$obj->content;
		// sort by keys
		ksort($cfg);
		// save to file
		file_put_contents($outputDir.DIRECTORY_SEPARATOR.$fName,print_r($cfg,1));
	});
});

/*

Mtas()->each(function($mta)use($outputDir){
	/** @var mta|apiResult $mta * /
	$fName=$mta->domainName.'.MTA.cfg';

	$cfg = (array)$mta->content;
	ksort($cfg);

	file_put_contents($outputDir.DIRECTORY_SEPARATOR.$fName,print_r($cfg,1));
});


Poas()->each(function($poa)use($outputDir){
	/** @var poa|apiResult $poa * /
	$fName=$poa->postOfficeName.'.POA.cfg';

	$cfg = (array)$poa->content;
	ksort($cfg);

	file_put_contents($outputDir.DIRECTORY_SEPARATOR.$fName,print_r($cfg,1));
});

Gwias()->each(function($gwia)use($outputDir){
	/** @var gwia|apiResult $gwia * /
	$fName=$gwia->domainName.'.GWIA.cfg';

	$cfg = (array)$gwia->content;
	ksort($cfg);

	file_put_contents($outputDir.DIRECTORY_SEPARATOR.$fName,print_r($cfg,1));
});

*/