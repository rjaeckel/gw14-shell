<?php

/**
 * test-data
 * @author Robert Jäckel <robert.jaeckel@itz.uni-halle.de>
 * @package application
 * @subpackage test
 * @category Rest-Api
 */

//define('__devmode',true);
//define('__devRequests',true);


require 'application.php';
/**
 * Simple examples
 */
//echo Users();
//echo users('name=abfse');
//echo Users()
//->select(array('name','abewm'))
//->item()
//->extract('name','domainName','postOfficeName')
//->prefix('user')
//->merge(array('name'=>'abewm_nickname-php'))
//->export($target);

/**
 * create user
 * using api methods data may be raw json format as well
 */
//try {
//    gwApi()->post(
//        gwApi('domains/Testdomain/postoffices/TestPO')->link('users'),
//    '{"name":"abewm27"}');
//} catch (Exception $e) {}
//

/**
 * delete (the first) nickname
 */
//print_r ( gwApi()->delete(Nicknames()->select(array('userName','abewm'))->item(0)->{'@url'}));

/**
 * delete all users abewm*
 */
//
//Users('name=abewm')->each(function($user) {
//    print_r(gwApi()->delete($user('@url')));
//});

/*
 * Nutzer anlegen und mit ldap verknüpfen
 * PUT domains/DOMAIN/postoffices/PO/users/USER/directorylink {"directoryId":"..","ldapDn":"cn=..."}
 */
// anlegen
//echo gwApi($usrs=gwApi($po=Post_Offices('name=TestPO')->item()->{'@url'})->link('users'),'post','{"name":"abewm"}');
// verknüpfen
//echo gwApi($usrs.'/abewm/directorylink','put','{"directoryId":"eDir","ldapDn":"cn=abewm,ou=user,o=uni-halle"}');
// anzeigen
//echo gwApi(USers('name=abewm')->item()->{'@url'}.'/directorylink');

/*
 * Nutzer direkt aus ldap angelegen
 * POST system/directories/QUELLE/import {"postOfficeId":"ZIEL","context":"OU=... abhänging von QUELL-Basis"}
 */
//  postOfficeId(string)
//  context(string),exclude(string),filter(string),objectTypes(BAD|GROUP|NICKNAME|RESOURCE|USER),searchSubtree(bool)
//  commit(bool),showFailed(bool),showSkipped(bool),showSucceeded(bool)

/*
  try {
  echo directoryImport('eDir', array(
  'postOfficeId'=>'POST_OFFICE.Testdomain.TestPO'
  ));
  } catch (Exception $e) {
  fwrite(STDERR, implode (" ",array($e->getMessage(),'in',$e->getFile(),'at',$e->getLine())).PHP_EOL);
  }

 */

/*
 * test groupMemberListUpdate
 * batch update group membership */
/*
  try {
  $url='domains/Testdomain/postoffices/TestPO/groups/testgroup/members';
  gwApi($url)->each(function(GWRestApiResult $member){
  return GWRestApiResult::merge(
  array('participation'=>'CARBON_COPY'),
  $member->extract('id')
  );
  })->export($modifications);
  // update eines eintrags -> kein array
  //gwApi($url,'put',GWRestApiResult::merge(array('update'=>$modifications->item()->content)));
  // update aller einträge -> array
  gwApi($url,'put',GWRestApiResult::merge(array('update'=>$modifications())));
  echo gwApi($url);
  } catch (Exception $e) {
  fwrite(STDERR, $e->getMessage().PHP_EOL);
  }
 */



/***
 * WADL-Proxy---
 */

/*
 * Proxy laden
/

require_once 'application.php';

/**
 * test des wadl-proxies auf funktionstüchtigkeit 1
/

$base = array(
    'domain'=>'Testdomain',
    'postoffice'=>'TestPO'
);
extract($base);

echo gwUser::getList();
/**
 * wadl-test 2 - erstellen eines Nicknames und löschen
 */
/*
$user=gwUser::getList("name=abewm")
        ->select('name', 'abewm')
        ->item()
        ->extractTemplate()
        ->prefix('user');
$newNick = array(
    'name'=>'abewm_autonick',
    'givenName'=>'r0b',
    'surname'=>'jay'
);
print_r(gwNickname::create($newNick,$user));
$nickname="abewm_autonick";
print_r(gwNickname::delete());
*/
//todo: weitere tests -> querystrings und daten...


/**
 * delete all external pos
 *
define('__devRequests',true);
require_once 'application.php';

postoffices('domain=gw-extern')->apply(function($extpos){
    try {
        $extpos->object;
        $extpos->each(function ($po) {
            $po->url('delete');
        });
    } catch (Exception $e) {}
});

/* */

/**
 * delete all groups
 *
require_once 'application.php';

groups()->apply(function($g){
    try{
        $g->object;
        $g->each(function($g){
            $g->url('delete');
        });
    } catch (Exception $e) {}
});

/* */

/*
 * test base-option for lists
 */
//echo Users('count=5&attrs=name','POST_OFFICE.testdom.testpo');