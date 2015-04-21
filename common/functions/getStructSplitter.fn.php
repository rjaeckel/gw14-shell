<?php
namespace mlu\common\functions;

function getStructSplitter($delimiter='.',$keepNumbered=true) {
    return function($str) use($delimiter,$keepNumbered) {
        $names=array_splice(func_get_args(), 1);
        $items=  explode($delimiter, $str);
        $res=array();
        foreach ($names as $k=>$v) {
            $res[$v]=$items[$k];
        }
        return $keepNumbered?array_merge($res,$items):$res;
    };
}