<?php

namespace mlu\common\functions;
use \mlu\shellArgs, \mlu\common, mlu\groupwise as gw, \Exception;

function shellWrapProxyAction($gwclass,$action,$prefix='mlu\groupwise\wadl') {
    $gwclass=$prefix.'\\'.$gwclass;
    // make parameters available: $queryString,$templateParams,$payloadData,$effectiveData, $argC, $binary
    \extract(shellArgs::parse()->getArray());
    if(!$argC) {
        common::shellDoc($gwclass,$action);
        exit;
    }
    if(isset($effectiveData)) {
        common::putEffectiveValues($payloadData, $effectiveData);
    }
    try {
        $res=$gwclass::setVars($templateParams)->$action($payloadData,$queryString);
        switch(\strtolower($res->request->method)) {
            case get:
                try {
                    $res('object');
                    echo $res->each(function(gw\apiResult $item){
                        return $item->prettyTimes()->removeProperties('links','guid','@url','@type');
                    });
                } catch (Exception $ex) {
                    echo $res->prettyTimes()->removeProperties('links','guid','@url','@type');
                }
                break;
            case put: 
                echo $res->request->apiInstance->get($res->request->url)->prettyTimes()->removeProperties('links','guid','@url','@type');
                break;
            case post:
                echo $res->request->apiInstance->get($res->header('location'))->prettyTimes()->removeProperties('links','guid','@url','@type');
                break;
            case delete:
                echo "Success".PHP_EOL;
                break;
        }
    } catch (Exception $ex) {
        \trigger_error($ex->getMessage(),E_USER_ERROR);
        exit($ex->getCode());
    }
}