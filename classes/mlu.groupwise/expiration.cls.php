<?php

namespace mlu\groupwise;

use \mlu\common;

use mlu\groupwise\wadl\nickname;
use mlu\groupwise\xsd\booleanWrapper;
use mlu\groupwise\xsd\listResult as iList,
    mlu\groupwise\xsd\postOffice as iPO,
    mlu\groupwise\xsd\internetDomain as iIDomain,
    mlu\groupwise\xsd\user as iUser,
    mlu\groupwise\xsd\group as iGroup,
    mlu\groupwise\xsd\resource as iResource,
    mlu\groupwise\xsd\nickname as iNickname,
    mlu\groupwise\xsd\domain as iDomain
    ;
use mlu\groupwise\xsd\listResult;
use mlu\groupwise\xsd\user;

use userDecorator,
    groupDecorator,
    nicknameDecorator;

use DateTime;

/**
 * Class expiration offers helper methods for locking or expiring a mailbox account
 *
 * @package mlu\groupwise
 * @method static apiResult|iPO|iList PostOffices ( $qryStr='', $inId=null );
 * @method static apiResult|iIDomain|iList InternetDomains ( $qryStr='', $inId=null );
 * @method static apiResult|iDomain|iList Domains ( $qryStr='', $inId=null );
 * @method static apiResult|iUser|iList Users ( $qryStr='', $inId=null );
 * @method static apiResult|iResource|iList Resources ( $qryStr='', $inId=null );
 * @method static apiResult|iNickname|iList Nicknames ( $qryStr='', $inId=null );
 */
class expiration {

    // -------------------------------------------------------------------------
    // used from crons/importLDAPUsers.php

    /**
     * we want users deleted from GWLDAP to be expired yesterday
     * @param $user apiResult|user
     */
    public static function foundUserWhoIsNotInDirectoryAnymore($user, $directoryId, $searchKey, $unused_e)
    {

        $user_id = $user->id;
        $user_with_links = $user->url('get');

        $userfilter = "";
        //$user->link
        // user.getAllEmailAddresses -domain=gwdomm -postoffice=pom01 -user=soa8z

        // user.listAliases -domain=gwdomm -postoffice=pom01 -user=soa8z

        // user.nicknames -domain=gwdomm -postoffice=pom01 -user=soa8z
        /* @var $nicknames listResult|apiResult */
        $nicknames = $user_with_links->link('nicknames', true); // ->nickname::getList();
        $nicknameCount = $nicknames->resultInfo->outOf;

        // user.listGroupMemberships -domain=gwdomm -postoffice=pom01 -user=soa8z
        /* @var $groups listResult|apiResult */

        $groups = $user_with_links->link('groupmemberships',true); // ->nickname::getList();
        $groupCount = $groups->resultInfo->outOf;
        //$groupName = $groups->content

	    logUserScheduledForDeletionAndMaybeMissingInDirectory($user, TRUE);
        //common::logWrite( "   {$nicknames->resultInfo}", STDERR, "\n" );
        //foreach ($nicknames->resultInfo as $nn) {
        //    common::logWrite( "   {$nn}", STDERR, "\n" );
        //}

        //common::logWrite ( " {$nicknames}", STDERR, "\n" );
        //common::logWrite ( "")
        // common::logWrite ( "LDAP Search failed for User <{$user_id}> (s: $searchKey): {$e->getMessage()}", STDERR, "\n" );
        // common::logWrite ( " - - Trace: " . $e->getTraceAsString (), STDERR, "\n" );

    }

