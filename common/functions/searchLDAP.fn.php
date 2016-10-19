<?php

namespace mlu\common\functions;

use mlu\groupwise\wadl\directory,Exception,mlu\common;

/**
 * search ldap using the api
 *
 * requires global $directoryId to be set
 *
 * @param $searchKey string ldap-search string
 * @return iUser|iGroup|apiResult
 * @throws Exception if no entry was found
 */
function searchLDAP ($searchKey) {
	$loop=0;
	do {
		/** @var apiResult|iListResult|iUser[] $sr */
		// directory search could fail as there are quite a lot connections...
		try {
			$loop++;
			$sr = Directory::search( null, 'filter=(' . $searchKey . ')' );
		} catch (Exception $e) {
			$sr=false;
			common::logWrite("LDAP Search 1 for searchKey='$searchKey' #$loop failed: ". $e->getMessage(),STDERR,"\n");
		}
	} while (!$sr || substr($sr->header('http/1.1'), 0, 1) != '2');
	// read out email-address data
	if(isset($sr->resultInfo) && $sr->resultInfo->outOf==0) {
		global $directoryId;
		throw new Exception("No Entry for <{$searchKey}> in <$directoryId>");
	}
	return $sr->item();
}

