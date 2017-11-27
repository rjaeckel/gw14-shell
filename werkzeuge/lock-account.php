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
//define('__devRequests',true);

use \mlu\common;
use \mlu\groupwise\wadl\system; // unter wadl liegen die abtrahierten methoden
// unter xsd die strukturen
use \mlu\groupwise\xsd\user as iUser;
use \mlu\groupwise\apiResult;

use \mlu\groupwise\expiration;

use \mlu\groupwise\listCache as cache;

require('application.php');

$NOISE = "[NOISE] ";

/**
   create table locking_requests_tbl (
       request_id  integer      not null AUTO_INCREMENT
     , request_by  varchar(255) not null
     , nkz         varchar(255) not null
     , operation   varchar(255) not null
     , reason      varchar(255) not null
     , constraint locking_requests_pk  primary key (request_id)
     , constraint locking_requests_uq1 unique (nkz, operation)
   );
 */
function processBatchJobs($db)
{
    $sql = <<<EOD
    select
        req.request_id
      , req.request_by
      , req.nkz
      , req.operation
      , req.reason
      , log.id
    from locking_requests_tbl req
    left join account_locking_reasons log
      on (log.request_id = req.request_id or (log.nkz = req.nkz and req.operation = 'expired' and log.operation in ('locked', 'expired')))
    where log.id is null
EOD;

    foreach ($db->query($sql) as $row) {
      $request_id = $row[ 'request_id' ];
      $request_by = $row[ 'request_by' ];
      $nkz = $row[ 'nkz' ];
      $op = $row[ 'operation' ];
      $reason = $row[ 'reason' ];
      $users = Users("name=$nkz");
      $foundCount = $users->resultInfo->outOf;

      $f = null;
      if ($op == 'expired') {
        $f = function($u) use ($db, $reason, $request_by, $request_id) {
          accountExpiredYesterday($u, $db, $reason, $request_by, $request_id);
        };
      }

      if (is_null($f)) {
        // unbekannte Operation
      } else {
        if ($foundCount == 1) {
          $users->each($f);
        }
      }
    };
}

function accountExpiredYesterday($u, $db, $reason, $request_by = 'gwadmin',  $request_id = null)
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

  $tablenames = array(
  //   "gw_users_tbl", 
     "account_locking_reasons"
  );

  foreach ($tablenames as $tablename) {
    $select_sql = "SELECT count(*) cnt FROM $tablename WHERE nkz = ?";
    $query = $db->prepare($select_sql);
    $query->execute(array( $nkz ));
    $count = 0;
    while ($row = $query->fetch(PDO::FETCH_OBJ)) {
      /*its getting data in line.And its an object*/
      $count = $row->cnt;
      break;
    }
    if ($expired && $count > 0) {
      printf("Account is already marked as expired in table $tablename." . PHP_EOL);
    } else {
      // im Groupwise speichern
      $u->url('PUT', $update)->header('http/1.1');
      //print_r( $u) ;

      // in der GW-Austauschtabelle speichern
      $insert_sql = <<<EOD
          INSERT INTO $tablename (nkz, reason, operation, inserted_by, force_inactive, request_id)
          values (?, ?, ?, ?, ?, ?)
EOD;
      $insert_stmt = $db->prepare($insert_sql);
      $insert_stmt->execute(array( $nkz, $reason, 'locked', $request_by, 1, $request_id ));
      //mlu\groupwise\wadl\obj::setVars(array('id'=>$id))->object()->url('PUT',$update);
    }
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

//	$expired = $u(expired" . PHP_EOL);
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
  $tablename = "gw_users_tbl"; // "account_locking_reason"

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
    $insert_sql = "INSERT INTO $tablename (nkz, reason, operation, inserted_by) values (?, ?, ?, ?)";
    $stmt = $db->prepare($insert_sql);
    $stmt->execute(array( $u->name, $reason, $logOperation, $logUser ));
    //mlu\groupwise\wadl\obj::setVars(array('id'=>$id))->object()->url('PUT',$update);
  }
}


/**
 * Liefert TRUE, wenn der Eintrag eingefügt wurde, sonst FALSE.
 * @return bool
 */
