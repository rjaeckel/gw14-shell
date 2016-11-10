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

$USE_WORKERS = false;


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

function handleUser($u, $ma_group)
{
  $rawId = $u->id;
  if (sizeof((string)($rawId)) < 4) {
    //echo "ERR: $rawId" . PHP_EOL;
    //return;
  }

  $first_member = null;
  $first_email = null;
  $second_member = null;
  $second_email = null;

  $extras = null;
  $member_count = 0;
  if (isUser($rawId)) {
    echo "USR: ";
    // Nutzer
//    $extras = $u->visibility
//      . " " . $u->postOfficeName
//      . " " . $u->forceInactive
////      . " " . $u->ldapDn;  // scheinbar nicht immer da
////    . " " . $u->mailboxSizeMb // scheinbar nicht immer vorhanden?
//    ;
  } elseif (isGroup($rawId)) {
    echo "GRP: ";
    $g = $u;
    $count = 0;
    $items_per_page = 500;
    $url = $g->url() . "/members?count=$items_per_page";
    // echo $url . PHP_EOL;
    $members = $g->requestApiInstance($url);
    $page = @$members->resultInfo;

    $extras = $u->visibility
      . " " . $u->postOfficeName;

    if (property_exists($page, 'nextId')) {
      $nextId = $page->nextId;
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
      echo "$items_per_page -> $count WEITER $nextId" . PHP_EOL;
    }
    $member_count = $count;

    // Gruppe (oder ggf. Nickname?)
    //$members = $u->url() . '/members';
    //$u->requestApiInstance($members, @POST, $ma_group);
    //$g = Groups("id=$groupId")->select('id', $groupId)->item();
    //$res = $g->requestApiInstance($members);
    //$members = $u->doRequest ('listMembers',$data,$queryString);
    //$u->requestApiInstance($members, @POST, $ma_group);
    //echo $members . PHP_EOL;
    $extras = $extras
      . " " . $member_count
      . " " . $first_member;
  } elseif (isNickname($rawId)) {
    echo "NCK: ";
    $userDomain = $u->userDomainName;
    $userPostOffice = $u->userPostOfficeName;
    $userName = $u->userName;
    $userId = "USER.$userDomain.$userPostOffice.$userName";
    $first_member = $userId;
    $member_count = 1;
  } else {
    echo "UNK: ";
  }
  /** @var $u apiResult|restAddressable */
  $u = $u->url(@GET);

  $objectId = $u->id;

//
//  $members = $u->url() . '/$members';
//  if (0 === stripos($u->id, @USER)) {
//    $u->requestApiInstance($members, @POST, $ma_group);
//  }
//  /** @var $u apiResult|restAddressable */
//  $u2 = $u->url(@GET);
//  echo "- {$u2->id} - {$u2->id}\n";

  $emailAdress = $u->emailAddresses[0];
  $mailLocalPart = $u(@preferredEmailId, $u(@name));
  $mailDomainPart = $u->internetDomainName->value;
  $gwLastMod = date("Y-m-d h:i:s", (int)($u->timeLastMod / 1000));

  echo "{$rawId} - {$emailAdress}" . PHP_EOL;
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
  INSERT INTO addr_ma (email_id, email_domain, gw_id, gw_time, db_time, member_id, member_email, members)
  values (?, ?, ?, ?, ?, ?, ?, ?)
  ON DUPLICATE KEY UPDATE
  gw_id = ?, gw_time = ?, db_time = ?, member_id = ?, member_email = ?, members = ?
EOD;

  $stmt = $db->prepare($sql);
  $success = $stmt->execute(array(
    // Primary Keys
    $mailLocalPart, $mailDomainPart,
    // INSERT values
    $objectId, $gwLastMod, NULL, $first_member, $first_email, $member_count,
    // UPDATE values
    $objectId, $gwLastMod, NULL, $first_member, $first_email, $member_count));

  if ($success !== true) {
    print_r($stmt->errorInfo());
  }
}

function userLoopCondition($u)
{
  return ($u = $u->nextListPage());
  // return false;
}


function main($USE_WORKERS)
{
  /** @var PDO $db */
  $db = c::getPDO(unserialize(c::def('__listDb')));
// clear table contents...
//  $db->query("Delete from addr_ma", PDO::FETCH_OBJ);

  if ($USE_WORKERS) {
    $worker = new \worker(20);
  } else {
    $worker = null;
  }

  /** @var $ma_group membership * */
  $ma_group = (object)array(@participation => @BLIND_COPY, @id => "GROUP.gwdomm.pom00.nutzer_ma");

  if (true) {
    $u = Baseobjects('count=1000', 'DOMAIN.gwdomm.pom02');
  } else {
    // Test Cases
    $nicknames = Nicknames("name=nickname_abcde");
    $users = Users("name=abcde");
    $groups = Groups("name=alias_abcde"); // 1 Mitglied
    $u = $nicknames;
    $u = $groups;
    $u = $users;
  }
  do {
    if ( !$USE_WORKERS) {
      $u->each(function($u) use ($worker, $ma_group) {
        handleUser($u, $ma_group);
      });
    } else {
      $u->each(function($u) use ($worker, $ma_group) {
        /** @var $u apiResult|restAddressable */
        $worker->enqueue(function() use ($u, $ma_group) {
          handleUser($u, $ma_group);
        })->work(false);
      });
    }
  } while (userLoopCondition($u));
  if ($USE_WORKERS) {
    $worker->work()->wait();
  }
}

main($USE_WORKERS);
