#!/usr/bin/env php
<?php
/**
 * Used to lock an accout by expire date or by just disabling the login.
 *
 * Usage
 *   ./werkzeuge/lock-account.php OPERATION REASON account1 account2 ...
 *
 * OPERATIONS
 *   refresh
 *   expired
 *   expires_next_month
 *   exmat_last_spring   (31.03. previous year)
 *   exmat_last_autumn   (30.09. previous year)
 *   exmat_this_spring   (31.03. current year)
 *   exmat_this_autumn   (30.09. current year)
 *   retired_...
 *   unexpire
 *   lock
 *   unlock
 *   show        (will NOT be logged)
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

use \mlu\groupwise\expiration;

require('application.php');


function accountExpiredYesterday($u, $db, $reason)
{
  $nkz = $u->name;
  expiration::showAccount($u);

  $yesterday = new DateTime('yesterday');

  /** @var mlu\groupwise\xsd\restDeliverable $update */
  $update = new stdClass(); // (object)null
  $update->expirationDate = $yesterday->getTimestamp() * 1000;
  $update->forceInactive = true;

  // echo $u->url().PHP_EOL;

  $expired = $u('expirationDate', null);

  $query = $db->prepare("SELECT count(*) cnt FROM account_locking_reasons WHERE nkz = ?");
  $query->execute(array( $nkz ));
  $count = 0;
  while ($row = $query->fetch(PDO::FETCH_OBJ)) {
    /*its getting data in line.And its an object*/
    $count = $row->cnt;
    break;
  }
  if ($expired && $count > 0) {
    printf("Account is already expired." . PHP_EOL);
  } else {
    // speichern
    $u->url('PUT', $update)->header('http/1.1');

    //print_r( $u) ;
    $insert_stmt = $db->prepare("INSERT INTO account_locking_reasons (nkz, reason, operation, inserted_by) values (?, ?, ?, ?)");
    $insert_stmt->execute(array( $nkz, $reason, 'locked', 'gwadmin' ));
    //mlu\groupwise\wadl\obj::setVars(array('id'=>$id))->object()->url('PUT',$update);
  }
}

function accountExpiresEndOfNextMonth($u, $db, $reason)
{

//	expiration::showAccount($u) ;

  $endOfNextMonth = new DateTime('last day of next month');
  accountExpiresAt($u, $db, $reason, $endOfNextMonth, 'expiresNextMonth', 'gwadmin');

//	/** @var mlu\groupwise\xsd\restDeliverable $update */
//	$update=new stdClass(); // (object)null
//	$update->expirationDate = $endOfNextMonth->getTimestamp() * 1000 ;
  //$update->forceInactive = false;


  // echo $u->url().PHP_EOL;

//	$expired = $u('expirationDate',null);
//	if ($expired) {
//		printf("Account is already expired" . PHP_EOL);
//	} else {
//	if (true) {
//		// speichern
//		$u->url('PUT',$update)->header('http/1.1');
//
//		//print_r( $u) ;
//		$stmt = $db->prepare("INSERT INTO account_locking_reasons (nkz, reason, operation, inserted_by) values (?, ?, ?, ?)");
//		$stmt->execute(array($u->name, $reason, 'expiresNextMonth', 'gwadmin'));
//		//mlu\groupwise\wadl\obj::setVars(array('id'=>$id))->object()->url('PUT',$update);
//	}

}

function accountExpiresAt($u, $db, $reason, $newExpirationDate, $logOperation, $logUser)
{

  expiration::showAccount($u);

  $today = new DateTime('today');

  /** @var mlu\groupwise\xsd\restDeliverable $update */
  $update = new stdClass(); // (object)null
  $update->expirationDate = $newExpirationDate->getTimestamp() * 1000;
  if ($newExpirationDate < $today) {
    $update->forceInactive = true;
  } else {
    $update->forceInactive = false;
  }

  // echo $u->url().PHP_EOL;

  $currentExpirationDate = $u('expirationDate', null);
  if ($currentExpirationDate == $newExpirationDate) {
    printf("Account expirationDate is already " . $newExpirationDate->strftime("Y-m-d") . PHP_EOL);
  } else {
    printf("Protokolliere in Datenbank" . PHP_EOL);
    // speichern
    $u->url('PUT', $update)->header('http/1.1');

    //print_r( $u) ;
    $stmt = $db->prepare("INSERT INTO account_locking_reasons (nkz, reason, operation, inserted_by) values (?, ?, ?, ?)");
    $stmt->execute(array( $u->name, $reason, $logOperation, $logUser ));
    //mlu\groupwise\wadl\obj::setVars(array('id'=>$id))->object()->url('PUT',$update);
  }
}