function importAccountFromGroupwise($nkz, $db, $reason, $u, $verbose=true)
{
  $hasEntry = hasLockingReason($db, $nkz);
  if (!$hasEntry) {
    $mailboxLicenseType = $u('mailboxLicenseType', 'NONE');
    $postoffice = $u->postOfficeName;
    $tablename = "gw_users_tbl"; // "account_locking_reasons"
    $sql = <<<EOD
    INSERT INTO $tablename
    (nkz, reason, operation, inserted_by, mailbox_license_type, postoffice)
    VALUES (?, ?, ?, ?, ?, ?)
EOD;
    $stmt = $db->prepare($sql);
    $stmt->execute(array($nkz, $reason, 'watch', 'gwadmin', $mailboxLicenseType, $postoffice));
    if ($verbose) {
        printf("$nkz in Tabelle $tablename aufgenommen" . PHP_EOL);
    }
    return true;
  } else {
    if ($verbose) {
        printf("$nkz war bereits aufgenommen" . PHP_EOL);
    }
    return false;
  }
}

/**
 * Liefert TRUE, wenn der Eintrag eingefügt wurde, sonst FALSE.
 * @return bool
 */
function watchAccount($nkz, $db, $reason, $verbose=true)
{
  if (true) {
    $handleUser = function($u) use ($db, $nkz, $verbose) {
      //var_dump($u);
      list($directoryId, $ldapDn) = getUserDirectoryLink($u);
      // printf("DEBUG: $nkz: $directoryId = $directoryId, ldapDn = $ldapDn" . PHP_EOL);
    };
    $users = Users("name=$nkz");
    $users->each($handleUser);
  }
  $hasEntry = hasLockingReason($db, $nkz);
  $tablename = "gw_users_tbl"; // "account_locking_reasons"
  if (!$hasEntry) {
    $stmt = $db->prepare("INSERT INTO $tablename (nkz, reason, operation, inserted_by) values (?, ?, ?, ?)");
    $stmt->execute(array( $nkz, $reason, 'watch', 'gwadmin' ));
    if (true or $verbose) {
        printf("$nkz in Tabelle $tablename aufgenommen" . PHP_EOL);
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
  $tablename = "account_locking_reasons"; // "gw_users_tbl"

  /** @var mlu\groupwise\xsd\restDeliverable $update */
  $update = new stdClass(); // (object)null
  $update->expirationDate = 0;
  $update->forceInactive = false;

  // echo $u->url().PHP_EOL;

  $hasEntry = hasLockingReason($db, $nkz, $tablename);
  $expired = $u('expirationDate', null);
  if ($expired) {
    // speichern
    $u->url('PUT', $update)->header('http/1.1');

    //print_r( $u) ;
    $stmt = $db->prepare("INSERT INTO $tablename (nkz, reason, operation, inserted_by) values (?, ?, ?, ?)");
    $stmt->execute(array( $u->name, $reason, 'unlocked', 'gwadmin' ));
    //mlu\groupwise\wadl\obj::setVars(array('id'=>$id))->object()->url('PUT',$update);
  } else { // if (!$hasEntry) {
    $stmt = $db->prepare("INSERT INTO $tablename (nkz, reason, operation, inserted_by) values (?, ?, ?, ?)");
    $stmt->execute(array( $u->name, $reason, 'unlocked', 'gwadmin' ));
  } // else {
 //   printf("Account was not expired at all" . PHP_EOL);
//  }
}

/**
 *
 */
function importRecentlyCreatedOrModifiedUsersFromGroupwise($db)
{
}

/**
 * Anlässlich Redmine #710
 */
function importUsersFromGroupwise($db, $condition)
{
    $items_per_page = 500;
    $verbose = false;
    $reason = "importiert wegen '$condition'";
    $condition_with_limit = "$condition&count=$items_per_page";
    // values from GroupWise
    $users = Users($condition_with_limit); 
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
        if (isset($u->name)) {
          $nkz = $u->name;
        } elseif (isset($u->networkId)) {
          $nkz = $u->networkId;
        } else {
          printf("User has no 'name' Attribute:" . PHP_EOL);
          var_dump($u);
          return;
        }
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
	$was_new = importAccountFromGroupwise($nkz, $db, $reason, $u, $verbose);
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
            $info_line = "From GW: $userCount ($condition)" . PHP_EOL;
            printf($info_line);
            $users->each($handleUser);
            $users = $users->nextListPage();
        }
    }
    $info_line = "From GW: $userCount ($condition)" . PHP_EOL;
    printf($info_line);
}


