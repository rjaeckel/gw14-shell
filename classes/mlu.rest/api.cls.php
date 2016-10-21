<?php
namespace mlu\rest;
/** 
 * Basisklase zum Zugriff auf Rest-Api-Schnitstellen  
 * 
 * <p>Basiert auf Curl. Die curl-Binary muss installiert sein und über PATH zugreifbar sein.</p>
 * 
 * @package restApi
 * @subpackage curl-wrapper
 * @category Rest-Api
 */

use \Exception,
    mlu\common;

/**
 * some constants
 */
foreach(\explode(' ','put get post delete') as $action) {
    \define($action, $action);
}
/**
 * Curl-wrapper for a generic Rest-API-Interface
 * 
 */
class api {
    protected $namespace=__NAMESPACE__;
    /**
     * 
     * @param string $base Base URI to Rest-Interface
     * @param string $curlArgs arguments to be passed to curl binary
     */
    public function __construct($base=null,$curlArgs=null) {
        if($base) { $this->base=$base; }
        if($curlArgs) { $this->curlArgs=$curlArgs; }
    }
    /**
     * Base URI to Rest-Interface
     * @var string uri
     */
    public $base = "https://www.example.com:9909/";
    /**
     * Generic Arguments for curl
     * @var string
     */
    public $curlArgs="-k -u user:password -H Accept:\\ application/json -H Content-Type:\\ application/json";
    /**
     * Define a Callback to make Data accessible
     * @var callback|null 
     */
    public $resultCallback = '\json';
    /**
     * Send a generic Request to the API
     * 
     * @param string $method GET|POST|PUT|DELETE
     * @param string $url
     * @param string $data encoded Data to be send
     * @return $this->resultClass
     * 
     * This method does the curl-system call and passes the returned data
     * into a new instance of $this->resultClass
     */
    protected function request ($method,$url,$data=null) {
    	$realUrl=\strpos($url, $this->base)===0?$url:$this->base.$url;
        $call = $this->curl($method, $realUrl,$data);

        if(__devmode && __devRequests) {
        	common::logWrite("Request <$method> on $url" .PHP_EOL);
        }
        $resultClass="$this->namespace\\apiResult";
        return new $resultClass (
                \trim(`$call`),
                $this->resultCallback,
                (object)array(
                    'base'=>$this->base,
                    'method'=>$method,
                    'url'=>$url,
                    'data'=>$data,
                    'apiInstance'=>$this
                ));
    }
    /**
     * generate string to send to server
     * @param object|mixed $data
     * @return string
     */
    protected function prepareData($data) {
        $headerEnd='';
        if(!\is_string($data)) {
            // try to stringify by itself
            if(\is_object($data) && \is_callable(array($data,'__toString'))) return $headerEnd.(string)$data;
            // convert by result callback
            return $headerEnd.\call_user_func($this->resultCallback.'_encode',(object)$data);
        }
        return $headerEnd.$data;
    }

    /**
     * Send a GET Request
     * @param string $url
     * @param string $data
     * @return $this->resultClass
     */
    public function get($url,$data=null) {
        return $this->request('GET',$url,$data);
    }
    /**
     * Send a POST Request
     * @param string $url
     * @param string$data
     * @return $this->resultClass
     */
    public function post($url,$data=null) {
        return $this->request('POST',$url,$data);
    }
    /**
     * Send a PUT Request
     * @param string $url
     * @param string $data
     * @return $this->resultClass
     */
    public function put ($url,$data=null) {
        return $this->request('PUT',$url,$data);
    }
    /**
     * Send a DELETE Request
     * @param string $url
     * @param string $data
     * @return $this->resultClass
     */
    public function delete($url,$data=null) {
        return $this->request('DELETE',$url,$data);
    }
    /**
     * Generate the curl-system-call
     * @param string $method get|post|put|delete
     * @param string $uri
     * @param string $data serialized data eg. json or xml
     * @return string
     */
    protected function curl ($method, $uri,$data=null) {
    	if($data) { $data = \escapeshellarg ($data); }
        $uri=  \escapeshellarg($uri);
        return "curl $this->curlArgs -isSX $method ".($data?"-d $data":"")." $uri";
    }
}

