<?php

namespace mlu\groupwise\wadl;
use mlu\rest\wadlProxy, mlu\groupwise\apiResult, mlu\groupwise\xsd;
/**
 * rest-api-proxies runtime-file
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 */


/**
 * dynamic abstraction for gw-class internetdomain
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed create ( xsd\internetDomain $data=null ,string $queryString=null ) <p>request: POST system/internetdomains</p>
 * @method static apiResult|mixed delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE system/internetdomains/{internetdomain}</p><p>template-var: internetdomain => xs:string : template</p>
 * @method static apiResult|mixed getList ( mixed $data=null ,string $queryString=null ) <p>request: GET system/internetdomains</p>
 * @method static apiResult|mixed object ( mixed $data=null ,string $queryString=null ) <p>request: GET system/internetdomains/{internetdomain}</p><p>template-var: internetdomain => xs:string : template</p>
 * @method static apiResult|mixed update ( xsd\internetDomain $data=null ,string $queryString=null ) <p>request: PUT system/internetdomains/{internetdomain}</p><p>template-var: internetdomain => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 */
class internetdomain extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"internetdomain","__isObject":true,"create":{"paramStatic":{},"paramQuery":{},"path":"system\/internetdomains","action":"POST","doc":"Create an Internet Domain with the specified data.","requestType":"internetDomain","responseType":null,"__isStatic":"object"},"delete":{"paramStatic":{"internetdomain":"xs:string : template"},"paramQuery":{},"path":"system\/internetdomains\/{internetdomain}","action":"DELETE","doc":"Delete the specified Internet Domain given the name","requestType":null,"responseType":null},"getList":{"paramStatic":{},"paramQuery":{},"path":"system\/internetdomains","action":"GET","doc":"Get a list of Internet Domains in this system.  Note: Attribute filtering is supported using this query (for example: <code> ...?attribute=value<\/code>)","requestType":null,"responseType":null,"__isStatic":"object"},"object":{"paramStatic":{"internetdomain":"xs:string : template"},"paramQuery":{},"path":"system\/internetdomains\/{internetdomain}","action":"GET","doc":"Get a specific Internet Domain given the name","requestType":null,"responseType":null},"update":{"paramStatic":{"internetdomain":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"system\/internetdomains\/{internetdomain}","action":"PUT","doc":"Update the specified Internet Domain with the given data.","requestType":"internetDomain","responseType":null}}');
	}
	/**
	 * Create an Internet Domain with the specified data.
	 * @internal
	 *
	 * @param apiResult|xsd\internetDomain $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/internetdomains</p>
	 */
	protected function _create ($data=null,$queryString=null) { 
		return $this->doRequest ('create',$data,$queryString);
	}
	/**
	 * Delete the specified Internet Domain given the name
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE system/internetdomains/{internetdomain}</p>
	 * <p>template-var: internetdomain => xs:string : template</p>
	 */
	protected function _delete ($data=null,$queryString=null) { 
		return $this->doRequest ('delete',$data,$queryString);
	}
	/**
	 * Get a list of Internet Domains in this system.  Note: Attribute filtering is supported using this query (for example: <code> ...?attribute=value</code>)
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/internetdomains</p>
	 */
	protected function _getList ($data=null,$queryString=null) { 
		return $this->doRequest ('getList',$data,$queryString);
	}
	/**
	 * Get a specific Internet Domain given the name
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/internetdomains/{internetdomain}</p>
	 * <p>template-var: internetdomain => xs:string : template</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Update the specified Internet Domain with the given data.
	 * @internal
	 *
	 * @param apiResult|xsd\internetDomain $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT system/internetdomains/{internetdomain}</p>
	 * <p>template-var: internetdomain => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _update ($data=null,$queryString=null) { 
		return $this->doRequest ('update',$data,$queryString);
	}
}