function getUserDirectoryLink($u)
{
  // var_dump($u)
  $directoryId = null;
  $ldapDn = null;
  if (is_null($u)) {
    return array($directoryId, $ldapDn);
  }
  $usr = $u->content;
  try {
    if (isset($usr->directoryId)) {
      $directoryId = $usr->directoryId;
    };
  } catch(Exception $e) {
    // echo 'Message: ' .$e->getMessage();
  }
  if (is_null($directoryId)) {
    try {
      //$directoryId = $usr->ldapAuthenticationDirectory;
    } catch(Exception $e) {
      // echo 'Message: ' .$e->getMessage();
    }
  }
  try {
    if (isset($usr->ldapDn)) {
      $ldapDn = $usr->ldapDn;
    }
  } catch(Exception $e) {
    // echo 'Message: ' .$e->getMessage();
  }
  return array($directoryId, $ldapDn);
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
function refreshLatestEntryFromGroupWise($id, $nkz, $u, $db, $entryCount, $userCount,
                                         $maxForceInactive, $minExpirationDate, 
                                         $reason, $now)
{
  global $NOISE;

  // Hinweis zu DATETIME/TIMESTAMP in MySQL:
  // Quelle: https://stackoverflow.com/questions/12120433/php-mysql-insert-date-format
  //
  // The DATETIME type is used for values that contain both date and time parts.
  // MySQL retrieves and displays DATETIME values in 'YYYY-MM-DD HH:MM:SS' format.
  // The supported range is '1000-01-01 00:00:00' to '9999-12-31 23:59:59'.
  //
  // The TIMESTAMP data type is used for values that contain both date and time parts.
  // TIMESTAMP has a range of '1970-01-01 00:00:01' UTC to '2038-01-19 03:14:07' UTC.

  $today = date("Y-m-d");

  $no_noise = "       "; // will be filled with "[NOISE]" to ease suppressing redundant information in cronjobs
  $no_date =  "____-__-__";
  $noise = $no_noise;
  $UNKNOWN = "UNKNOWN";
  list($directoryId, $ldapDn) = getUserDirectoryLink($u);
  // printf("DEBUG: $nkz: $directoryId, $ldapDn, $now" . PHP_EOL);
  if (is_null($u)) {
    $visibility = "NONE";
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
        $noise = $NOISE;
    };
    $gwid = null;
    $name = null;
    $postoffice = null;
    $gw_domain = null;
    $mailboxLicenseType = null;
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
  $tablename = "gw_users_tbl"; // "account_locking_reasons"
  $sql = <<<EOD
  UPDATE $tablename
     SET `force_inactive` = ?, 
         `expiration_date` = ?,
          gw_domain = ?, postoffice = ?, gwid = ?,
          mailbox_size = ?, mail = ?,
          directoryid = ?, ldapdn = ?,
	  firstname = ?,  lastname = ?,
          mailbox_license_type = ?,
          imported_at = ?
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
        $now,
	$nkz, // letzte Zeile!
	));
  //var_dump($success);
}


/**
 * TODO: Tabelle gw_postoffices_tbl befuellen
 */
function importPostOffices($db)
{
    $internal_post_offices = array(
        'pom00', 'pom01', 'pom02', 'pom03', 'pom04',
        'pom05', 'pom06', 'pom07', 'pom08', 'pom09',
        'pom10',
        'pos06', 'pos07', 'poms8', 'pos09',
    );
    if (false) {
      // cache::PostOffices("domainName=gwdom&count=100" );
      cache::PostOffices("count=10000" );
      $f = function($po) use($db) {
          $id = $po->id;
          if(startsWith($id, "POST_OFFICE.gw-extern.")) {
              printf("BUH: $id" . PHP_EOL);
          } else {
              printf("BAH: $id" . PHP_EOL);
          }
       };
       cache:PostOffices()->each($f);
    }
    return $internal_post_offices;
}

function startsWith($haystack, $needle)
{
     $length = strlen($needle);
     return (substr($haystack, 0, $length) === $needle);
}


/**
 * Importiert alle Nutzer aus Groupwise in die Austauschdatenbank.
 */
