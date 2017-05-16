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
  $update->visibility = 'NONE';

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
    $insert_stmt = $db->prepare("INSERT INTO account_locking_reasons (nkz, reason, operation, inserted_by, force_inactive) values (?, ?, ?, ?, ?)");
    $insert_stmt->execute(array( $nkz, $reason, 'locked', 'gwadmin', 1 ));
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
    $update->visibility = "NONE";
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

/**
 * Liefert TRUE, wenn der Eintrag eingefügt wurde, sonst FALSE.
 * @return bool
 */
function watchAccount($nkz, $db, $reason, $verbose=true)
{
  $hasEntry = hasLockingReason($db, $nkz);
  if (!$hasEntry) {
    $stmt = $db->prepare("INSERT INTO account_locking_reasons (nkz, reason, operation, inserted_by) values (?, ?, ?, ?)");
    $stmt->execute(array( $nkz, $reason, 'watch', 'gwadmin' ));
    if (true or $verbose) {
        printf("$nkz in Tabelle account_locking_reasons aufgenommen" . PHP_EOL);
    }
    return true;
  } else {
    if ($verbose) {
        printf("$nkz war bereits aufgenommen" . PHP_EOL);
    }
    return false;
  }
}


function unexpireAccount($u, $db, $reason)
{

  $nkz = $u->name;
  expiration::showAccount($u);

  /** @var mlu\groupwise\xsd\restDeliverable $update */
  $update = new stdClass(); // (object)null
  $update->expirationDate = 0;
  $update->forceInactive = false;

  // echo $u->url().PHP_EOL;

  $hasEntry = hasLockingReason($db, $nkz);
  $expired = $u('expirationDate', null);
  if ($expired) {
    // speichern
    $u->url('PUT', $update)->header('http/1.1');

    //print_r( $u) ;
    $stmt = $db->prepare("INSERT INTO account_locking_reasons (nkz, reason, operation, inserted_by) values (?, ?, ?, ?)");
    $stmt->execute(array( $u->name, $reason, 'unlocked', 'gwadmin' ));
    //mlu\groupwise\wadl\obj::setVars(array('id'=>$id))->object()->url('PUT',$update);
  } elseif (!$hasEntry) {
    $stmt = $db->prepare("INSERT INTO account_locking_reasons (nkz, reason, operation, inserted_by) values (?, ?, ?, ?)");
    $stmt->execute(array( $u->name, $reason, 'unlocked', 'gwadmin' ));
  } else {
    printf("Account was not expired at all" . PHP_EOL);
  }
}

/**
 * Anlässlich Redmine #710
 */
