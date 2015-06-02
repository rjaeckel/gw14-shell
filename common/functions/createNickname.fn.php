<?php

namespace mlu\common\functions;

use mlu\common;
use mlu\groupwise\apiResult;
use mlu\groupwise\xsd\restAddressable;


function createNickname ($forObjID,$emailId,$iDomain='?',$attributes=array()) {
	/** @var apiResult|restAddressable $obj */
	// search for the GroupWise object ID and return the object
	$obj=Baseobjects('count=1&attrs=name',$forObjID)->item()->url(@GET);
	// use defined iDomain or take the user's one
	($iDomain!='?')||$iDomain=$obj->internetDomainName->value;
	// extract object's container
	$base = $obj->extractGreedy(@domainName,@postOfficeName);
	// generate reference for nickname
	$ref=$obj->extractGreedy(@domainName,@postOfficeName,@name)->prefix('user');
	// put all properties together
	$nick=common::putEffectiveValues(
		apiResult::merge(
			$base,
			$ref,
			array(
				@preferredEmailId=>$emailId,
				@visibilty=>@none,
				@name=>'nickname_'.str_replace('.','-',$emailId).'_at_'.strtolower(str_replace('.','-',$iDomain))
			),
			$attributes
		),
		array(@internetDomainName=>$iDomain)
	);
	// create the new nickname and return the data
	return $obj->requestApiInstance($obj->link(@postoffice).'/nicknames',@POST,$nick)->reload();

}