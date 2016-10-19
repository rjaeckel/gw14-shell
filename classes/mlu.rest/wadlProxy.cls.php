<?php
namespace mlu\rest;
use \Exception;
/**
 * base proxy-class for wadl-abstraction
 * 
 * @author Robert Jäckel <robert.jaeckel@itz.uni-halle.de>
 * @package gwProxy
 * @subpackage core
 * @category Rest-Api
 * 
 */

/*
 * adapter for the server-backend

function gwApi($url='',$method=get,$data=null) {
    $api = new GWRestApi("https://myServer.com:9931/base/Api",'-k -u username:pass -H Accept:\ application/json -H Content-Type:\ application/json');
    $api->resultCallback='json';
    return func_num_args()?call_user_func_array($api,func_get_args()):$api;
}
*/

/**
 * abstract baseclass which all proxyclasses inherit from
 * @abstract
 * @method static \static setVars(array $tplVars) set Template-Variables by associative array
 * @method static mixed getMethodInfo(string $methodName) get information about a specific method
 * @method static mixed set(string $name,mixed $value) set object property
 */
abstract class wadlProxy {
    /**
     * list of method-descriptors
     * @var methods[] $methodName=>$methodData containing
     * 
     * <p>properties per method:<ul>
     * <li>paramStatic - list of template parameters</li>
     * <li>paramQuery - list of possible query-string-variables</li>
     * <li>path - url which would be invoked</li>
     * <li>action - method for the request : get|put|post|delete</li>
     * <li>requestType - expected type of payload data</li>
     * <li>responseType - expected type of response date</li>
     * <li>doc - documentation</li>
     * </ul></p>
     */
    protected $methods=array();
    /**
     * per instance defined template vars, missing ones would be loaded from global context
     * @var string[] array containing the names as key and the values
     */
    protected $vars=array();
    /**
     * function name which does the real work
     * @var callable function name or anonymous function
     */
    public static $restFunction='\mlu\common::gwApi';
    /**
     * generate the real url from the url-template using the template-parameters
     * @param string $path url-template containing variables
     * @param string[] $vars list of variable names to put into the url
     * @param string $varPrefix variable prefix in url template
     * @param string $varSuffix variable suffix in url template
     * @return string the real url
     */
    protected function generateRealUrl($path,$vars,$varPrefix='{',$varSuffix='}') {
        $searches = array(); $replaces = array();
        foreach($vars as $varName) {
            $searches[]=$varPrefix.$varName.$varSuffix;
            $replaces[]=$this->$varName;
        }
        return \str_replace($searches, $replaces, $path);
    }
    /**
     * make all proxy-functions available from static context
     * 
     * <p>the function generates an object instance and then performs the call on it.</p>
     * @param string $name
     * @param mixed[] $arguments
     * @return mixed
     */
    public static function __callStatic($name, $arguments) {
        $o=static::instance();
        //magic ***
        return $o->__call($name, $arguments);
    }
    /**
     * call a proxy method
     * @param string $name the method's name
     * @param mixed[] $arguments arguments to pass to the method call
     * @return mixed
     * @throws Exception if the proxy class does not have the called method
     */
    public function __call($name, $arguments) {
        if(\method_exists($this, $method="_$name")) {
            return \call_user_func_array(array($this,$method), $arguments);
        }
        throw new Exception("Tried to call non existent method <$name>");
    }
    /**
     * perform a method's request
     * 
     * <p>loads the method data, generates the url and passes the payload to the request</p>
     * @param string $methodName
     * @param \Traversable[] $userData structured data, may repeat and will be merged into one
     * @param string $queryString query-string, may repeat and will be combined by "&"
     * @return \mlu\groupwise\apiResult
     * @throws Exception if ReST-Function not defined or the method does not exist
     */
    protected function doRequest ($methodName,$userData=null,$queryString=null) {
        if(!\is_callable(static::$restFunction)) {
            throw new Exception("Rest-Interface-Function not defined");
        }
        if(!isset($this->methods->$methodName)) {
            throw new Exception("No Method Information for <$methodName>");
        }
        // method-data
        $method=$this->methods->$methodName;
        // Fields in $method: paramStatic paramQuery path action requestType responseType doc
        $url=$this->generateRealUrl($method->path, \array_keys((array)$method->paramStatic));
        $qs=array();
        $data=array(&$url,$method->action);
        for($i=1,$cArgs=\func_num_args();$i<$cArgs;$i++) {
            if(\is_null($arg = \func_get_arg($i))) {
                continue; 
            }elseif(\is_scalar($arg)) {
                $qs[]=$arg;
            } else {
                $data[]=$arg;
            }
        }
       
        // append query parameter (after ? and concatenated with & ampersand)
        if(!empty($qs)) {
            $url.='?'.\implode('&',$qs);
        }
        return \call_user_func_array(static::$restFunction,$data);
    }
    /**
     * set a template parameter
     * @param string $name the parameter's name
     * @param string $value it's value
     * @return \static
     */
    public function __set($name, $value) {
        $this->vars[$name]=$value;
        return $this;
    }
    protected function _set($name,$value) {
        return \call_user_func(array($this,'__set'),$name,$value);
    }

    /**
     * set multiple template parameters at once
     * 
     * @param Traversable $templateVars
     * @return \wadlProxy
     */
    protected function _setVars($templateVars){
        foreach($templateVars as $name=>$val) {
            $this->__set($name,$val);
        }
        return $this;
    }
    /**
     * get the value of a template variable
     * 
     * <p>loads data from $GLOBALS if not defined in object</p>
     * @param string $name the variable's name
     * @return string it's value
     * @throws Exception if the variable is not defined
     */
    public function __get($name) {
        if(!isset($this->vars[$name])) {
            if(isset($GLOBALS[$name])) {
                return $GLOBALS[$name];
            }
            if(isset($_SERVER[$name])) {
                return $_SERVER[$name];
            }
            throw new \Exception("Template Variable <$name> not set.");
        }
        return $this->vars[$name];
    }
    /**
     * instantiate the class from static context
     * 
     * <p>the instance will match the type of the classname the method was called on</p>
     * @return \static
     */
    public static function instance() {
        $c=\get_called_class();
        return new $c();
    }
    protected function _getMethodInfo($methodName) {
        return $this->methods->$methodName;
    }
    /**
     * reduces verbosity during var_dump and print_r
     *
     * @return array
     */
    function __debugInfo () {
        return array_merge($this->vars,array('methods'=>array_keys((array)$this->methods)));
    }
}