function importUsers($db)
{
/*
object(stdClass)#15 (40) {
  ["@type"]          => string(4)  "user"
  ["@url"]           => string(61) "/gwadmin-service/domains/gwdomm/postoffices/pom99/users/abcde"
  ["guid"]           => string(36) "8EA59F81-17AD-0000-9867-776461669999"
  ["id"]             => string(23) "USER.gwdomx.pox99.abcde"
  ["lastModifiedBy"] => string(18) "xxxxx.pox99.gwdomm"
  ["lastModifiedOp"] => string(6)  "MODIFY"
  ["name"]           => string(5)  "abcde"
  ["timeCreated"]    => int(1427677819000)
  ["timeLastMod"]    => int(1498265934000)
  ["internetDomainName"] => object(stdClass)#16 (3) {
    ["inherited"]        => bool(false)
    ["value"]            => string(16) "bereich.uni-halle.de"
    ["exclusive"]        => bool(true)
  }
  ["description"]  => string(14) "Beschreibung"
  ["directoryId"]  => string(2)  "xd"
  ["domainName"]   => string(6)  "gwdomx"
  ["ldapDn"]       => string(43) "CN=abcde,OU=Nutzer,DC=xd,DC=uni-halle,DC=de"
  ["ldapId"]       => string(32) "292BB95AA85C044F83F2535CAF2CD999"
  ["moveStatus"]   => object(stdClass)#17 (16) {
    ["action"]     => string(22) "UDB_MOVE_USER_FINISHED"
    ["attempt"]    => int(0)
    ["beginTime"]  => int(1438945557000)
    ["count"]      => int(717)
    ["domainName"] => string(6)  "gwdomx"
    ["endTime"]    => int(1438945557000)
    ["errno"]      => int(0)
    ["grandTotal"] => int(717)
    ["lastAction"] => string(22) "UDB_MOVE_USER_FINISHED"
    ["originalDomainName"] => string(6)  "gwdomx"
    ["originalFileId"]     => string(3)  "ghi"
    ["originalGuid"]       => string(36) "8EA59F81-17AD-0000-9867-776461669999"
    ["originalName"]       => string(5)  "abcde"
    ["originalPostOfficeName"] => string(5) "pox00"
    ["postOfficeName"]         => string(5) "pox00"
    ["subTotal"]               => int(104)
  }
  ["postOfficeName"]        => string(5)  "pox99"
  ["preferredEmailAddress"] => string(36) "vorname.nachname@bereich.uni-halle.de"
  ["preferredEmailId"]      => string(19) "vorname.nachname"
  ["visibility"]            => string(6)  "DOMAIN"
  ["fileId"]                => string(3)  "ghi"
  ["loginDisabled"]         => bool(false)
  ["company"]               => string(3)  "MLU"
  ["department"]            => string(25) "Abteilung"
  ["faxNumber"]             => string(5)  "123458"
  ["givenName"]             => string(11) "Vorname"
  ["lastClientLoginTime"]   => int(1498247654000)
  ["lastClientType"]        => string(7)  "MAC_80X"
  ["mailboxLicenseType"]    => string(7)  "LIMITED"
  ["mailboxSizeMb"]         => int(1660)
  ["middleInitial"]         => string(3)  "ABC"
  ["networkId"]             => string(28) "abcde.Nutzer.xd.uni-halle.de"
  ["otherPhoneNumber"]      => string(14) "+4934555-00000"
  ["postOfficeBox"]         => string(36) "vorname.nachname@bereich.uni-halle.de"
  ["postalZipCode"]         => string(5)  "06120"
  ["prefix"]                => string(9)  "Dr."
  ["streetAddress"]         => string(15) "Str."
  ["surname"]               => string(7)  "Nachname"
  ["telephoneNumber"]       => string(14) "+4934555-00000"
  ["title"]                 => string(10) "Abteilungsleiter"
}
*/
  $handleItem = function($u) use ($db) {
    handleUser($db, $u->content, $u);
  };
  $guid = "8EA59F81-17AD-0000-9867-776461663435";
  $filter = "guid=$guid";
  $items = Users($filter);
  $items->each($handleItem);
}

function handleUser($db, $content, $u)
{
  $guid = $content->guid;
  $name = $content->name;
  $mail = $content->preferredEmailAddress;
  if (false) {
    var_dump($content);
  }
  printf("$guid $name $mail" . PHP_EOL);
  //getUserClientOptions($db, $content, $u);
  getUserGroupMemberships($db, $content, $u);
}

function handleUserMembership($db, $user, $membership)
{
  var_dump($membership);
}

