<?php
namespace mlu\common;
/**
 * global configuration file
 * 
 * @author Robert Jäckel <robert.jaeckel@itz.uni-halle.de>
 * @package gwApi
 * @subpackage config
 * @category Rest-Api
 * 
 */
if(!function_exists(__NAMESPACE__.'\def')) {
    /**
     * set a constant if not set already or get its value
     * @param string $name the constant's name
     * @param mixed $value the value to set, omit to get value
     * @return mixed the contant's value
     */
    function def($name,$value=null) {
        /**
         * @constant $name
         */
        $def=defined($name)||(func_num_args()>1?define($name, $value):false);
        if(!$def) trigger_error ("Undefined Constant <$name>",E_USER_WARNING);
        return constant($name);
    }
}

include_once 'config.local.php';
require_once 'config.default.php';

//set default time zone
date_default_timezone_set(def('localTimeZone'));

if(!def('__devmode')) {
    // disable notices
    error_reporting(error_reporting() ^ E_USER_NOTICE);
} else {
    // enable notices
    error_reporting(error_reporting()|E_NOTICE);
    // print memory stats
    register_shutdown_function('call_user_func','\mlu\common::memInfo');
}