function unexpireAccount($u, $db, $reason)
{

  expiration::showAccount($u);

  /** @var mlu\groupwise\xsd\restDeliverable $update */
  $update = new stdClass(); // (object)null
  $update->expirationDate = 0;
  $update->forceInactive = false;

  // echo $u->url().PHP_EOL;

  $expired = $u('expirationDate', null);
  if ($expired) {
    // speichern
    $u->url('PUT', $update)->header('http/1.1');

    //print_r( $u) ;
    $stmt = $db->prepare("INSERT INTO account_locking_reasons (nkz, reason, operation, inserted_by) values (?, ?, ?, ?)");
    $stmt->execute(array( $u->name, $reason, 'unlocked', 'gwadmin' ));
    //mlu\groupwise\wadl\obj::setVars(array('id'=>$id))->object()->url('PUT',$update);
  } else {
    printf("Account was not expired at all" . PHP_EOL);
  }
}

/**
 * Aktualisiert die GW-Austauschdatenbank bzgl. des Löschstatus.
 * @param $id , Eintragsnummer auf der Sperrliste
 * @param $nkz , fünfstelliges Nutzerkennzeichen
 * @param $u , NULL, wenn Nutzer im Groupwise nicht (mehr) existiert.
 * @param $db , DB-Verbindung zu MySQL a6arv_groupwise_addresses
 * @param $count , Anzahl der (Ent)sperreinträge zum NKZ
 */
function refreshLatestEntryFromGroupWise($id, $nkz, $u, $db, $count)
{
  if (is_null($u)) {
    $fullname = "UNKNOWN"; // Nutzer wurde im GroupWise gelöscht, umbenannt oder existierte noch nie
    $expirationDateTime = null;
    $forceInactive = 2; // Mailbox gelöscht -> für Anzeige im Adminportal!
    // fwrite(STDERR, sprintf("Search for user <%s> did not succeed: found %d" . PHP_EOL, $nkz, $foundCount));
    $mailboxStatus = "   mailbox deleted   ";
  } else {
    /* @var $u iUser|apiResult */
    $lastname = $u('surname', '');
    $firstname = $u('givenName', ''); // funktionale Accounts haben keinen Vornamen
    $fullname = trim("$firstname $lastname");
    $maybeExpirationDate = $u('expirationDate', null);
    if ($maybeExpirationDate) {
      $expirationDateTime = date("Y-m-d H:i:s", round($maybeExpirationDate / 1000));
      $expireDisplay = date("Y-m-d", round($maybeExpirationDate / 1000));
    } else {
      $expirationDateTime = null;
      $expireDisplay = "....-..-..";
    }
    $forceInactive = $u('forceInactive', null) | 0;
    if ($forceInactive == 0) {
      $inactiveDisplay = "active";
    } elseif ($forceInactive == 1) {
      $inactiveDisplay = "locked";
    } else {
      $inactiveDisplay = "unknwn";
    }
    $mailboxStatus = "$inactiveDisplay exp=$expireDisplay";
  }

  printf("[$nkz: $mailboxStatus] $fullname (id=$id, count=$count)" . PHP_EOL);
  $stmt = $db->prepare("UPDATE `account_locking_reasons` SET `force_inactive` = ?, `expiration_date`=? WHERE `nkz`=?");
  $success = $stmt->execute(array( $forceInactive, $expirationDateTime, $nkz ));
  #var_dump($success);
}

function refreshLockingStatusFromGroupWise($db)
{
  printf("Übernehme Sperr- und Ablaufstatus (forceInactive, expirationDate) aus GroupWise ... \n");

  foreach ($db->query("SELECT nkz, max(id) id, count(*) cnt FROM account_locking_reasons GROUP BY nkz ORDER BY nkz") as $row) {
    //print_r($row);
    $nkz = $row[ 'nkz' ];
    $id = $row[ 'id' ];
    $count = $row[ 'cnt' ];
    $users = Users("name=$nkz");
    $foundCount = $users->resultInfo->outOf;

    $handleFound = function($u) use ($db, $nkz, $id, $count) {
      refreshLatestEntryFromGroupWise($id, $nkz, $u, $db, $count);
    };

    $handleMissing = function($u) use ($db, $nkz, $id, $count) {
      refreshLatestEntryFromGroupWise($id, $nkz, null, $db, $count);
    };
    if ($foundCount == 1) {
      $users->each($handleFound);
    } else {
      $users->each($handleMissing);
    }
  }

  //
  //expiration::showAccount($u) ;
}

