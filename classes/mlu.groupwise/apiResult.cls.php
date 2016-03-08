<?php

namespace mlu\groupwise;

use mlu\groupwise\wadl\domain;
use mlu\groupwise\wadl\group;
use mlu\groupwise\wadl\mta;
use mlu\groupwise\wadl\poa;
use mlu\groupwise\wadl\postoffice;
use mlu\groupwise\wadl\resource;
use mlu\groupwise\wadl\user;
use mlu\groupwise\xsd\listResult;
use mlu\groupwise\xsd\restAddressable;
use \mlu\rest, \mlu\common, \mlu\value, \Exception;

/**
 * result class for gwApi-interface
 * @method static string encode(mixed $object = null) encode a structure or object, my be called statically and in object context;
 * @method static mixed decode(string $str) transform a string into a structure
 * @method static apiResult merge(array $obj, array $obj = null) merge one or more objects together @see apiResult::_merge()
 * @method apiResult|listResult seekUsers (string $match='') search for Users in current Object
 * @method apiResult|listResult seekPostOffices (string $match='') search for Post Offices in current Object
 * @method apiResult|listResult seekDomains (string $match='')
 * @method apiResult|listResult seekBaseObjects (string $match='')
 * @method apiResult|listResult seekNicknames (string $match='')
 * @method apiResult|listResult seekGroups (string $match='')
 * @method user getUser ($force=false)
 * @method domain getDomain ($force=false)
 * @method resource getResource ($force=false)
 * @method poa getPoa ($force=false)
 * @method mta getMta ($force=false)
 * @method group getGroup ($force=false)
 * @method postoffice getPostoffice ($force=false)
 */
class apiResult extends rest\apiResult
{
    /**
     * Constructor
     * @param string $str http-headers and payload
     * @param string|bool $contentEncoding prefix for function to decode payload {}_decode()
     * @param object $origin information about data-origin like method and url
     * @throws Exception if an error occurred there's a field error
     */
    function __construct($str = '', $contentEncoding = 'json', $origin = null)
    {
        parent::__construct($str, $contentEncoding, $origin);
        /* Error-Code checking */
        if (isset($this->error) && isset($this->httpStatus) && $this(@error)) {
            throw new Exception(\sprintf("%s (%d): %s (%d)",
                    $this(@httpStatus), $this(@httpStatusCode),
                    isset($this->statusMsg) ? $this(@statusMsg) : "-/-",
                    isset($this->statusCode) ? $this(@statusCode) : 0)
                , $this(@httpStatusCode));
        }
    }

    /**
     * Call-Overload for static context to make some methods accessible from static and object context
     * factory
     *
     * the mentioned methods start with a single underscore
     * by calling a method from static context a default object will be instantiated on which the object call will be passed
     *
     * @param string $name the method's name
     * @param mixed[] $arguments arguments to be passed to the call
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        $cls = \get_called_class();
        $header = "HTTP/1.1 102 Processing\r\n\r\n";
        return \call_user_func_array(array(new $cls($header), "_$name"), $arguments);
    }

    /**
     * get a property by function call or the whole content
     * @param string $name Name of the property to get, omit to get all data
     * @param mixed $returnOnError fallback value if invocation for $name fails
     *
     * <p>the second parameter was introduced to catch exceptions by
     *  nonexistence easier and return an alternative value to work with. E.g.:
     * assuming <code>true == $obj instanceof rest\apiResult</code>...
     * <pre>
     * if(!$obj('prop',false)) {
     * // property not found...
     * }
     * </pre> is much shorter than <pre>try { $obj('prop'); } catch (\Exception $e) {
     *    //property not found
     * }
     * </pre> or <pre>
     * if(!isset($obj->prop)) {
     *    // property not found
     * }
     * </pre>
     * </p>
     * @return mixed
     * @throws Exception if the property $name does not exist and $returnOnError is omitted
     */
    function __invoke($name = null, $returnOnError = null)
    {
        if (isset($this->headers[@location])) {
            if (__devmode) trigger_error('Return header redirected: ' . $this->headers[@location], E_USER_NOTICE);
            $resObj = $this->request->apiInstance->get($this->headers[@location]);
        } else {
            $resObj = $this;
        }
        if ($nArgs = \func_num_args()) {
            try {
                return $resObj->$name;
            } catch (Exception $e) {
                if ($nArgs > 1) {
                    return $returnOnError;
                } else {
                    throw $e;
                }
            }
        }
        return $resObj->content;
    }

