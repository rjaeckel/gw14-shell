<?php
namespace mlu;
use mlu\common\functions;
/*
 * function-autoloader
 */

/**
 * function-autoloader for common-folder
 * 
 * <p>perform a static call on this class to load the function dynamically</p>
 *
 * @method static string dataParamStr(array $paramList, int $indent) @see function dataParamStr()
 * @method static mixed def ($name,$value) define a constant $name with value if it does not exist yet
 * @method static string[] getPostofficesForInternetDomain (string $iDomain) get the possible list of postoffice names for an internetdomain from it's description
 * @method static callable getStructSplitter (string $delimiter='.', bool $keepNumbered=true) returns a function that can be used to split an object's id into its parent's names
 * @method static groupwise\apiResult|groupwise\api gwApi(string $url,string $method='get', mixed $data=null) @see gwApi()
 * @method static mixed[] memInfo() print memory usage info as notices
 * @method static string namespacePath (string $namespace) get the folder name for a namespace
 * @method static groupwise\apiResult|groupwise\xsd\postoffice pickSmallestPostoffice(); @see mlu\common\pickSmallestPostoffice()
 * @method static object putEffectiveValues (object $target,array $effectives) set a bunch of effective values into $object
 * @method static mixed[] shellDoc(string $cls,string $function) @see function shellDoc
 * @method static null shellWrapProxyAction($class,$action,$classPrefix='mlu\groupwise\wadl') helper function to make wadl abstractions accessible by linux shell
 * @method static null write2file (string $fileName,string $data,string $data) write a bunch of strings into a file
 * @method static mixed[] xml2assoc(\XMLReader $xml,int $d=0) @see function xml2assoc
 * @method static object xsdTypeInfo (string $class, bool $recurse=false) get information about an xsd abstraction
 */
class common {
    /**
     * use this method to include the function-file and invoke the function
     * @param string $name
     * @param mixed[] $args
     * @return mixed
     */
    public static function __callStatic($name, $args) {
        $fname=$name;
        $name="\\mlu\\common\\functions\\$name";
        if(!function_exists($name)) {
            static::load("functions/$fname.fn",true);
        }
        if(!function_exists($name)) {
            trigger_error('Tried to call undefined function <common::'.$fname.">($name)",E_USER_ERROR);
        }
        
        return call_user_func_array($name, $args);
    }
    /**
     * static interface for issetOr.fn
     *
     * returns the value if set, or null; use this to avoid exceptions around getting undefined properties
     *
     * @see mlu\common\functions\issetOr()
     */
    public static function issetOr(&$val,$orValue=null) {
        if (!function_exists('\mlu\common\functions\issetOr')) {
            static::load('functions/issetOr.fn',true);
        }
        return func_num_args()>1?functions\issetOr($val, $orValue):functions\issetOr($val);
    }
    /**
     * load files from common-folder
     * @param string $fn,... filename without php-extension
     * @param bool $unique flag to load only once
     */
    public static function load($fn,$unique=false) {
        if(__devmode && __devLoads) trigger_error("Loading common <$fn>", E_USER_NOTICE);
        $args=func_get_args();
        if(func_num_args()>1) $unique=array_pop($args);
        if(is_string($unique)) {
            $args[]=$unique;
            $unique=false;
        }
        if($unique) {
            foreach ($args as $fn) {
                require_once __root."common/$fn.php";
            }
        } else {
            foreach ($args as $fn) {
                require __root."common/$fn.php";
            }
        }
    }
}