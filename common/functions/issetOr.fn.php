<?php
namespace mlu\common\functions;
/**
 * set a default value to a variable if not set
 * @param void &$var the variable to check/set
 * @param mixed $orValue, the alternative value, optional; default is an empty object
 * @return mixed the new value
 */
function issetOr(&$var,$orValue=null) {
    isset($var)||($var=(func_num_args()>1?$orValue:(object)null));
    return $var;
}