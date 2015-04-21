<?php

namespace mlu\common\functions;
use mlu\rest\xsdDataElement;

function xsdTypeInfo($cls,$recurse=false) {
    if($cls) {
        $dataclass=__gwXsdNamespace.'\\'.$cls;
        if(!class_exists($dataclass)) return false;
        if(is_subclass_of($dataclass, '\mlu\rest\xsd_restriction')) {
            $rCls=new \ReflectionClass($dataclass);
            return implode('|', array_keys($rCls->getConstants()));
        } else {
            $dataParams=get_class_vars($dataclass);
            foreach ($dataParams as $k=>&$propData) {
                $rProp=new \ReflectionProperty($dataclass,$k);
                $typeDoc = $rProp->getDocComment();
                preg_match('/.*@var\s+([a-z0-9]+).*/i', $typeDoc,$docMatchType);
                preg_match_all('/((min|max)occurs):\s([a-z0-9]+)/i',$typeDoc,$docMatchOccurs,PREG_SET_ORDER);
                $pType=$docMatchType[1];
                $propData=xsdDataElement::$pType()->name($k);
                foreach($docMatchOccurs as $occ) {
                    $propData->occurence($occ[2],$occ[3]);
                }
                if($recurse && $v=xsdTypeInfo($docMatchType[1],$recurse)) { $propData->options=$v; }
            }
            ksort($dataParams/*,SORT_NATURAL*/);
            return (object)$dataParams;
        }
    }
}