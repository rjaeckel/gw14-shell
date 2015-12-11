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
 * dynamic abstraction for gw-class timezone
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed create ( xsd\timezone $data=null ,string $queryString=null ) <p>request: POST system/timezones</p>
 * @method static apiResult|mixed delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE system/timezones/{timezone}</p><p>template-var: timezone => xs:string : template</p>
 * @method static apiResult|mixed getList ( mixed $data=null ,string $queryString=null ) <p>request: GET system/timezones</p>
 * @method static apiResult|mixed object ( mixed $data=null ,string $queryString=null ) <p>request: GET system/timezones/{timezone}</p><p>template-var: timezone => xs:string : template</p>
 * @method static apiResult|mixed update ( xsd\timezone $data=null ,string $queryString=null ) <p>request: PUT system/timezones/{timezone}</p><p>template-var: timezone => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 */
class timezone extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"timezone","__isObject":true,"create":{"paramStatic":{},"paramQuery":{},"path":"system\/timezones","action":"POST","doc":"Create a Timezone given the data","requestType":"timezone","responseType":null,"__isStatic":"object"},"delete":{"paramStatic":{"timezone":"xs:string : template"},"paramQuery":{},"path":"system\/timezones\/{timezone}","action":"DELETE","doc":"Delete a Resource given the name","requestType":null,"responseType":null},"getList":{"paramStatic":{},"paramQuery":{},"path":"system\/timezones","action":"GET","doc":"Get a list of Timezones given in the system","requestType":null,"responseType":null,"__isStatic":"object"},"object":{"paramStatic":{"timezone":"xs:string : template"},"paramQuery":{},"path":"system\/timezones\/{timezone}","action":"GET","doc":"Get a specific Timezone given the value","requestType":null,"responseType":null},"update":{"paramStatic":{"timezone":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"system\/timezones\/{timezone}","action":"PUT","doc":"Update a Resource given the name and properties object","requestType":"timezone","responseType":null}}');
	}
	/**
	 * Create a Timezone given the data
	 * @internal
	 *
	 * @param apiResult|xsd\timezone $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/timezones</p>
	 */
	protected function _create ($data=null,$queryString=null) { 
		return $this->doRequest ('create',$data,$queryString);
	}
	/**
	 * Delete a Resource given the name
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE system/timezones/{timezone}</p>
	 * <p>template-var: timezone => xs:string : template</p>
	 */
	protected function _delete ($data=null,$queryString=null) { 
		return $this->doRequest ('delete',$data,$queryString);
	}
	/**
	 * Get a list of Timezones given in the system
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/timezones</p>
	 */
	protected function _getList ($data=null,$queryString=null) { 
		return $this->doRequest ('getList',$data,$queryString);
	}
	/**
	 * Get a specific Timezone given the value
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/timezones/{timezone}</p>
	 * <p>template-var: timezone => xs:string : template</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Update a Resource given the name and properties object
	 * @internal
	 *
	 * @param apiResult|xsd\timezone $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT system/timezones/{timezone}</p>
	 * <p>template-var: timezone => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _update ($data=null,$queryString=null) { 
		return $this->doRequest ('update',$data,$queryString);
	}
}