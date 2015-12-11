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
 * dynamic abstraction for gw-class notification
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed create ( xsd\Notification $data=null ,string $queryString=null ) <p>request: POST system/notifications</p>
 * @method static apiResult|mixed delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE system/notifications/{name}</p><p>template-var: name => xs:string : template</p>
 * @method static apiResult|mixed getList ( mixed $data=null ,string $queryString=null ) <p>request: GET system/notifications</p>
 * @method static apiResult|mixed object ( mixed $data=null ,string $queryString=null ) <p>request: GET system/notifications/{name}</p><p>template-var: name => xs:string : template</p>
 * @method static apiResult|mixed update ( xsd\Notification $data=null ,string $queryString=null ) <p>request: PUT system/notifications/{name}</p><p>template-var: name => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 */
class notification extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"notification","__isObject":true,"create":{"paramStatic":{},"paramQuery":{},"path":"system\/notifications","action":"POST","doc":"Create a Notification given the data","requestType":"Notification","responseType":null,"__isStatic":"object"},"delete":{"paramStatic":{"name":"xs:string : template"},"paramQuery":{},"path":"system\/notifications\/{name}","action":"DELETE","doc":"Delete a Notification given the name","requestType":null,"responseType":null},"getList":{"paramStatic":{},"paramQuery":{},"path":"system\/notifications","action":"GET","doc":"Get the Notifications that are defined in this system.<br\/> <br\/> <i>Note:<\/i> Attribute filtering is supported using this query (for example: <code> ...?attribute=value<\/code>)","requestType":null,"responseType":null,"__isStatic":"object"},"object":{"paramStatic":{"name":"xs:string : template"},"paramQuery":{},"path":"system\/notifications\/{name}","action":"GET","doc":"Get a specific Notification given the name","requestType":null,"responseType":null},"update":{"paramStatic":{"name":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"system\/notifications\/{name}","action":"PUT","doc":"Update a notification given the data","requestType":"Notification","responseType":null}}');
	}
	/**
	 * Create a Notification given the data
	 * @internal
	 *
	 * @param apiResult|xsd\Notification $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/notifications</p>
	 */
	protected function _create ($data=null,$queryString=null) { 
		return $this->doRequest ('create',$data,$queryString);
	}
	/**
	 * Delete a Notification given the name
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE system/notifications/{name}</p>
	 * <p>template-var: name => xs:string : template</p>
	 */
	protected function _delete ($data=null,$queryString=null) { 
		return $this->doRequest ('delete',$data,$queryString);
	}
	/**
	 * Get the Notifications that are defined in this system.<br/> <br/> <i>Note:</i> Attribute filtering is supported using this query (for example: <code> ...?attribute=value</code>)
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/notifications</p>
	 */
	protected function _getList ($data=null,$queryString=null) { 
		return $this->doRequest ('getList',$data,$queryString);
	}
	/**
	 * Get a specific Notification given the name
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/notifications/{name}</p>
	 * <p>template-var: name => xs:string : template</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Update a notification given the data
	 * @internal
	 *
	 * @param apiResult|xsd\Notification $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT system/notifications/{name}</p>
	 * <p>template-var: name => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _update ($data=null,$queryString=null) { 
		return $this->doRequest ('update',$data,$queryString);
	}
}