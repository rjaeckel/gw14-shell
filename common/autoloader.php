<?php

namespace mlu\common;

/**
 * check for the existence of gw-proxy-classes
 * 
 * @author Robert Jäckel <robert.jaeckel@itz.uni-halle.de>
 * @package autoloader
 * @category Rest-Api
 * 
 */

// class autoloader
spl_autoload_register(function($class){
    static $passedClasses=array();
    if(in_array($class, $passedClasses)) { return; }
    else { $passedClasses[]=$class; }
    if(__devmode && __devLoads) trigger_error("Trying to autoload class <$class>", E_USER_NOTICE);
    $namespaced=explode('\\', $class);
    $classname=array_pop($namespaced);
    $path=implode('.',$namespaced).'/';
    if($path!=='/') {
        if(file_exists($f=__classpath."$path$classname.cls.php")) {
            include_once $f;
        } elseif(__devmode && __devLoads) {
            trigger_error("Failed autoload for class <$class>", E_USER_NOTICE);
        }
    } else {
        if(file_exists($f=__classpath."$classname.cls.php")) {
            include_once $f;
        } elseif(__devmode && __devLoads) {
            trigger_error("Failed autoload for class <$class>", E_USER_NOTICE);
        }
    }
});