function importLockedUsersFromGroupwise($db, $flavour = 0)
{
    $items_per_page = 500;
    $verbose = false;
    $reason = "Import according to Redmine #710 - Flavour $flavour";
    // values from GroupWise
    if ($flavour == 1) {
       $users = Users("loginDisabled=true"); // &count=$items_per_page
    } elseif ($flavour == 2) {
       $users = Users("filter=expirationDate+gt+1439546400000"); // &count=$items_per_page
    } elseif ($flavour == 3) {
       $reason = "Import according to Redmine #807 - Flavour $flavour";
       $users = Users("mailboxLicenseType=UNKNOWN"); // &count=$items_per_page
    } elseif ($flavour == 4) {
       $reason = "Import according to Redmine #807 - Flavour $flavour";
       $users = Users("mailboxLicenseType=FULL"); // &count=$items_per_page
       // https://gwdom0.itz.uni-halle.de:9710/gwadmin-service/list/USER?directoryId=xd&mailboxLicenseType=LIMITED&attrs=mailboxLizenseType,preferredEmailAddress,directoryId
       // https://gwdom0.itz.uni-halle.de:9710/gwadmin-service/list/USER?mailboxLicenseType=LIMITED&attrs=mailboxLizenseType,preferredEmailAddress,directoryId
       // https://gwdom0.itz.uni-halle.de:9710/gwadmin-service/list/USER?mailboxLicenseType=UNKNOWN&attrs=mailboxLizenseType,preferredEmailAddress,directoryId
       // https://gwdom0.itz.uni-halle.de:9710/gwadmin-service/list/USER?mailboxLicenseType=FULL&attrs=mailboxLizenseType,preferredEmailAddress,directoryId
    } else {
       $users = Users("forceInactive=true&count=$items_per_page");
    }
    $userCount = 0;
    $handleUser = function($u) use ($db, $verbose, $reason) {
        /*
        User: {
	"@type":"user",
	"@url":"\/gwadmin-service\/domains\/gwdoms\/postoffices\/pos07\/users\/abcde",
        "guid":"CCFB4008-14C9-0000-9867-776461663435",
	"id":"USER.gwdoms.pos07.abcde",
	"lastModifiedBy":"admin.MLU-Groupwise",
	"lastModifiedOp":"MODIFY",
        "name":"abcde",
	"timeCreated":1422266096000,
	"timeLastMod":1488728300000,
	"internetDomainName":{
		"inherited":false,
		"value":"student.uni-halle.de",
		"exclusive":true},
        "directoryId":"gwldap",
	"domainName":"gwdoms",
	"forceInactive":true,
	"forceInactiveTime":1480072903,
	"ldapDn":"uid=abcde,ou=mail,o=mlu,c=de",
        "ldapId":"36353535336132382D646462332D313033332D393339352D313363343365376639376263",
        "moveStatus":{
		"action":"UDB_MOVE_USER_FINISHED",
		"attempt":0,
		"beginTime":1422886356000,
		"count":24,
		"domainName":"gwdoms",
		"endTime":1422886356000,
		"errno":0,
       	 	"grandTotal":24,
		"lastAction":"UDB_MOVE_USER_FINISHED",
		"originalDomainName":"gwdoms",
		"originalFileId":"93l",
		"originalGuid":"CCFB4008-14C9-0000-9867-776461663435",
      		"originalName":"abcde",
		"originalPostOfficeName":"pos08",
		"postOfficeName":"pos08",
		"subTotal":24},
        "postOfficeName":"pos07",
	"preferredEmailAddress":"max.mustermann@student.uni-halle.de",
        "preferredEmailId":"max.mustermann",
	"syncNotFoundTime":1480072903,
	"visibility":"NONE",
        "expirationDate":1479942000000,
	"fileId":"93l",
        "givenName":"Max",
	"lastClientLoginTime":1424698648000,
	"mailboxLicenseType":"UNKNOWN",
        "mailboxSizeMb":76,
	"networkId":"abcde",
	"surname":"Mustermann"}
        */
        $nkz = $u->name;
        $name_parts = array();
        if (isset($u->givenName)) {
            $firstname = $u->givenName;
            array_push($name_parts, $firstname);
        }
        if (isset($u->surname)) {
            $lastname = $u->surname;
            array_push($name_parts, $lastname);
        }
        $fullname = implode(" ", $name_parts);
	$was_new = watchAccount($nkz, $db, $reason, $verbose);
        if (false) {
            printf("User: $nkz $fullname" . PHP_EOL);
        }
    };
    while (true) {
        if (!isset($users->resultInfo)) {
            break;
        }
        $resultInfo = $users->resultInfo;
        if (isset($resultInfo->outOf)) {
            $userCount += $users->resultInfo->outOf;
            $users->each($handleUser);
            break;
        } else {
            $userCount += $items_per_page;
            printf("Locked in GW: $userCount" . PHP_EOL);
            $users->each($handleUser);
            $users = $users->nextListPage();
        }
    }
    printf("Locked in GW: $userCount" . PHP_EOL);
}

/**
 * Aktualisiert die GW-Austauschdatenbank bzgl. des Löschstatus.
 * @param $id , Eintragsnummer auf der Sperrliste
 * @param $nkz , fünfstelliges Nutzerkennzeichen
 * @param $u , NULL, wenn Nutzer im Groupwise nicht (mehr) existiert.
 * @param $db , DB-Verbindung zu MySQL a6arv_groupwise_addresses
 * @param $entryCount , Anzahl der (Ent)sperreinträge zum NKZ
 * @param $userCount , Anzahl der im Groupwise gefundenen USER-Objekte zum 'nkz'
 * @param $maxForceInactive , Folgende Werte sind möglich:
 *           1 wenn mindestens einer der 'entryCount' Einträge auf 'GESPERRT' stand,
 *           2 wenn Nutzer durch früheren Lauf als im Groupwise gelöscht erkannt wurde
 *           0 sonst
 * @param $minExpirationDate , kleinstes Ablaufdatum über alle 'entryCount' Einträge
 */
