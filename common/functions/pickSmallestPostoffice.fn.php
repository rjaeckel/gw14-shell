<?php
namespace mlu\common\functions;
use \mlu\groupwise\apiResult, mlu\value, mlu\groupwise\wadl\postoffice;
/**
 * pick the emptiest post office by name
 * @staticvar apiResult|postOffice[] $allPOs cached list of all postoffices in system
 * @param string[] $postOffices list of postoffice names to pick from omit or leave empty to match all
 * @return apiResult|postOffice
 */
function pickSmallestPostoffice($postOffices=array()) {
    // cache postoffices
    static $allPOs;
    isset($allPOs)||$allPOs=Postoffices();
    // filter
    return $allPOs->pickCallback(function (apiResult $po,$k, value $selected,$search){
        /** @var $po \mlu\groupwise\xsd\postOffice|apiResult */
        // match the po-name to list, if not empty
        if(in_array($po->name, $search)||empty($search)) {
            /**
             * calculate po-size, if neccessary
             * two reasons to skip
             *  - po size allready calculated (eg. bulk operations)
             *  - there is only one option in $search; no need to compare!
             */
            $singleOption=(1===count($search));
            if(false===($singleOption&&$po('usage',false))) {
                trigger_error("Calculating Usage of {$po->id}",E_USER_NOTICE);
                postoffice::
                    set('domain',$po->domainName)->
                    set('postoffice',$po->name)->
                    object()->export($po)->
                    request->apiInstance->get($po->link('users'))->
                    each(function($u,$k,$po){
                        isset($po->usage)||$po->usage=0;
                        if(!$u instanceof apiResult) return;
                        $po->usage+=$u('mailboxSizeMb',0);
                    },$po);
            }
            // determine if the selected item should be changed
            ($selected()===null||($selected()->usage > $po('usage',0)))
                && $selected($po);
        }
    },$postOffices);
}