    /**
     * apply a callback on the current object
     * @param callable $cb callback to apply, should accept at least one argument. <p>
     * by returning something different than null in the callback the method will return that.
     * If nothing is returned by it the method returns the object it was called from ($this)</p>
     * @param mixed $arg,... additional arguments to pass into the callback
     * @return \static|mixed
     */
    function apply($cb, $arg = null)
    {
        return null === ($resCb = \call_user_func_array(
            $cb, \array_merge(array($this), \array_slice(\func_get_args(), 1))
        )) ? $this : $resCb;

    }

    /**
     * filter data set, there needs to be a field "object" on which the filter will be applied
     * @param filterData[]|string $filter array({property},{value},{sign}) item's property has to match value, sign can be omitted which means '=='
     * @param mixed $filterValue value to match, if only one filter is applied
     * @param string $cmp comparator, will be evaluated
     * @return \static the filtered set
     * @throws Exception if filter is logically wrong
     */
    function select($filter = null, $filterValue = null, $cmp = null)
    {
        $compare = array(true);
        $whereArr = \func_get_args();
        if (\count($whereArr) && !\is_array($whereArr[0])) {
            $whereArr = array($whereArr);
        }
        foreach ($whereArr as $cIDX => $cmpItm) {
            if (($c = count($cmpItm)) < 2) {
                throw new Exception("Too few Arguments for Comparison ($c): " . \implode(', ', $cmpItm));
            } elseif ($c == 2) {
                $cmpItm[] = '==';
            }
            $compare[] = '$item->' . $cmpItm[0] . $cmpItm[2] . '$whereArr[' . $cIDX . '][1]';
        }
        $compareStr = \implode('&&', $compare);

        /*$result=$this->each(function($item) use ($compareStr,$whereArr){
        if(eval("return $compareStr;")) {
        return $item();
        }
        return false;
        });*/

        $result = array();
        foreach ($this(@object) as $item) {
            if (eval("return $compareStr;")) {
                $result[] = $item;
            }
        }
        return $this->result((object)array(
            @object => $result,
            @resultInfo => (object)array(
                @outOf => \count($result),
                @status => @filtered
            ))
        );
    }

    /**
     * generate a result data set for an object
     * @param object|array $obj the object
     * @return \static the result object
     */
    protected function result($obj)
    {
        $header = "HTTP/1.1 206 Partial Content\r\n\r\n";
        $data = $this->encode($obj);
        $cls = \get_class($this);
        return new $cls($header . $data, $this->encoding, $this->request);
    }

    /**
     * Pick exactly one item by callback
     * @param callable $cb the selection-callback it accepts at least three arguments:<ol>
     * <li>apiResult $item; the current item @see apiResult</li>
     * <li>mixed $key; the key the item has in the result set</li>
     * <li>value $selected; the value of the current result @see \mlu\value</li>
     * </ol>
     * @param mixed $args,... additional arguments to pass into callback
     * @return \static|mixed;
     */
    function pickCallback($cb, $args = null)
    {
        /**
         * @var value $value ;
         */
        $selected = new value();
        \call_user_func_array(array($this, @each), \array_merge(array($cb, $selected), \array_slice(\func_get_args(), 1)));
        return $selected();
    }

    /**
     * get an item of a data set by index
     *
     * @param int|string $idx the item number or key; 0, if omitted
     * @return mixed|apiResult
     * @throws Exception if the item index does not exist.
     */
    function item($idx = 0)
    {
        if (isset($this->object)) {
            $set = $this(@object);
            if(!is_array($set))$set=array($set);
        } else {
            $set = $this();
        }
        if(!(is_array($set)||$set instanceof \ArrayAccess)) {
            throw new Exception("Invalid Dataset.");
        }
        if (!isset($set[$idx])) {
            throw new Exception("Item <$idx> not found.");
        }
        return $this->result($set[$idx] instanceof self ? $set[$idx]() : $set[$idx]);
    }

