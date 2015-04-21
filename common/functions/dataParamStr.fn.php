<?php
namespace mlu\common\functions;
use mlu\rest\xsdDataElement;

/**
 * 
 * @param xsdDataElement[] $paramList
 * @param int $indent
 * @return string
 */
function dataParamStr($paramList,$indent=0) {
    $paramStr='';
    $prefix = str_repeat('  ', $indent+1);
    if(is_string($paramList)) { return "$prefix options: $paramList".PHP_EOL; }
    foreach($paramList as $p) {
        /** @var $p xsdDataElement */
        $paramStr.=$prefix."$p->name - $p->type; occurence:".$p->occurence('min').'..'.$p->occurence('max').PHP_EOL;
        if($p->options) $paramStr.=dataParamStr ($p->options, $indent+1);
    }
    return $paramStr;
}