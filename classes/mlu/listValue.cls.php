<?php

namespace mlu;
/**
 * Description of listValue
 *
 * @author abewm
 */

require_once './value.cls.php';

class listValue extends value {
    /**
     * optional callback to validate a Value befor it's being inserted
     * @var callable
     */
    public $beforeAppend;
    function __construct($initialValue=array()) {
        parent::__construct($initialValue);
    }
    /**
     * try append an item to the list or get the content
     * @param mixed $value object to append to list
     * @return mixed[]|\static the stored value or the object itself if value was omitted
     */
    public function __invoke($value=null) {
        if (!func_num_args()) return $this->value;
        return $this->append($value);
    }
    /**
     * try to append a new Element to the list
     * @param mixed $item... 
     * @return \static
     */
    public function append($item) {
        foreach (func_get_args() as $item) {
            if(
                (!$this->beforeAppend)
                ||
                (false!=call_user_func($this->beforeAppend,$item,$this()))
            ) {
                $this->value[]=$item;
            }
        }
        return $this;
    }
    /**
     * Filter to allow only new Values in the list
     * @param mixed $val
     * @param mixed[] $list
     * @return bool true, if the $val is not included in $list
     */
    public static function isNew($val,  $list) {
        return !in_array($val, $list);
    }
    /**
     * Create a new Instance of the class having the isnew-Filter enabled
     * @param mixed $initial; default=array()
     * @return \static
     */
    public static function unique($initial=array()) {
        $res = static::instance($initial);
        $res->beforeAppend="static::isNew";
        return $res;
    }
    /**
     * Create new Instace of the class
     * @param mixed $initial initial value;default=array()
     * @return \static
     */
    public static function instance($initial=array()) {
        return new static($initial);
    }
}