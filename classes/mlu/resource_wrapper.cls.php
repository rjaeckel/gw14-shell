<?php

namespace mlu;

abstract class resource_wrapper {
    protected static $fn_prefix=null;
    public $resource=null;
    protected static function wrap ($res) {
        $c=get_called_class();
        return new $c($res);
    }
    public function __construct($res) {
        $this->resource=$res;
    }
    public function __call($n,$a) {
        return is_resource($res=call_user_func_array(static::$fn_prefix.$n,array_merge(array($this->resource),$a)))?static::wrap($res):$res;
    }
    public static function __callStatic($n,$a) {
        return is_resource($res = call_user_func_array(static::$fn_prefix.$n,$a))?static::wrap($res):$res;
    }
}