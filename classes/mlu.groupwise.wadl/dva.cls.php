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
 * dynamic abstraction for gw-class dva
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed create ( xsd\dva $data=null ,string $queryString=null ) <p>request: POST system/dvas</p>
 * @method static apiResult|mixed delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE system/dvas/{dva}</p><p>template-var: dva => xs:string : template</p>
 * @method static apiResult|mixed getList ( mixed $data=null ,string $queryString=null ) <p>request: GET system/dvas</p>
 * @method static apiResult|mixed object ( mixed $data=null ,string $queryString=null ) <p>request: GET system/dvas/{dva}</p><p>template-var: dva => xs:string : template</p>
 * @method static apiResult|mixed update ( xsd\dva $data=null ,string $queryString=null ) <p>request: PUT system/dvas/{dva}</p><p>template-var: dva => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 */
class dva extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"dva","__isObject":true,"create":{"paramStatic":{},"paramQuery":{},"path":"system\/dvas","action":"POST","doc":"Create a DVA given the data","requestType":"dva","responseType":null,"__isStatic":"object"},"delete":{"paramStatic":{"dva":"xs:string : template"},"paramQuery":{},"path":"system\/dvas\/{dva}","action":"DELETE","doc":"Delete a DVA given the name","requestType":null,"responseType":null},"getList":{"paramStatic":{},"paramQuery":{},"path":"system\/dvas","action":"GET","doc":"Get the DVAs that are defined in this system.<br\/> <br\/> <i>Note:<\/i> Attribute filtering is supported using this query (for example: <code> ...?attribute=value<\/code>)","requestType":null,"responseType":null,"__isStatic":"object"},"object":{"paramStatic":{"dva":"xs:string : template"},"paramQuery":{},"path":"system\/dvas\/{dva}","action":"GET","doc":"Get a specific DVA given the name","requestType":null,"responseType":null},"update":{"paramStatic":{"dva":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"system\/dvas\/{dva}","action":"PUT","doc":"Update a DVA given the data","requestType":"dva","responseType":null}}');
	}
	/**
	 * Create a DVA given the data
	 * @internal
	 *
	 * @param apiResult|xsd\dva $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/dvas</p>
	 */
	protected function _create ($data=null,$queryString=null) { 
		return $this->doRequest ('create',$data,$queryString);
	}
	/**
	 * Delete a DVA given the name
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE system/dvas/{dva}</p>
	 * <p>template-var: dva => xs:string : template</p>
	 */
	protected function _delete ($data=null,$queryString=null) { 
		return $this->doRequest ('delete',$data,$queryString);
	}
	/**
	 * Get the DVAs that are defined in this system.<br/> <br/> <i>Note:</i> Attribute filtering is supported using this query (for example: <code> ...?attribute=value</code>)
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/dvas</p>
	 */
	protected function _getList ($data=null,$queryString=null) { 
		return $this->doRequest ('getList',$data,$queryString);
	}
	/**
	 * Get a specific DVA given the name
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/dvas/{dva}</p>
	 * <p>template-var: dva => xs:string : template</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Update a DVA given the data
	 * @internal
	 *
	 * @param apiResult|xsd\dva $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT system/dvas/{dva}</p>
	 * <p>template-var: dva => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _update ($data=null,$queryString=null) { 
		return $this->doRequest ('update',$data,$queryString);
	}
}