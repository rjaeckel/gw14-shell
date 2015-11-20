#!/usr/bin/env php
<?php

use
	mlu\groupwise\xsd\mta,
	mlu\groupwise\xsd\poa,
	mlu\groupwise\xsd\internetAgent as gwia,
	mlu\groupwise\apiResult
	;

$outputDir='/var/adm/gw-agent-configs';

require('application.php');

//  create output directory, if neccessary, suppress warnings by @-prefix
@mkdir($outputDir,0750,true);

Mtas()->each(function($mta)use($outputDir){
	/** @var mta|apiResult $mta */
	$fName=$mta->domainName.'.MTA.cfg';

	$cfg = (array)$mta->content;
	ksort($cfg);

	file_put_contents($outputDir.DIRECTORY_SEPARATOR.$fName,print_r($cfg,1));
});


Poas()->each(function($poa)use($outputDir){
	/** @var poa|apiResult $poa */
	$fName=$poa->postOfficeName.'.POA.cfg';

	$cfg = (array)$poa->content;
	ksort($cfg);

	file_put_contents($outputDir.DIRECTORY_SEPARATOR.$fName,print_r($cfg,1));
});

Gwias()->each(function($gwia)use($outputDir){
	/** @var gwia|apiResult $gwia */
	$fName=$gwia->domainName.'.GWIA.cfg';

	$cfg = (array)$gwia->content;
	ksort($cfg);

	file_put_contents($outputDir.DIRECTORY_SEPARATOR.$fName,print_r($cfg,1));
});