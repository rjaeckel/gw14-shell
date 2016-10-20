<?php
namespace mlu\rest;
use \mlu\common;
/**
 * root application file
 * 
 * <p>include this file in action-scripts</p>
 * 
 * @author Robert Jäckel <robert.jaeckel@itz.uni-halle.de>
 * @package application
 * @subpackage core
 * @category Rest-Api
 */

// init configuration
require_once 'common/config.php';
require_once __classpath.'mlu/common.cls.php';

// load runtime-files
common::load(
    'autoloader',
    'gwApi-common', //dynamic abstractions
    'checkRequirements'//check runtime proxy-classes
);

if(__devmode) fwrite(STDERR,PHP_EOL.PHP_EOL);
