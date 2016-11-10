#!/usr/bin/env php
<?php

namespace mlu\groupwise\crons;

use mlu\common,
  mlu\common as c,
  mlu\groupwise\apiResult,
  mlu\groupwise\xsd\membership,
  mlu\groupwise\xsd\restAddressable,
  mlu\nutzerprojekt\addr_db,
  PDO;
use \Exception;

$USE_WORKERS = false; // true; // false
$WORKER_COUNT = 5; // 20 legen gwdom0 komplett lahm!

require_once 'application.php';

if ($USE_WORKERS) {
  require_once 'helpers/worker.cls.php';
}

/*
Table: addr_ma
Columns:
email_id	varchar(128) PK
email_domain	varchar(128) PK
gw_id	varchar(128)
gw_time	datetime
db_time	timestamp
 */

function startsWith($haystack, $needle)
{
  // search backwards starting from haystack length characters from the end
  return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== false;
}

function endsWith($haystack, $needle)
{
  // search forward starting from end minus needle length characters
  return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== false);
}

function isUser($rawId)
{
  return (0 === stripos($rawId, @USER));
}

function isGroup($rawId)
{
  return (0 === stripos($rawId, @GROUP));
}

function isNickname($rawId)
{
  return (0 === stripos($rawId, @NICKNAME));
}

function getObjectEmailAddress($current, $objectId)
{
  $url = "/gwadmin-service/object/$objectId";
  $other = $current->requestApiInstance($url);
  $other = $other->url(@GET);
  $email = $other->emailAddresses[0];
  return $email;
}

function handleUser($u)
{
  $verbose = false;
  $rawId = $u->id;
  if (sizeof((string)($rawId)) < 4) {
    //echo "ERR: $rawId" . PHP_EOL;
    //return;
  }

  $first_member = null;
  $first_email = null;
  $second_member = null;
  $second_email = null;
  $owning_nkz = null;

  $extras = null;
  $member_count = 0;
  $prefix = "UNK: ";
  if (isUser($rawId)) {
    $prefix = "USR: ";
    // Nutzer
//    $extras = $u->visibility
//      . " " . $u->postOfficeName
//      . " " . $u->forceInactive
////      . " " . $u->ldapDn;  // scheinbar nicht immer da
////    . " " . $u->mailboxSizeMb // scheinbar nicht immer vorhanden?
//    ;
    // $owning_nkz = $u->userName;

  } elseif (isGroup($rawId)) {
    $prefix =  "GRP: ";
    $g = $u;
    $count = 0;
    $items_per_page = 50;
    $url = $g->url() . "/members?count=$items_per_page";
    // echo $url . PHP_EOL;
    $members = $g->requestApiInstance($url);
    $page = @$members->resultInfo;

    $extras = $u->visibility
      . " " . $u->postOfficeName;

    if (property_exists($page, 'nextId')) {
      $nextId = $page->nextId;
	echo "  NEXT = $nextId ($rawId)" . PHP_EOL;
    } else {
      $nextId = null;
    }
    if (is_null($nextId)) {
      $outOf = $page->outOf;
      $count = $outOf;
    }
    if (is_null($first_member) and ($count > 0 or $nextId)) {
      $first_member = @$members->item(0)->id;
      $first_email = getObjectEmailAddress($g, $first_member);
    }
    if (is_null($first_member) and ($count > 1 or $nextId)) {
      $second_member = @$members->item(1)->id;
      $second_email = getObjectEmailAddress($g, $second_member);
    }
    while ($nextId) {
      $members = $g->requestApiInstance($g->url() . "/members?count=$items_per_page&nextId=$nextId");
      try {
        $page = $members->resultInfo;
        $nextId = $page->nextId;
        $page_count = $items_per_page;
      } catch (Exception $e) {
        $remainingObjects = $members->object;
        $page_count = count($remainingObjects);
        $nextId = null;
      }
      $count += $page_count;
      if ($verbose) {
        echo "$items_per_page -> $count WEITER $nextId" . PHP_EOL;
      }
    }
    $member_count = $count;

    // Gruppe (oder ggf. Nickname?)
    $extras = $extras
      . " " . $member_count
      . " " . $first_member;

    if ($member_count == 1) {
     if (isUser($first_member)) {
       $first_parts = preg_split("/\./", $first_member);
       if ($first_parts[1] != "gw-extern") {
         $owning_nkz = array_pop($first_parts);
       }
     }
    }
  } elseif (isNickname($rawId)) {
    $prefix =  "NCK: ";
    $userDomain = $u->userDomainName;
    $userPostOffice = $u->userPostOfficeName;
    $userName = $u->userName;
    $userId = "USER.$userDomain.$userPostOffice.$userName";
    $first_member = $userId;
    $member_count = 1;
    $owning_nkz = $userName;
  } else {
    $prefix = "UNK: ";
  }
  /** @var $u apiResult|restAddressable */
  $u = $u->url(@GET);

  $objectId = $u->id;

  $emailAdress = $u->emailAddresses[0];
  $mailLocalPart = $u(@preferredEmailId, $u(@name));
  $mailDomainPart = $u->internetDomainName->value;
  $gwLastMod = date("Y-m-d h:i:s", (int)($u->timeLastMod / 1000));

  if ($prefix == "USR: ") {
    // $owning_nkz = $u->userName;
  };
  // Nutzer
//    $extras = $u->visibility
//      . " " . $u->postOfficeName
//      . " " . $u->forceInactive
////      . " " . $u->ldapDn;  // scheinbar nicht immer da
////    . " " . $u->mailboxSizeMb // scheinbar nicht immer vorhanden?
//    ;

  if ($verbose) {
    echo "$prefix {$rawId} - {$emailAdress}" . PHP_EOL;
  }
  if (false) {
    echo "    objectId   = $objectId" . PHP_EOL;
    echo "    email      = {$mailLocalPart}@{$mailDomainPart}" . PHP_EOL;
    echo "    gw_time    = $gwLastMod" . PHP_EOL;
    echo "    members    = $member_count Members" . PHP_EOL;
    echo "    1st member = $first_member ($first_email)" . PHP_EOL;
    echo "    2nd member = $second_member ($second_email)" . PHP_EOL;
    echo "    extras     = $extras" . PHP_EOL;
  }
  //echo "{$objectId} - $mailLocalPart@$mailDomainPart\n";

  $db = c::getPDO(unserialize(c::def('__listDb')));
  $sql = <<<EOD
  INSERT INTO addr_ma (email_id, email_domain, gw_id, gw_time, db_time, member_id, member_email, members, owning_nkz)
  values (?, ?, ?, ?, ?, ?, ?, ?, ?)
  ON DUPLICATE KEY UPDATE
  gw_id = ?, gw_time = ?, db_time = ?, member_id = ?, member_email = ?, members = ?, owning_nkz = ?
EOD;

  $stmt = $db->prepare($sql);
  $success = $stmt->execute(array(
    // Primary Keys
    $mailLocalPart, $mailDomainPart,
    // INSERT values
    $objectId, $gwLastMod, NULL, $first_member, $first_email, $member_count, $owning_nkz,
    // UPDATE values
    $objectId, $gwLastMod, NULL, $first_member, $first_email, $member_count, $owning_nkz));

  if ($success !== true) {
    print_r($stmt->errorInfo());
  }
}

