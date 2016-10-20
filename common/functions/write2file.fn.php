<?php

namespace mlu\common\functions;

use mlu\common;

function write2file($fn) {
	__devmode && common::logWrite(sprintf("Writing %s %s",$fn,PHP_EOL));

	$data=\func_get_args();	array_shift($data);

    //$data=\call_user_func_array('\\array_merge', $data);
    return \file_put_contents($fn, \implode(PHP_EOL, $data));
}