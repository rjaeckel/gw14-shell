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

// enable to create some files in /dev so dynamically defined functions are accessible for ide
// shows additional errors and information if enabled
// production-value: false
def('__devmode',
    false);
//    true);

// enable this to show request-notices if __devmode is true
def('__devRequests',
    false);
// enable this to show autloaded functions and classes as notices if __devmode is true
def('__devLoads',
    false);
// the application root directory, there should be a trailing slash!
def('__root',
    //'./');
    realpath(__DIR__.'/..').'/');
    //'../');

// database dsn for pdo to store information for our idm...
def('__listDb',serialize(
    array("PDO-DSN","USER","PASS")));

// cron notification from address
def('__mailFrom','E-Mail Admin <postmaster@domain.tld>');

//directory to put development files into
def('__devDocOutputDirectory', __root.'dev/');

//server connection
def('__gwApiServer',
        'https://groupwise.domain:9710');
//base url for rest-interface
def('__gwApiBase',
        'gwadmin-service');
// arguments to pass into curl invocation
def('__curlArgs',
        '-k -u admin:admin -H Accept:\ application/json -H Content-Type:\ application/json');
// path to the gw.shell executable name
def('gwShellBin','gw.shell');
/**
 * @depricated path to search for manually created documentation
 */
def('__docpath',
        __root.'docs/');
// where to place binaries for shell-execution
def('__binpath', 'actions/');

// where to search for class files
def('__classpath','classes/');

// abstraction namespaces
def('__gwXsdNamespace','mlu\groupwise\xsd');
def('__gwWadlNamespace','mlu\groupwise\wadl');

// timezone for date-funcions
def('localTimeZone','Europe/Berlin');