#!/usr/bin/env php
<?php
/**
 * Used to lock an accout by expire date or by just disabling the login.
 *
 * Usage
 *   ./werkzeuge/lock-account.php OPERATION REASON account1 account2 ...
 *
 * OPERATIONS
 *   expire   (will be logged)
 *   unexpire (will be logged)
 *   lock     (will be logged)
 *   unlock   (will be logged)
 *   show     (will NOT be logged)
 *
 * REASON examples
 *   user account expired
 *   functional account not used for over one year
 *   suspected abuse
 *   ...
 *
 * User: dlmueller
 * Date: 30.11.15
 * Time: 13:27
 */

//define('__devmode',true);

use \mlu\common;
use \mlu\groupwise\wadl\system; // unter wadl liegen die abtrahierten methoden
// unter xsd die strukturen
use \mlu\groupwise\xsd\user as iUser;
use \mlu\groupwise\apiResult;

require('application.php');

$bin = array_shift($argv);

if (!count($argv)) {
	fwrite(STDERR,<<<USAGE
Usage $bin OP REASON ACCOUNT...

USAGE
);
}

$op = array_shift($argv);

$reason = array_shift($argv);


/*
function abc ($x) {
	echo "$x\n";
}

$f='abc';
$f('hello welt');

$m=array($obj,'methode');
$m('asdf');
*/


/** @var PDO $db */
$db = common::getPDO(unserialize(common::def('__listDb')));
// clear table contents...


function expireAccount($u, $db, $reason) {

	showAccount($u) ;
	/** @var mlu\groupwise\xsd\restDeliverable $update */
	$update=new stdClass(); // (object)null
	$update->expirationDate = (time()-24*3600) * 1000 ;
	$update->forceInactive = true;

	// echo $u->url().PHP_EOL;

	$expired = $u('expirationDate',null);
	if ($expired) {
		printf("Account is already expired" . PHP_EOL);
	} else {
		// speichern
		$u->url('PUT',$update)->header('http/1.1');

		//print_r( $u) ;
		$stmt = $db->prepare("INSERT INTO account_locking_reasons (nkz, reason, operation, inserted_by) values (?, ?, ?, ?)");
		$stmt->execute(array($u->name, $reason, 'locked', 'gwadmin'));
		//mlu\groupwise\wadl\obj::setVars(array('id'=>$id))->object()->url('PUT',$update);
	}
}



function unexpireAccount($u, $db, $reason) {

	showAccount($u) ;
	/** @var mlu\groupwise\xsd\restDeliverable $update */
	$update=new stdClass(); // (object)null
	$update->expirationDate = 0;
	$update->forceInactive = false;

	// echo $u->url().PHP_EOL;

	$expired = $u('expirationDate',null);
	if ($expired) {
		// speichern
		$u->url('PUT',$update)->header('http/1.1');

		//print_r( $u) ;
		$stmt = $db->prepare("INSERT INTO account_locking_reasons (nkz, reason, operation, inserted_by) values (?, ?, ?, ?)");
		$stmt->execute(array($u->name, $reason, 'unlocked', 'gwadmin'));
		//mlu\groupwise\wadl\obj::setVars(array('id'=>$id))->object()->url('PUT',$update);
	} else {
		printf("Account was not expired at all" . PHP_EOL);
	}
}


function showAccount($u) {
	/* @var $u iUser|apiResult*/
	print($u('surname','(undefined)') . PHP_EOL);
	print($u('givenName','(undefined)') . PHP_EOL . PHP_EOL);

	$expired = $u('expirationDate',null);
	if ($expired) {
		printf( "expired: $expired" . PHP_EOL . PHP_EOL);
	}


}

/*
$users->each(function ($u)use($update,$db) {
	// ...
});
*/
if ($op == 'expire') {

	$f = function ( $u ) use ( $db, $reason ) {
		expireAccount ( $u, $db, $reason );
	};

} elseif ($op == 'unexpire') {

	$f = function($u)use($db, $reason) {
		unexpireAccount($u, $db, $reason)	;
	};

	} elseif ($op = 'show') {
	$f = function($u)use($reason) {
		showAccount($u)	;
		print "reason = '$reason'" . PHP_EOL ;
	};
} else {
	$f = function($u) {
		print "unknown operation";
	};
}


foreach ($argv as $i=>$nkz) {

	print $i . ' ' . $nkz . PHP_EOL;
	/*$data = */
	// &attrs=givenName,surname
	$users = Users("name=$nkz");
	$foundCount = $users->resultInfo->outOf;

	if($foundCount == 1) {

		$users->each($f);

	} else {
		fwrite ( STDERR, sprintf ( "Search for user <%s> did not succeed: found %d", $nkz, $foundCount ) );
	}
	/*
	// explizites ansprechen des http-payloads ohne fehlerprüfung und wrapping
	foreach($data as $user) {
		print_r( $user) ;
		$user->surname;
	}
	*/

}

