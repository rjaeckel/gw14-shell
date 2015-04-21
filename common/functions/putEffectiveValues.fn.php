<?php
namespace mlu\common\functions;

function putEffectiveValues($target,$effectives){
    foreach ($effectives as $prop=>$val) {
        $target->$prop=(object)($val?array('inherited'=>false,'value'=>$val,'exclusive'=>true):array('inherited'=>true));
    }
    return $target;
}