    /**
     * create a new object containing only the fields referenced
     * <p>this method requires the extracted properties to exist</p>
     * @param string $name,... property name(s)
     * @return \static
     */
    function extract($name)
    {
        common::issetOr($res);
        foreach (\func_get_args() as $name) {
            $res->$name = $this($name);
        }
        return $this->result($res);
    }

    /**
     * create a new object containing only the fields referenced
     * <p>this method does not require the extracted properties to exist, which might result in an empty result</p>
     * @param string $name,... property name(s)
     * @return \static
     */
    function extractGreedy($name)
    {
        common::issetOr($res);
        foreach (\func_get_args() as $name) {
            if(isset($this->$name))
                $res->$name = $this($name);
        }
        return $this->result($res);
    }

    /**
     * try to extract commonly used properties like name, domainName and postOfficeName
     * @param string $name,... one or more properties to read out additionally
     * @uses \static::extract()
     * @return apiResult
     */
    function extractTemplate($name = null)
    {
        $structurals = array(@name, @domainName, @postOfficeName, @userName, @groupName, @resourceName);
        $searches = \array_merge($structurals, \func_get_args());
        common::issetOr($exports, array());
        foreach ($searches as $prop) {
            if (isset($this->$prop)) {
                $exports[] = $prop;
            }
        }
        return \call_user_func_array(array($this, @extract), $exports);
    }

    /**
     * try to extract administrative fields like id, timestamps and modification data
     * <p>timestamps will be prettified</p>
     * @param string $name,... one or more properties to read out additionally
     * @uses \static::extractTemplate()
     * @return \static
     */
    function extractAdministrative($name = null)
    {
        $administrative = array(@id, @lastModifiedBy, @lastModifiedOp, @timeCreated, @timeLastMod);
        return \call_user_func_array(
            array($this, @extractTemplate),
            \array_merge($administrative, \func_get_args())
        )->prettyTimes();
    }

    /**
     * remove properties matching $name from object
     * @param string $name,... propertyName to remove
     * @return \static the thinned objects
     */
    function removeProperties($name)
    {
        $names = \func_get_args();
        common::issetOr($res);
        foreach ($this as $k => $v) {
            if (!\in_array($k, $names)) {
                $res->$k = $v;
            }
        }
        return $this->result($res);
    }

    /**
     * prefix property names by a string
     *
     * the first letter of each property name will be made uppercase --> camel casing
     * @param string $pref the prefix
     * @param string $prop,... a property name to prefix, omit to prefix all
     * @return \static the new object
     */
    function prefix($pref, $prop = null)
    {
        $props = \array_slice(\func_get_args(), 1);
        $allProps = empty($props);
        $res = (object)null;
        foreach ($this() as $k => $v) {
            if ($allProps) {
                $res->{$pref . \ucfirst($k)} = $v;
            } elseif (\in_array($k, $props)) {
                $res->{$pref . \ucfirst($k)} = $v;
            } else {
                $res->$k = $v;
            }
        }
        return $this->result($res);
    }

    /**
     * read a link property's href
     * @param string $name
     * @param string|bool $get directly get link data using get or provide method to perform (post|put|delete|get)
     * @param object|string $data payload to be sent to the server
     * @return string|\static the link url or the data loaded
     * @throws Exception if the link does not exist
     */
    function link($name, $get = false, $data=null, $qryStr='')
    {
        foreach ($this(@links) as $link) {
            if ($link->{'@title'} == $name) {
                $action = $get ? is_string($get) ? $get : @get : false;
                return $get ? $this->request->apiInstance->$action($link->{'@href'}.'?'.$qryStr,$data) : $link->{'@href'};
            }
        }
        throw new Exception ("Link does not exist: $name");
    }

    /**
     * reload the current url using get method
     * @return mixed|\static
     */
    function reload()
    {
        try {
            return $this->request->apiInstance->get($this->header(@location));
        } catch (Exception $e) {
            return $this->request->apiInstance->get($this->request->url);
        }
    }