function getNextId($u)
{
  $nextId = null;
  try {
    $ri = $u->resultInfo;
    if (property_exists($ri, 'nextId')) {
      $nextId = $ri->nextId;
    }
  } catch (Exception $e) {
     }
  return $nextId;
}


function main($use_workers, $worker_count)
{
  /** @var PDO $db */
  $db = c::getPDO(unserialize(c::def('__listDb')));
// clear table contents...
//  $db->query("Delete from addr_ma", PDO::FETCH_OBJ);

  if ($use_workers) {
    $worker = new \worker($worker_count);
  } else {
    $worker = null;
  }


  $post_office = 'DOMAIN.gwdomm.pom00';
  $objects_per_page = 500;
  $MAX_PAGE_COUNT = 100;
  if (true) {
    $u = Baseobjects("count=$objects_per_page", $post_office);
  } else {
    // Test Cases
    $nicknames = Nicknames("name=nickname_abcde");
    $users = Users("name=abcde");
    $groups = Groups("name=alias_abcde"); // 1 Mitglied
    $u = $nicknames;
    $u = $groups;
    $u = $users;
  }
  $page = 0;
  $nextId = null;
  do {
    $nextId = getNextId($u);
    $page += 1;
    echo "page = $page, objects_per_page = $objects_per_page, nextId = $nextId" . PHP_EOL;
    if (!$use_workers) {
      $u->each(function($u) use ($worker) {
        handleUser($u);
      });
    } else {
      /** @var $u apiResult|restAddressable */
      $worker->enqueue(function() use ($u) {
        handleUser($u);
      })->work(false);
    }
    if ($page > $MAX_PAGE_COUNT) {
      break;
    }
    if (is_null($nextId)) {
      break;
    }
    $u = Baseobjects("count=$objects_per_page&nextId=$nextId", $post_office);
  } while (true); // userLoopCondition($u));
  if ($use_workers) {
    $worker->work()->wait();
  }
}

main($USE_WORKERS, $WORKER_COUNT);
