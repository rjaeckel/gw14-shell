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
 * dynamic abstraction for gw-class calpubhost
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed create ( xsd\calPubHost $data=null ,string $queryString=null ) <p>request: POST system/calpubhosts</p>
 * @method static apiResult|mixed delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE system/calpubhosts/{calPubHost}</p><p>template-var: calPubHost => xs:string : template</p>
 * @method static apiResult|mixed getList ( mixed $data=null ,string $queryString=null ) <p>request: GET system/calpubhosts</p>
 * @method static apiResult|mixed object ( mixed $data=null ,string $queryString=null ) <p>request: GET system/calpubhosts/{calPubHost}</p><p>template-var: calPubHost => xs:string : template</p>
 * @method static apiResult|mixed update ( xsd\calPubHost $data=null ,string $queryString=null ) <p>request: PUT system/calpubhosts/{calPubHost}</p><p>template-var: calPubHost => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 */
class calpubhost extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"calpubhost","__isObject":true,"create":{"paramStatic":{},"paramQuery":{},"path":"system\/calpubhosts","action":"POST","doc":"Create a Calendar Publishing given the data","requestType":"calPubHost","responseType":null,"__isStatic":"object"},"delete":{"paramStatic":{"calPubHost":"xs:string : template"},"paramQuery":{},"path":"system\/calpubhosts\/{calPubHost}","action":"DELETE","doc":"Delete a Calendar Publishing given the name","requestType":null,"responseType":null},"getList":{"paramStatic":{},"paramQuery":{},"path":"system\/calpubhosts","action":"GET","doc":"Get the Calendar Publishing Host that are defined in this system.<br\/> <br\/> <i>Note:<\/i> Attribute filtering is supported using this query (for example: <code> ...?attribute=value<\/code>)","requestType":null,"responseType":null,"__isStatic":"object"},"object":{"paramStatic":{"calPubHost":"xs:string : template"},"paramQuery":{},"path":"system\/calpubhosts\/{calPubHost}","action":"GET","doc":"Get a specific Calendar Publishing Host given the name","requestType":null,"responseType":null},"update":{"paramStatic":{"calPubHost":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"system\/calpubhosts\/{calPubHost}","action":"PUT","doc":"Update a Calendar Publishing given the data","requestType":"calPubHost","responseType":null}}');
	}
	/**
	 * Create a Calendar Publishing given the data
	 * @internal
	 *
	 * @param apiResult|xsd\calPubHost $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/calpubhosts</p>
	 */
	protected function _create ($data=null,$queryString=null) { 
		return $this->doRequest ('create',$data,$queryString);
	}
	/**
	 * Delete a Calendar Publishing given the name
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE system/calpubhosts/{calPubHost}</p>
	 * <p>template-var: calPubHost => xs:string : template</p>
	 */
	protected function _delete ($data=null,$queryString=null) { 
		return $this->doRequest ('delete',$data,$queryString);
	}
	/**
	 * Get the Calendar Publishing Host that are defined in this system.<br/> <br/> <i>Note:</i> Attribute filtering is supported using this query (for example: <code> ...?attribute=value</code>)
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/calpubhosts</p>
	 */
	protected function _getList ($data=null,$queryString=null) { 
		return $this->doRequest ('getList',$data,$queryString);
	}
	/**
	 * Get a specific Calendar Publishing Host given the name
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/calpubhosts/{calPubHost}</p>
	 * <p>template-var: calPubHost => xs:string : template</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Update a Calendar Publishing given the data
	 * @internal
	 *
	 * @param apiResult|xsd\calPubHost $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT system/calpubhosts/{calPubHost}</p>
	 * <p>template-var: calPubHost => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _update ($data=null,$queryString=null) { 
		return $this->doRequest ('update',$data,$queryString);
	}
}