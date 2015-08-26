#!/usr/bin/env php
<?php

require_once('application.php');

/**
 * lists the group visibilty of groups in a optionally specified container
 *
 *
 */

// parse args
foreach(array(@bin,@containerID) as $k=>$varName) {
	$$varName = isset($argv[ $k ]) ? $argv[ $k ] : null;
}

// iterate the groups
$groups=Groups('?attrs=visibilty',$containerID);
do {
	$groups->each(function($g){
		/** @var $g \mlu\groupwise\apiResult|\mlu\groupwise\xsd\group */
		printf("%s\t%s\n",$g->id,$g(@visibility,@missing));
	});
} while($groups=$groups->nextListPage());

// done ;-)