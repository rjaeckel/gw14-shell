<?php
namespace mlu\common\functions;
use mlu\shellArgs;
use mlu\common;
/**
 * print shell-documentation for a specific gw-action
 * @param string $cls classname
 * @param string $function method name
 */
function shellDoc($cls,$function) {
    $classNamespaced=  explode('\\', $cls);
    $className=  array_pop($classNamespaced);
    extract((array)$cls::getMethodInfo($function));
    
    $tplParams='-'.implode(', -',array_keys((array)$paramStatic));
    if($tplParams=='-') { $tplParams='(none)'; }
    $qryParams='?'.implode(', ?',array_keys((array)$paramQuery));
    if($qryParams=='?') { $qryParams='(none)'; }
    $dataParams=common::xsdTypeInfo($requestType)?:array();
    $dataParamStr= common::dataParamStr($dataParams);
    
    echo <<<doc

$doc
--------------------------------------
--> $action $path
    RequestType:         $requestType
    Template-Parameters: $tplParams
    Query-Parameters:    $qryParams
-------------------------------------
Data Params:
$dataParamStr
doc;
    $binary=shellArgs::parse()->binary;
    (@include __docpath."$className.$function") ||  trigger_error("Missing shell documentation for <$className.$function>",E_USER_WARNING);
    echo PHP_EOL.PHP_EOL;
}