function main($argv)
{


  $bin = array_shift($argv);

  if ( !count($argv)) {
    fwrite(STDERR, <<<USAGE
Usage $bin show ACCOUNT...
Usage $bin OP REASON ACCOUNT...

these OPs will lock the account due to an expirationDate in the past
  expired            - 'yesterday'
  expired_yeserday   - 'yesterday'
  expires_this_month - 'Anfang des kommenden Monats'
  expires_next_month - 'Ende des kommenden Monats'
  exmat_last_spring  - exmat. on 31.03. previous year -> expires end of september previous year

these OPs will set an expirationDate in the future
  expires_next_month - 'end of next month'

   unexpire           - removes expirations
  show               - shows the current account status in GroupWise

USAGE
    );
  }

  /** @var PDO $db */
  $db = expiration::getDatabase();

// exmat_last_autumn  - exmat. on 30.09. previous year -> expires end of march this year
// exmat_this_spring  - exmat. on 31.03. current year -> expires end of september this year
// exmat_this_autumn  - exmat. on 30.09. current year -> expires end of march next year

  $op = array_shift($argv);
  if ($op == "refresh") {
    refreshLockingStatusFromGroupWise($db);
    exit();
  } elseif ($op == "show") {
    $reason = "info";
  } else {
    $reason = array_shift($argv);
  }

  /*
  function abc ($x) {
    echo "$x\n";
  }

  $f='abc';
  $f('hello welt');

  $m=array($obj,'methode');
  $m('asdf');
  */


  /*
  $users->each(function ($u)use($update,$db) {
    // ...
  });
  */

  $f = function($u) {
    print "unknown operation";
    expiration::showAccount($u);
  };

  if ($op == 'expired' or $op == 'expired_yesterday') {

    $f = function($u) use ($db, $reason) {
      accountExpiredYesterday($u, $db, $reason);
    };

  } elseif ($op == 'expires_this_month') {

    $f = function($u) use ($db, $reason) {
      $startOfNextMonth = new DateTime('first day of next month');
      accountExpiresAt($u, $db, $reason, $startOfNextMonth, 'expiresThisMonth', 'gwadmin');
    };

  } elseif ($op == 'expires_next_month') {

    $f = function($u) use ($db, $reason) {
      $endOfNextMonth = new DateTime('last day of next month');
      accountExpiresAt($u, $db, $reason, $endOfNextMonth, 'expiresNextMonth', 'gwadmin');
      // accountExpiresEndOfNextMonth($u, $db, $reason);
    };

  } elseif ($op == 'exmat_last_spring') {

    $f = function($u) use ($db, $reason) {
      $exmatDate = new DateTime('last day of march last year');
      $expireDate = new DateTime('last day of september last year');
      $logOperation = 'locked Student bis ' . $exmatDate->format('Y-m-d') . ' -> Ablauf ' . $expireDate->format('Y-m-d');
      //$logOperation1 = 'exmat ' . $exmatDate->format('Y-m-d');
      print($logOperation . PHP_EOL);
      accountExpiresAt($u, $db, $reason, $expireDate, $logOperation, 'gwadmin');

    };

  } elseif ($op == 'exmat_last_autumn ') {
  } elseif ($op == 'exmat_this_spring') {
  } elseif ($op == 'exmat_this_autumn ') {
  } elseif ($op == 'unexpire') {

    $f = function($u) use ($db, $reason) {
      unexpireAccount($u, $db, $reason);
    };

  } elseif ($op = 'show') {
    $f = function($u) use ($reason) {
      expiration::showAccount($u);
      print "reason = '$reason'" . PHP_EOL;
    };
  }

  foreach ($argv as $i => $nkz) {

    print $i . ' ' . $nkz . PHP_EOL;
    /*$data = */
    // &attrs=givenName,surname
    $users = Users("name=$nkz");
    $foundCount = $users->resultInfo->outOf;

    if ($foundCount == 1) {

      $users->each($f);

    } else {
      fwrite(STDERR, sprintf("Search for user <%s> did not succeed: found %d", $nkz, $foundCount));
    }
    /*
    // explizites ansprechen des http-payloads ohne fehlerprüfung und wrapping
    foreach($data as $user) {
      print_r( $user) ;
      $user->surname;
    }
    */

  }

}


main($argv);
