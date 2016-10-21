<?php

namespace mlu\common\functions;

use mlu\common;
use mlu\groupwise\apiResult;
use mlu\groupwise\xsd\nickname;
use mlu\groupwise\xsd\restAddressable;
use mlu\groupwise\xsd\restEffectiveInternetDomainName as iDomain;

/**
 * @param string         $forObjID Base_object reference to link nickname with
 * @param string         $emailId  preferred email id to be set
 * @param iDomain        $iDomain
 * @param nickname|array $attributes additional attributes to be set
 *
 * @return mixed
 * @throws \Exception if something went wrong
 */
function createNickname ($forObjID,$emailId,$iDomain=null,$attributes=array()) {
	/** @var apiResult|restAddressable $obj */
	// search for the GroupWise object ID and return the object
	$obj=Baseobjects('count=1&attrs=name',$forObjID)->item()->url(@GET);

	// use defined iDomain or take the user's one
	(!$iDomain)||$iDomain=$obj->internetDomainName;
	// extract object's container
	$base = $obj->extractGreedy(@domainName,@postOfficeName);
	// generate reference for nickname
	$ref=$obj->extractGreedy(@domainName,@postOfficeName,@name)->prefix('user');
	// put all properties together
	$nick=
		apiResult::merge(
			$base,
			$ref,
			array(
				@preferredEmailId=>$emailId,
				@visibilty=>@none,
				@name=>'nickname_'.str_replace('.','-',$emailId).'_at_'.strtolower(str_replace('.','-',$iDomain->value)),
				@internetDomainName=>$iDomain
			),
			$attributes
		)
	;
	// create the new nickname and return the data
	return $obj->requestApiInstance($obj->link(@postoffice).'/nicknames',@POST,$nick)->reload();

}

// FOR TESTING:
/*
if(__FILE__ === realpath($argv[0])) {
	define('_devmode',true);
	define('_devRequests',true);

	require_once 'application.php';

	echo createNickname('USER.gwdomm.pom00.abewm','rj'.time(),'itz.uni-halle.de');
}
*/