function getUserGroupMemberships($db, $user, $u)
{
  $obj = $u->requestApiInstance($u->url() . '/groupmemberships?count=10000', @GET)->content;
  if (false) {
    var_dump($obj);
  }
  foreach ($obj->object as $membership) {
    handleUserMembership($db, $user, $membership);
  }
}

function getUserClientOptions($db, $content, $u)
{
/*
boxSizeLimit
    $memberships = $u->url().'/clientoptions';
    //echo $memberships."\n";
    $u->requestApiInstance($memberships, @GET);
    var_dump($u);
    /** @var $u apiResult|restAddressable 
    //$m = $u->url(@GET);
    //echo "{$u->id} - {$u->emailAddresses[0]}\n";
*/
}

/**
 * Importiert alle Gruppen aus Groupwise in die Austauschdatenbank.
 */
function importGroups($db)
{
  $handleItem = function($i) use ($db) {
    handleGroup($db, $i->content);
    $memberships = $r->url().'/groupmemberships';
            //echo $memberships."\n";
            if(0===stripos($u->id,@USER)) $u->requestApiInstance($memberships, @POST, $ma_group);
            /** @var $u apiResult|restAddressable */
            $u=$u->url(@GET);
            echo "{$u->id} - {$u->emailAddresses[0]}\n";
    handleGroup($db, $i->content);
  };
  $guid = "F4137E0F-0D21-0000-9867-776463313536";
  $filter = "guid=$guid";
  //$filter = "name=alias_clemens-krebs_at_philfak2-uni-halle-de";
  $items = Groups($filter);
  $items->each($handleItem);
}

function handleGroup($db, $content)
{
/*
  ["guid"]           => string(36) "F4137E0F-0D21-0000-9867-776463319999"
  ["id"]             => string(63) "GROUP.gwdomx.pox99.alias_vorname-nachname_at_bereich-uni-halle-de"
  ["lastModifiedBy"] => string(18) "xxxxx.pox99.gwdomx"
  ["lastModifiedOp"] => string(6)  "MODIFY"
  ["name"]           => string(44) "alias_vorname-nachname_at_bereich-uni-halle-de"
  ["timeCreated"]    => int(1424102748000)
  ["timeLastMod"]    => int(1472634724000)
  ["allowedAddressFormats"] => object(stdClass)#16 (2) {
    ["inherited"]           => bool(false)
    ["value"]               => array(1) {
      [0]                   => string(4) "FULL"
    }
  }
  ["internetDomainName"] => object(stdClass)#17 (3) {
    ["inherited"]        => bool(false)
    ["value"]            => string(21) "bereich.uni-halle.de"
    ["exclusive"]        => bool(true)
  }
  ["domainName"]            => string(6)  "gwdomx"
  ["postOfficeName"]        => string(5)  "pox99"
  ["preferredEmailAddress"] => string(35) "vorname.nachname@bereich.uni-halle.de"
  ["preferredEmailId"]      => string(13) "vorname.nachname"
  ["visibility"]            => string(6)  "SYSTEM"
  ["groupType"]             => string(17) "DISTRIBUTION_LIST"
  ["replicationOverride"]   => string(23) "ACCORDING_TO_VISIBILITY"
*/
  $guid = $content->guid;
  $name = $content->name;
  $mail = $content->preferredEmailAddress;
  if (false) {
    var_dump($content);
  }
  printf("$guid $name $mail" . PHP_EOL);
}



/**
 * Importiert alle Nicknames aus Groupwise in die Austauschdatenbank.
 */
function importNicknames($db)
{
  $handleItem = function($i) use ($db) {
    handleNickname($db, $i->content);
  };
  $guid = "2B08A701-1952-0000-9867-776463313536";
  $filter = "guid=$guid";
  $items = Nicknames($filter);
  $items->each($handleItem);
}

