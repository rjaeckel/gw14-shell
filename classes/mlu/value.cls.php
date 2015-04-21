<?php
namespace mlu;

/**
 * value-object
 * <p>this class is intended to be used as function-parameter to change it's value in the function,
 *  as references are not allowed in magic methods or call_user_*-functions.</p>
 */
class value {
    /**
     * the value the object contains
     * @var mixed
     */
    public $value=null;
    /**
     * initialize a new instance with an initial value
     * @param mixed $initialValue
     */
    function __construct($initialValue=null) {
        $this->value=$initialValue;
    }
    /**
     * set the value by invoking the method with a value or read it
     * @param mixed $value optional, the new value to set
     * @return value|mixed the object if value was set else the value
     */
    public function __invoke($value=null) {
        if (!func_num_args()) return $this->value;
        $this->value=$value;
        return $this;
    }
}