function refreshLatestEntryFromGroupWise($id, $nkz, $u, $db, $entryCount, $userCount, $maxForceInactive, $minExpirationDate, $reason)
{
  $today = date("Y-m-d");

  $no_noise = "       "; // will be filled with "[NOISE]" to ease suppressing redundant information in cronjobs
  $no_date =  "____-__-__";
  $noise = $no_noise;
  $UNKNOWN = "UNKNOWN";
  if (is_null($u)) {
    $visibility = "NONE";
    $directoryId = null;
    $ldapDn = null;
    $loginDisabled = true;
    $fullname = $UNKNOWN; // Nutzer wurde im GroupWise gelöscht, umbenannt oder existierte noch nie
    $expirationDateTime = null;
    $forceInactive = 2; // Mailbox gelöscht -> für Anzeige im Adminportal!
    // fwrite(STDERR, sprintf("Search for user <%s> did not succeed: found %d" . PHP_EOL, $nkz, $foundCount));
    $mailboxStatus = "   mailbox deleted   ";
    $mailboxSize = " none "; // -1 = unbekannt bzw. -2 = undefiniert
    $mailboxSizeMb = -2; // -1 = unbekannt bzw. -2 = undefiniert
    $mail = null;
    $firstname = null;
    $lastname = null;
    if ($forceInactive == $maxForceInactive) {
        $noise = "[NOISE]";
    };
    $gwid = null;
    $name = null;
    $postoffice = null;
    $gw_domain = null;
  } else {
    /* @var $u iUser|apiResult */
    $visibility = $u('visibility',''); // NONE, POST_OFFICE, SYSTEM, DOMAIN
    $lastname = $u('surname', '');
    $firstname = $u('givenName', ''); // funktionale Accounts haben keinen Vornamen
    $fullname = trim("$firstname $lastname");
    $mailboxSizeMb = $u('mailboxSizeMb', null); // scheinbar nicht immer vorhanden?
    $mail = $u('preferredEmailAddress', '');
    $mailboxLicenseType = $u('mailboxLicenseType', 'NONE');
    if (is_null($mailboxSizeMb)) {
      $mailboxSize = "undef";
    } else {
      $mailboxSize = sprintf("%4i MB", $mailboxSizeMb);
    }
    $maybeExpirationDate = $u('expirationDate', null);
    if ($maybeExpirationDate) {
      $expirationDateTime = date("Y-m-d H:i:s", round($maybeExpirationDate / 1000));
      $expireDisplay = date("Y-m-d", round($maybeExpirationDate / 1000));
    } else {
      $expirationDateTime = null;
      $expireDisplay = $no_date;
    }
    $loginDisabled = $u('loginDisabled', null) | false;
    $forceInactive = $u('forceInactive', null) | 0;
    $forceInactiveTimeValue = $u('forceInactiveTime', null) | 0;
    $forceInactiveTime = $no_date;
    if ($forceInactiveTimeValue > 0) {
      $forceInactiveTime = date("Y-m-d", $forceInactiveTimeValue);
    } 
    $directoryId = $u('directoryId', null) | "NONE";
    $ldapDn = $u('ldapDn', null) | "UNKNOWN";
    if ($forceInactive == $maxForceInactive) {
        $noise = "[NOISE]";
    };
    $gwid = $u->id;
    $name = $u->name;
    $postoffice = $u->postOfficeName;
    $gw_domain = $u->domainName;
    // gesperrte Accounts sollten unsichtbar sein!
    if ($forceInactive != 0 and $visibility != 'NONE') { 
        $noise = $no_noise;
    }
    if ($forceInactive == 0) {
      if (!is_null($expirationDateTime) and $today > $expireDisplay) {
	// abgelaufene aber noch aktive Konten sind unerwünscht!
        $inactiveDisplay = "ACTIVE";
        $noise = $no_noise;
      } else {
        $inactiveDisplay = "active";
      }
    } elseif ($forceInactive == 1) {
      $inactiveDisplay = "locked";
    } else {
      $inactiveDisplay = "unknwn";
    }
    $prettyVisibility = $visibility; // sprintf("%-11s", $visibility);
    $prettyDirectory = ""; // "dir=$directoryId, ldapDn=$ldapDn";
    $mailboxStatus = "$inactiveDisplay forceInactiveTime=$forceInactiveTime loginDisabled=$loginDisabled exp=$expireDisplay visibility=$prettyVisibility $prettyDirectory";
  }

  //$db_stats = "$mailboxSize (id=$id, count=$entryCount)";
  $db_stats = "";
  printf("[$nkz.$postoffice.$gw_domain]: $mailboxStatus] $noise $fullname ($reason) $db_stats" . PHP_EOL);
  $sql = <<<EOD
  UPDATE `account_locking_reasons`
     SET `force_inactive` = ?, 
         `expiration_date` = ?,
          gw_domain = ?, postoffice = ?, gwid = ?,
          mailbox_size = ?, mail = ?,
          directoryid = ?, ldapdn = ?,
	  firstname = ?,  lastname = ?,
          mailbox_license_type = ?
   WHERE `nkz`=?
EOD;
  $stmt = $db->prepare($sql);
  $success = $stmt->execute(array(
	$forceInactive,
	$expirationDateTime,
	$gw_domain, $postoffice, $gwid,
	$mailboxSizeMb, $mail,
	$directoryId, $ldapDn,
	$firstname, $lastname,
        $mailboxLicenseType,
	$nkz
	));
  #var_dump($success);
}

