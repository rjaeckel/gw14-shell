<?php
namespace mlu\groupwise;
use \mlu\rest, mlu\common, mlu\value, \Exception;
/**
 * GWRestApi-interface
 * @package gwApi
 * @subpackage core
 * @category Rest-Api
 */

/**
 * Groupwise-ReST-interface for curl
 */
class api extends rest\api {
	protected $namespace=__NAMESPACE__;
	/**
	 * base url, managed extra to shorten calls
	 * @var string
	 */
	public $baseUrl = __gwApiBase;

	public $base = __gwApiServer;

	/**
	 * curl arguments to be passed in every call
	 * @var string
	 */
	public $curlArgs= __curlArgs;

	/**
	 * Invoke the object to make calls even shorter
	 * @param string $url relative to $this->base
	 * @param string $method method to invoke get|push|delete|post
	 * @param object $data,... data to be sent to server, will be merged with previous, all defined fields will not be overwritten
	 * @return $this->resultClass|apiResult
	 */
	public function __invoke($url,$method=get,$data=null) {
		$callData=\call_user_func_array(__NAMESPACE__.'\apiResult::merge', \array_slice(\func_get_args(),2));
		return $this->$method($this->sanitizeUrl($url),$callData);
	}

	/**
	 * @param string $url
	 *
	 * @return mixed
	 */
	protected function sanitizeUrl($url) {
		return stripos($url,$this->baseUrl)===0?$url:($this->baseUrl.$url);
	}
}