function handleNickname($db, $content)
{
/*
object(stdClass)#14 (21) {
  ["@type"]              => string(8)   "nickname"
  ["@url"]               => string(104) "/gwadmin-service/domains/gwdomm/postoffices/pom01/nicknames/nickname_vorname-nachname_at_bereich-uni-halle-de"
  ["guid"]               => string(36)  "2B08A701-1952-0000-9867-776463319999"
  ["id"]                 => string(66)  "NICKNAME.gwdomm.pom01.nickname_vorname-nachname_at_bereich-uni-halle-de"
  ["lastModifiedBy"]     => string(18)  "xxxxx.pox99.gwdomx"
  ["lastModifiedOp"]     => string(6)   "MODIFY"
  ["name"]               => string(44)  "nickname_vorname-nachname_at_bereich-uni-halle-de"
  ["timeCreated"]        => int(1484662570000)
  ["timeLastMod"]        => int(1484663047000)
  ["internetDomainName"] => object(stdClass)#15 (3) {
    ["inherited"]        => bool(false)
    ["value"]            => string(18)  "bereich.uni-halle.de"
    ["exclusive"]        => bool(true)
  }
  ["domainName"]            => string(6)  "gwdomx"
  ["postOfficeName"]        => string(5)  "pox99"
  ["preferredEmailAddress"] => string(32) "vorname.nachname@bereich.uni-halle.de"
  ["preferredEmailId"]      => string(13) "vorname.nachname"
  ["visibility"]            => string(4)  "NONE"
  ["expirationDate"]        => int(1517353200000)
  ["externalSyncOverride"]  => string(20) "IF_VISIBILITY_SYSTEM"
  ["realMemberType"]        => string(4)  "USER"
  ["userDomainName"]        => string(6)  "gwdomx"
  ["userName"]              => string(5)  "abcde"
  ["userPostOfficeName"]    => string(5)  "pox99"
}

*/
  $guid = $content->guid;
  $name = $content->name;
  $mail = $content->preferredEmailAddress;
  if (false) {
    var_dump($content);
  }
  printf("$guid $name $mail" . PHP_EOL);
}

/**
 * Befuellt die Tabelle gw_internetdomains_tbl
 */
function importInternetDomains($db, $internal_post_offices)
{
    $now = date("Y-m-d H:i:s");
    cache::InternetDomains( 'count=500' );
    global $NOISE;
    $prefix = $NOISE;
    $f = function($iDom) use($db, $now, $prefix) {
        $mail_domainname = $iDom->name;
        $description = $iDom('description', '');
        $parts = preg_split("/[\r\n]+/", $description);
        $assigned_postoffices = implode(" ", $parts);
        $po_count = sizeof($parts);
        upsertInternetDomain($db, $now, $prefix, $mail_domainname, $assigned_postoffices, $po_count);
    };
    cache::InternetDomains()->each($f);
}

/**
 *
 * @param $db, Verbiundung zur GW-Austauschdatenbank
 * @param $now, Zeitstempel den alle neuen/modifizierten Datensätze dieser Generation bekommen
 * @param $name, Name der Maildomain
 * @param $description, Beschreibung = zugeordnete Post-Offices
 */
function upsertInternetDomain($db, $now, $prefix, $name, $description, $po_count)
{
    $tablename = "gw_internetdomains_tbl";
    $insert_sql = "INSERT INTO $tablename (description, imported_at, po_count, mail_domain) values (?, ?, ?, ?)";
    $update_sql = "UPDATE $tablename SET description = ?, imported_at = ?, po_count = ? WHERE mail_domain = ?";
    $values = array(
        $description,
        $now,
        $po_count,
        $name); 

    $update_stmt = $db->prepare($update_sql);
    $u_success = $update_stmt->execute($values);
    $u_rows = $update_stmt->rowCount();
    if ($u_rows > 0) {
       printf($prefix . "UPDATE affected $u_rows row: $description $name" . PHP_EOL);
    } else  {
        $insert_stmt = $db->prepare($insert_sql);
        $i_success = $insert_stmt->execute($values);
        $i_rows = $insert_stmt->rowCount();
        printf($prefix . "INSERT affected $i_rows row: $description $name" . PHP_EOL);
    }
}

function importInternetDomainPostOfficeAssignment($db)
{
    $internal_post_offices = importPostOffices($db);
    importInternetDomains($db, $internal_post_offices);
}

/**
 * Zeigt an, ob zum gegebenen Nutzerkennzeichen ein (Ent)sperreintrag existiert.
 * @param $db , Datenbankverbindung
 * @param $nkz , Nutzerkennzeichen
 * @return bool
 */
function hasLockingReason($db, $nkz, $tablename = "account_locking_reasons")
{
  $count = 0;
  $tablename = "account_locking_reasons"; // "gw_users_tbl"
  $stmt = $db->prepare("SELECT count(*) cnt FROM `$tablename` WHERE `nkz`=?");
  $stmt->execute(array( $nkz ));
  while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
    $count = $row->cnt;
    break;
  }
  return ($count > 0);
}

