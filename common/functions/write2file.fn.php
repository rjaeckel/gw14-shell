<?php
namespace mlu\common\functions;

function write2file($fn) {
    $data=\func_get_args();
    $fn=\array_shift($data);
    $data=\call_user_func_array('\\array_merge', $data);
    return \file_put_contents($fn, \implode(PHP_EOL, $data));
}