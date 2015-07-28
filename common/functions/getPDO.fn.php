<?php

namespace mlu\common\functions;

function getPDO() {
	$r = new \ReflectionClass('PDO');
	return $r->newInstanceArgs(func_num_args()>1?func_get_args():func_get_arg(0));
}
