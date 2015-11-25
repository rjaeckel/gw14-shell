#!/usr/bin/env php
<?php

/**
 * List expired Records by date and time
 * should be used with "|sort -k1,2"
 *
 * Results in a list: DATE TIME ID
 */

use \mlu\groupwise\wadl\system as gw;
use \mlu\groupwise\xsd\restDeliverable;

require_once('application.php');

$list = gw::expired('attrs=expirationDate');
do {
	$list->each(function($itm){
		/** @var $itm restDeliverable */
		printf("%s %s\n",date("Y-m-d H:i:s",round($itm->expirationDate/1000)),$itm->id);
	});
} while ($list = $list->nextListPage());