function refreshLockingStatusFromGroupWise($db)
{
  $now = date("Y-m-d H:i:s");

  $today = new DateTime();
  $today->setTime(0,0);

  $tablename = "gw_users_tbl"; // "account_locking_reasons

  if (false) {
    // Redmine #710: übernehme etwaige direkt im GW gesperrte Nutzer
    importUsersFromGroupwise($db, "forceInactive=true");
    importUsersFromGroupwise($db, "loginDisabled=true");
    $midnight_20150814 = 1439546400000; // 14.08.2015 00:00 Uhr UTC
    importUsersFromGroupwise($db, "filter=expirationDate+gt+$midnight_20150814");

  } elseif (false) {
    // Redmine #807: Mailbox-Lizenz
    importUsersFromGroupwise($db, "mailboxLicenseType=UNKNOWN");
    importUsersFromGroupwise($db, "mailboxLicenseType=FULL");
    importUsersFromGroupwise($db, "mailboxLicenseType=LIMITED");

  } elseif (true) {
    $today_midnight = $today->getTimestamp() * 1000; // 1498435200000;
    importUsersFromGroupwise($db, "filter=timeCreated+ge+$today_midnight");
    importUsersFromGroupwise($db, "filter=timeLastMod+ge+$today_midnight");
  }

  printf("[NOISE] Uebernehme Sperr- und Ablaufstatus (forceInactive, expirationDate) aus GroupWise ... \n");
  $sql =  <<<EOD
select * from
  (
    SELECT nkz, id, max(id) max_id, count(*) cnt, max(force_inactive) max_force_inactive, min(expiration_date) min_expiration_date
    FROM $tablename
    group by nkz
  ) temp
join $tablename r on r.id = temp.max_id
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
    $handleUserFound = function($u) use ($db, $nkz, $id, $entryCount, $userCount, $maxForceInactive, $minExpirationDate, $reason, $now) {
      refreshLatestEntryFromGroupWise($id, $nkz, $u, $db, $entryCount, $userCount, $maxForceInactive, $minExpirationDate, $reason, $now);
    };

    $handleUserMissing = function($u) use ($db, $nkz, $id, $entryCount, $userCount, $maxForceInactive, $minExpirationDate, $reason, $now) {
      //refreshLatestEntryFromGroupWise($id, $nkz, null, $db, $entryCount, $userCount, $maxForceInactive, $minExpirationDate, $reason, $now);
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
  expired_yesterday  - 'yesterday'
  expires_this_month - 'Anfang des kommenden Monats'
  expires_next_month - 'Ende des kommenden Monats'
  expires_next_week  - 'Freitag nächste Woche'
  exmat_last_spring  - exmat. on 31.03. previous year -> expires end of september previous year
  watch              - gleicht den Account beim nächsten 'refresh' mit GroupWise ab
  import_domains     - Importiert die Internetdomains und Post-Office-Zuordnung

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
  } elseif ($op == "import_groups") {
    importGroups($db);
    exit();
  } elseif ($op == "import_nicknames") {
    importNicknames($db);
    exit();
  } elseif ($op == "import_users") {
    importUsers($db);
    exit();
  } elseif ($op == "import_domains") {
    importInternetDomainPostOfficeAssignment($db);
    exit();
  } elseif ($op == 'batchjobs') {
    processBatchJobs($db);
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
        accountExpiredYesterday($u, $db, $reason, 'gwadmin');
    };

  } elseif ($op == 'expires_this_month') {

    $f = function($u) use ($db, $reason) {
      $startOfNextMonth = new DateTime('first day of next month');
      accountExpiresAt($u, $db, $reason, $startOfNextMonth, 'expiresThisMonth', 'gwadmin');
    };

  } elseif ($op == 'expires_in_10_days') {

    $f = function($u) use ($db, $reason) {
      $expirationDate = new DateTime('today');
      $expirationDate->add(DateInterval::createfromdatestring('+10 day'));
      $expString = $expirationDate->format("d.m.Y");
      // print("$expString" . PHP_EOL);
      accountExpiresAt($u, $db, $reason, $expirationDate, "expiresAt_$expString", 'gwadmin');
      // accountExpiresEndOfNextMonth($u, $db, $reason);
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