    /**
     * get the next Page of a paged listResult
     * @return bool|apiResult|listResult
     */
    function nextListPage() {
        /** @var $this apiResult|listResult */
        try {
            return isset($this->resultInfo->nextId)?$this->requestApiInstance(implode('?',array(
                $this->requestPath(),
                $this->buildQueryString(
                    $this->requestQueryVariables(),
                    array(@nextId=>$this->resultInfo->nextId)
                )
            ))):false;
        } catch (Exception $e) {
            return false;
        }
    }

    function requestApiInstance($url,$method='GET',$data=null) {
        return call_user_func_array($this->request->apiInstance,func_get_args());
    }

    function requestPath() {
        return array_shift($this->splitRequestUrl());
    }

    protected function splitRequestUrl() {
        $split=explode('?',$this->requestUrl(),2);
        if(count($split)<2) $split[]='';
        return $split;
    }

    function requestUrl() {
        return $this->request->url;
    }

    function buildQueryString($arr){
        return http_build_query(call_user_func_array(@array_merge,func_get_args()));
    }

    function requestQueryVariables() {
        parse_str(array_pop($this->splitRequestUrl()),$res);
        return $res;
    }

    /**
     * get current object's url-property and append a string to it's url or interact with the new url
     * @param string $append string to be appended to the element's url
     * @param string $method GET|POST|PUT|DELETE
     * @param mixed $data payload or query-string, may repeat
     *
     * @return self|string
     */
    function urlAppend($append,$method=null,$data=null) {
        $url = $this->url();
        if(substr($url,-1)!=='/') $url.='/';
        if (1==func_num_args()) {
            return $url.$append;
        } else {
            $args = func_get_args(); array_shift($args);
            return call_user_func_array($this->request->apiInstance,array_merge(array($url.$append),$args));
        }
    }

    /**
     * get current object's url-property (@url) or transact with it
     * @param string $method GET|POST|PUT|DELETE
     * @param mixed $data payload or query-string, may repeat...
     * @return string|self
     */
    function url($method=null,$data=null) {
        if (!func_num_args()) {
            return $this('@url');
        } else {
            return call_user_func_array($this->request->apiInstance,array_merge(array($this('@url')),func_get_args()));
        }
    }

    /**
     * Call-Overload for object context to make some methods accessible from static and object context
     *
     * the mentioned methods start with a single underscore
     *
     * @param string $name the method to call
     * @param mixed[] $arguments Arguments to pass to the call
     * @return mixed
     * @throws Exception if method does not exist
     */
    public function __call($name, $arguments)
    {
        if (\method_exists($this, $n = "_$name")) {
            return \call_user_func_array(array($this, $n), $arguments);
        }
        if(preg_match("/^seek([a-z]+)/i",$name,$match)) {
            return call_user_func_array(array($this,@seek),array_merge(array($match[1]),$arguments));
        }
        if(preg_match("/^get([a-z]+)/i",$name,$match)) {
	    return call_user_func_array(array($this,@getInstanceByUri),array_merge(array('\\mlu\\groupwise\\wadl\\'.lcfirst($match[1])),$arguments));
	    }
        throw new Exception("Undefined method: $name");
    }

    /**
     * export an object into outer context while chaining
     * @param void &$var the variable which will contain the object
     * @return \static .. continue chaining
     */
    public function export(&$var)
    {
        $var = $this;
        return $this;
    }

    /**
     * convert timestamps of application to human readable data
     * <p>field names of timestamps are assumed to start with "time"
     * @param string $format date format to be accepted by date-function
     * @uses function date
     * @return \static the modified object
     */
    public function prettyTimes($format = "Y-m-d h:i:s")
    {
        return $this->each(function ($v, $k) use ($format) {
            if (@time == \substr($k, 0, 4)) {
                return \date($format, $v / 1000);
            }
        });
    }