/**
 * Zeigt an, ob zum gegebenen Nutzerkennzeichen ein (Ent)sperreintrag existiert.
 * @param $db , Datenbankverbindung
 * @param $nkz , Nutzerkennzeichen
 * @return bool
 */
function hasLockingReason($db, $nkz)
{
  $count = 0;
  $stmt = $db->prepare("SELECT count(*) cnt FROM `account_locking_reasons` WHERE `nkz`=?");
  $stmt->execute(array( $nkz ));
  while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
    $count = $row->cnt;
    break;
  }
  return ($count > 0);
}

function refreshLockingStatusFromGroupWise($db)
{
  // Redmine #710: übernehme etwaige direkt im GW gesperrte Nutzer
  importLockedUsersFromGroupwise($db, 0); // Redmine #710
  importLockedUsersFromGroupwise($db, 1); // Redmine #710
  importLockedUsersFromGroupwise($db, 2); // Redmine #710
  importLockedUsersFromGroupwise($db, 3); // Redmine #807
  importLockedUsersFromGroupwise($db, 4); // Redmine #807

  printf("[NOISE] Uebernehme Sperr- und Ablaufstatus (forceInactive, expirationDate) aus GroupWise ... \n");
  $sql =  <<<EOD
select * from
(SELECT nkz, id, max(id) max_id, count(*) cnt, max(force_inactive) max_force_inactive, min(expiration_date) min_expiration_date
FROM account_locking_reasons 
group by nkz) temp
join account_locking_reasons r on r.id = temp.max_id
order by r.id desc
EOD;

  // Aktualisiere die bereits bekannten.
  foreach ($db->query($sql) as $row) {
    // Values from DB
    $nkz = $row[ 'nkz' ];
    $id = $row[ 'id' ];
    $entryCount = $row[ 'cnt' ];
    $maxForceInactive = $row['max_force_inactive'];
    $minExpirationDate = $row['min_expiration_date'];
    $reason = $row['reason'];
    // values from GroupWise
    $users = Users("name=$nkz");
    $userCount = $users->resultInfo->outOf;

    // some output for debugging
    //print_r($row);

    // event handlers ...	
    $handleUserFound = function($u) use ($db, $nkz, $id, $entryCount, $userCount, $maxForceInactive, $minExpirationDate, $reason) {
      refreshLatestEntryFromGroupWise($id, $nkz, $u, $db, $entryCount, $userCount, $maxForceInactive, $minExpirationDate, $reason);
    };

    $handleUserMissing = function($u) use ($db, $nkz, $id, $entryCount, $userCount, $maxForceInactive, $minExpirationDate, $reason) {
      refreshLatestEntryFromGroupWise($id, $nkz, null, $db, $entryCount, $userCount, $maxForceInactive, $minExpirationDate, $reason);
    };

    // ... and their application
    if ($userCount > 0) {
      $users->each($handleUserFound);
    } else {
      $users->each($handleUserMissing);
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
  watch              - gleicht den Account beim nächsten 'refresh' mit GroupWise ab

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
  } elseif ($op == "watch") {
    // dont shift array $argv!
    $reason = "watch";
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
  } elseif ($op == 'watch') {
    //printf("watching $argv..." . PHP_EOL);
    // var_dump($argv);
    $count = 0;
    foreach ($argv as $nkz) {
      watchAccount($nkz, $db, $reason);
      print "nkz = $nkz" . PHP_EOL;
      $count++;
    }
    if ($count == 0) {
      printf("WARNING: keine Nutzerkennzeichen zur Beobachtung aufgenommen!" . PHP_EOL);
    }
    exit(0);
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

    } elseif ($foundCount == 0) {
      fwrite(STDERR, sprintf("Search for user <%s> did not succeed: nothing found", $nkz, $foundCount));
    } else {
      fwrite(STDERR, sprintf("Search for user <%s> did not succeed: found %d possible entries", $nkz, $foundCount));
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
