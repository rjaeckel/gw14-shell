<?php

namespace mlu\groupwise;

use mlu\groupwise\xsd\listResult as iList,
	mlu\groupwise\xsd\postOffice as iPO,
	mlu\groupwise\xsd\internetDomain as iIDomain,
	mlu\groupwise\xsd\user as iUser,
	mlu\groupwise\xsd\group as iGroup,
	mlu\groupwise\xsd\resource as iResource,
	mlu\groupwise\xsd\nickname as iNickname,
	mlu\groupwise\xsd\domain as iDomain
	;

/**
 * Class listCache cache a listResult for performance reasons
 *
 * @package mlu\groupwise
 * @method static apiResult|iGroup|iList Groups ( $qryStr='', $inId=null );
 * @method static apiResult|iPO|iList PostOffices ( $qryStr='', $inId=null );
 * @method static apiResult|iIDomain|iList InternetDomains ( $qryStr='', $inId=null );
 * @method static apiResult|iDomain|iList Domains ( $qryStr='', $inId=null );
 * @method static apiResult|iUser|iList Users ( $qryStr='', $inId=null );
 * @method static apiResult|iResource|iList Resources ( $qryStr='', $inId=null );
 * @method static apiResult|iNickname|iList Nicknames ( $qryStr='', $inId=null );
 */
class listCache {
	private static $cache=array();

	/**
	 * @param string $name object type to cache
	 * @param array $args parameters to be put into the call;
	 *
	 * @return apiResult|listResult
	 */
	static function __callStatic($name,$args) {
		// look for cache or perform
		isset(static::$cache[$name])||(static::$cache[$name]=call_user_func_array($name,$args));
		return static::$cache[$name];
	}
}
