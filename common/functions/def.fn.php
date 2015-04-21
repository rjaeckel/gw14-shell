<?php
/**
 * Created by PhpStorm.
 * User: abewm
 * Date: 6/23/14
 * Time: 5:28 PM
 */

namespace mlu\common\functions;

function def() {
    return call_user_func_array('mlu\common\def',func_get_args());
}