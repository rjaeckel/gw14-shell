<?php
namespace mlu\rest;

/**
 * Description of xsdDataElement
 *
 * @author abewm
 */
class xsdDataElement extends xsdData {
    public $type;
    public $occurence;
    public $name;
    public $options;
    function __construct($type) {
        $this->type=$type;
        $this->occurence=new xsdDataElementOccurence();
    }
    public function occurence($which=null,$value=null) {
        switch (func_num_args()) {
            case 0:
                return $this->occurence;
            case 1:
                return $this->occurence->$which();
            case 2:
                $this->occurence->$which($value);
                return $this;
        }
        
    }
    public function options($which=null,$value=null) {
        switch (func_num_args()) {
            case 0:
                return (object) $this->options;
            case 1:
                if(is_array($which)||is_object($which)) {
                    $this->options=$which;
                    return $this;
                }
                return $this->options[$which];
            case 2:
                $this->options[$which]=$value;
                return $this;
        }
    }
    public static function __callStatic($name, $arguments) {
        $cls=  get_called_class();
        return new $cls($name);
    }
}

class xsdDataElementOccurence extends xsdData {
    public $min=1;
    public $max=1;
}

abstract class xsdData {
    public function __call($name, $arguments) {
        if(property_exists($this,$name)) {
            if(!count($arguments)) {
                return $this->$name;
            } else {
                $this->$name=$arguments[0];
                return $this;
            }
        } else {
            throw new \Exception("Undefined Property <$name>");
        }
    }
}