	/**
	 * we want users deleted from GWLDAP to be expired yesterday
	 * @param $user apiResult|user
	 */
	public static function logUserScheduledForDeletionAndMaybeMissingInDirectory($user, $isMissingInDirectory)
	{
		$expirationTime = $user('expirationDate',null);

		$oneDayMilliseconds = 24*60*60*1000.0;
		$nowMilliseconds = time() * 1000; // timestamp in milliseconds

		if (is_null($expirationTime) && !$isMissingInDirectory)
		{
			# hier könnte noch der Status im Nutzerprojekt abgefragt werden.
			//return # normaler Account
		}
		elseif (is_null($expirationTime))
		{
			//if ($isMissingInDirectory) {}


			common::logWrite ( "Account missing in directory <{$directoryId}>: I set expirationDate. without expirationDate  <{$user_id}> (s: $searchKey) with {$nicknameCount} nicknames and {$groupCount} groups.", STDERR, "\n" );
		}
		else
		{
			$expiresInDays = intval(round( ($expirationTime - $nowMilliseconds) / $oneDayMilliseconds ));
			$expiresDaysAgo = -$expiresInDays;
			if ($expiresInDays > 0) {
				common::logWrite ( "Account expires in <{$expiresInDays}> days but is already missing in directory {$directoryId}:  <{$user_id}> (s: $searchKey) with {$nicknameCount} nicknames and {$groupCount} groups.", STDERR, "\n" );
			} elseif ($expiresInDays < 0) {
				common::logWrite ( "Account expired $expiresDaysAgo days ago and is missing in directory {$directoryId}: <{$user_id}> (s: $searchKey) with {$nicknameCount} nicknames and {$groupCount} groups.", STDERR, "\n" );
			} else {
				common::logWrite ( "Account expires/expired today and is already missing in directory {$directoryId}:  <{$user_id}> (s: $searchKey) with {$nicknameCount} nicknames and {$groupCount} groups.", STDERR, "\n" );
			}
		}


		$expired = $user('expirationDate',null);
		$user_id = $user->id;
		common::logWrite ( "Found user <{$user_id}> who is scheduled for deletion at {$expired}:", STDERR, "\n" );
		if ($expired) {
			printf( "expired: $expired" . PHP_EOL . PHP_EOL);
		}
	}

	/**
	 * we want users deleted from GWLDAP to be expired yesterday
	 * @param $user apiResult|user
	 */
	public static function foundUserWhoIsScheduledForDeletion($user)
	{
		logUserScheduledForDeletionAndMaybeMissingInDirectory($user, FALSE);

	}

    /**
     * Prints useful status information to the User to STDERR
     * @param $user apiResult|user
     */
    public static function logWriteUserDetails($user)
    {

    }

    /**
     * Check if the given User is scheduled for deletion, i.e. has an expiration date in past
     * @param $user apiResult|user
     * @return bool
     */
    public static function isUserScheduledForDeletion($user)
    {
        //$user->prettyTimes();
        $expirationDate = expiration::prettyDateTime(expiration::timestamp_msec_2_datetime($user('expirationDate',null)));
        $forceInactive = $user('forceInactive',null);
        $loginDisabled = $user('loginDisabled',null);
        $forceInactiveTime = expiration::prettyDateTime(expiration::timestamp_msec_2_datetime($user('forceInactiveTime',null)));
        printf( "expired: {$expirationDate} / forceInactive={$$forceInactive} / loginDisabled={$loginDisabled} / forceInactiveTime={$forceInactiveTime}" . PHP_EOL . PHP_EOL);
        $today = new DateTime('today');
        if ($expirationDate || $expirationDate > $today) {
            common::logWrite ( "  TRUE", STDERR, "\n" );
            return TRUE;
        } else {
            common::logWrite ( "  FALSE", STDERR, "\n" );
            return FALSE;
        }
    }


    /**
     * Converts a unix timestamp in milliseconds to the corresponding DateTime object
     * @param $timestamp_msec int|null Unix timestamp in milliseconds
     * @return DateTime|null
     */
    private static function timestamp_msec_2_datetime($timestamp_msec) {
        if (is_null($timestamp_msec)) {
            return null;
        } else {
            $timestamp_seconds = $timestamp_msec / 1000 ;
            return new \DateTime("@".$timestamp_seconds);
        }
    }

    /**
     * Prettyfies da DateTime as a Maybe monad
     * @param $maybeDateTime DateTime|null
     * @return string|null
     */
    private static function prettyDateTime($maybeDateTime){
        if (is_null($maybeDateTime)) {
            return null;
        } else {
            return $maybeDateTime->format("Y-m-d H:i:s");
        }
    }

    // public static function getNicknames
    // -------------------------------------------------------------------------
    // used from werkzeuge/lock-account.php
    public static function showAccount($u) {
        /* @var $u iUser|apiResult*/
        print($u('surname','(undefined)') . PHP_EOL);
        print($u('givenName','(undefined)') . PHP_EOL . PHP_EOL);

        $expired = $u('expirationDate',null);
        if ($expired) {
            printf( "expired: $expired" . PHP_EOL . PHP_EOL);
        }
	    $inactive = $u('forceInactive',null);
	    if ($inactive) {
		    printf( "inactive: $inactive" . PHP_EOL . PHP_EOL);
	    }

    }

    public static function getDatabase() {
        /** @var PDO $db */
        $db = common::getPDO(unserialize(common::def('__listDb')));
        // clear table contents...
        return $db;
    }

}