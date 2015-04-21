<?php
/**
 * Created by PhpStorm.
 * User: abewm
 * Date: 6/17/14
 * Time: 3:01 PM
 */

namespace mlu;

/**
 * Class ldap
 * @package mlu\ldap
 * @method bool add ( string $dn, array $entry )
 * @method bool bind ( string $dn=null, string $pw=null )
 * @method bool close ( )
 * @method bool compare ( string $dn, string $attr, string $value )
 * @method static ldap connect ( string $host, int $port=389 )
 * @method int count_entries ( resource $list )
 * @method bool delete ( string $dn )
 * @method static string err2str ( int $errCode )
 * @method int errno ( )
 * @method static string error ( )
 * @method bool free_result ( )
 * @method array get_attributes ( resource $entry )
 * @method string get_dn ( resource $entry )
 * @method array get_entries ( resource $result )
 * @method array get_values ( resource $entry, string $prop )
 * @method ldap list ( string $baseDn, string $filter, array $properties=null, int $valuesOnly=null, int $sizeLimit=null, int $timeLimit=null, int $deref=null)
 * @method bool mod_add ( string $dn, array $props )
 * @method bool mod_del ( string $dn, array $props )
 * @method bool mod_replace ( string $dn, array $props )
 * @method bool modify ( string $dn, array $props )
 * @method ldap read ( string $baseDN, string $filter, array $properties=null, int $valuesOnly=null, int $sizeLimit=null, int $timeLimit=null, int $deref=null)
 * @method ldap search ( string $baseDN, string $filter, array $properties=null, int $valuesOnly=null, int $sizeLimit=null, int $timeLimit=null, int $deref=null)
 * @method bool set_option ( int $option, mixed $value )
 * @method bool get_option ( int $option, &$result )
 * @method bool unbind ( )
 */
class ldap extends resource_wrapper {
    protected static $fn_prefix='ldap_';
}
