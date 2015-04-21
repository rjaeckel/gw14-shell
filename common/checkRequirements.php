<?php

namespace mlu\rest;

/**
 * check for requirements
 * 
 * @author Robert Jäckel <robert.jaeckel@itz.uni-halle.de>
 * @package gwProxy
 * @subpackage setup
 * @category Rest-Api
 * 
 */

/**
 * check for curl
 */
if(!\file_exists(trim(`which curl`))&&!\file_exists(trim(`where curl`))) {
    \trigger_error('CURL binary not found.',\E_USER_ERROR);
}

/**
 * check for short opentags in php_ini
 *
if((!$so=\ini_get('short_open_tag'))&&(5.4>$v=(float)\phpversion())) {
    //\var_dump($so);
    //\var_dump((float)  \phpversion());
    \trigger_error("You have to enable <short_open_tag> in php.ini or upgrade to php v5.4 or higer in order to run this application. ini-value: '$so', $v", \E_USER_WARNING);
}

*/