    /**
     * apply a callback on each item of $this->object
     * <p>the call back has two parameters per default<ol>
     * <li>$value, item-value</li>
     * <li>$key, item-key</li></ol>
     * </p>
     *
     * @param string $property ='object' the property to iterate, optional
     * @param callable $cb the callback if something other than null(nothing) is returned the item will be replaced by that in the resultset
     * @param mixed $arg,... additional arguments to be passed into the callback
     *
     * @return \static|mixed[] the modified data set
     */
    function each($property,$cb=null,$arg=null)
    {
        $res = array();

        if (\is_string($property) && $this($property, false)) {
            $walk = $property;
            $property = \func_get_arg(1);
            $args = \array_slice(\func_get_args(), 2);
        } else {
            $walk = @object;
            $args = \array_slice(\func_get_args(), 1);
        }

        // add parameters

        if (isset($this->$walk)) {
            foreach ($this($walk) as $k => $item) {
                $resCb = \call_user_func_array($property, \array_merge(array($this->result($item), $k), $args));
                $res[] = ($resCb !== null) ? $resCb instanceof self ? $resCb() : $resCb : $item;
            }
        } else {
            foreach ($this as $k => $item) {
                $resCb = \call_user_func_array($property, \array_merge(array($item, $k), $args));
                $res[$k] = ($resCb !== null) ? $resCb instanceof self ? $resCb() : $resCb : $item;
            }
        }
        return $this->result($res);
    }

    /**
     * split an attribute by dots into into named parts
     * @param $attr     string attribute name to split
     * @param $name     string name of the first chunk
     * @param $name1,... string name of the second chunk...
     *
     * @return string[]
     */
    public function split($attr,$name=null,$name1=null) {
        $args=func_get_args();
        $args[0]=$this->$attr;
        return call_user_func_array(common::getStructSplitter(),$args);
    }

    /**
     * use the current object's ID to search for items in it
     *
     * (wrapper for list/{TYPE}/{ID}
     *
     * @param $type string function to search with, based on @url /common/gwAdpi-common.php <p>
     *              e.g PostOffices,Users,BaseObjects,Nicknames...</p>
     * @param $qryStr string Query string to pass into search
     * @return apiResult|listResult
     */
    public function seek($type,$qryStr='') {
        return call_user_func_array($type,array($qryStr,$this(@id)));
    }

	/**
	 * returns the wadl-proxy instance of $className to interact with
	 *
	 * @param $className
	 *
	 * @return rest\wadlProxy|$className
	 * @throws Exception if Path lengths mismatch.
	 */
    function getInstanceByUri($className,$force=false){
	    /** @var rest\wadlProxy $instance */
	    $instance=new $className();
	    // read out url of object an strip prefix
		$url = preg_replace('/^\/?gwadmin-service\//','',$this->url());
	    $uri=explode('/',$url);
		// get url to compare from api
	    $objectUri = explode('/',$instance->getMethodInfo('object')->path);
	    // check for equal count on both comparators
	    if(!$force && 0!=count($uri)-count($objectUri)) throw new Exception("Paths mismatch");
	    // read out properties
	    array_map(function($real,$template)use($instance){
		    if(!preg_match('/(.*)\{(.*)\}(.*)/',$template,$matches)) return false;
		    list(,$prefix,$name,$suffix)=$matches;
		    if (preg_match("/$prefix(.*)$suffix/",$real,$matches)) {
			    list( , $value ) = $matches;
			    $instance->$name = $value;
		    }
	    },$uri,$objectUri);
		return $instance;
    }

    /**
     * merge a list of data sets together
     *
     * if a later object has the same property as an earlier one there will be only the value of the first.
     * @param object|array|\Traversable $object,... the data object to merge
     * @return \static the merged object
     */
    protected function _merge($object = null)
    {
        $res = $this() ? clone $this() : (object)null;
        foreach (\func_get_args() as $obj) {
            foreach ($obj instanceof self ? $obj() : $obj as $k => $v) {
                if (!isset ($res->$k)) {
                    $res->$k = $v;
                } elseif (\is_array($v) || \is_object($v)) {
                    $res->$k = static::merge($res->$k, $v)->content;
                }
            }
        }
        return $this->result($res);
    }

    /**
     * encode a structure or object, my be called statically
     * @param mixed $object The object to encode, encodes the object itself if omitted
     * @return string encoded data
     *
     */
    protected function _encode($object = null)
    {
        $fn = $this->encoding . @_encode;
        return $fn(\func_num_args() ? \func_get_arg(0) : $this());
    }

    /**
     * transform a string into a structure
     * @param string $str the text to decode
     * @return mixed
     */
    protected function _decode($str = '')
    {
        $fn = $this->encoding . @_decode;
        return $fn(\func_num_args() ? \func_get_arg(0) : $this());
    }
}

