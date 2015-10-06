#!/usr/bin/env php
<?php

use mlu\groupwise\xsd\internetDomain;
use mlu\groupwise\apiResult;
use Exception as E;
/**
define('__devmode',true);
define('__devRequests',true);
/**/
require_once 'application.php';



Internetdomains("attrs=description")->each(function($iDom){
	/** @var $iDom internetDomain|apiResult */
	$iDomain = $iDom(@name);
	#printf("%s\t%s\n",$iDom(@name),$iDom(@description,''));
	//  split iDomain description into possible POs
	$POs = array_filter(preg_split('/[\s\r\n]+/',$iDom(@description,'')));
	// walk each PO...
	array_map(function($poName)use($iDomain){
		try {
			$count=0; $size=0;
			// start search
			$users=Postoffices( "name=$poName&attrs=domain" ) // pick POs with matching name
				   ->item() // might throw exception if no PO with searched Name exists
				   ->seekUsers("internetdomainname=$iDomain&attrs=mailboxSizeMb"); // seach inside of PO
			// iterate all result pages (users with iDomain in PO)
			do {
				// check we have an non-empty result
				#try { $users('object'); } catch (E $e) { break; }
				#try { $users->item(); } catch (E $e) { break; }
				if(!(isset($users->resultInfo->nextId)||$users->resultInfo->outOf>0))break;
				// walk each user and accumulate size and count
				$users->each( function ( $u ) use ( &$count, &$size ) {
					$size += $u( @mailboxSizeMb, 0 ); $count += 1;
				} );
			} while ($users=$users->nextListPage());
			// print results
			printf("%s\t%s\t%d\t%dMB\n",$iDomain,$poName,$count,$size);
		} catch (E $e) {}
	},$POs);
});
