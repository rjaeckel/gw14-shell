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
 * dynamic abstraction for gw-class globalsignature
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed create ( xsd\globalSignature $data=null ,string $queryString=null ) <p>request: POST system/globalsignatures</p>
 * @method static apiResult|mixed delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE system/globalsignatures/{name}</p><p>template-var: name => xs:string : template</p>
 * @method static apiResult|xsd\listResult getList ( mixed $data=null ,string $queryString=null ) <p>request: GET system/globalsignatures</p>
 * @method static apiResult|xsd\globalSignature object ( mixed $data=null ,string $queryString=null ) <p>request: GET system/globalsignatures/{name}</p><p>template-var: name => xs:string : template</p>
 * @method static apiResult|mixed update ( xsd\globalSignature $data=null ,string $queryString=null ) <p>request: PUT system/globalsignatures/{name}</p><p>template-var: name => xs:string : template</p>
 */
class globalsignature extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"globalsignature","__isObject":true,"create":{"paramStatic":{},"paramQuery":{},"path":"system\/globalsignatures","action":"POST","doc":"Create a Global Signature with the specified data.","requestType":"globalSignature","responseType":null,"__isStatic":"object"},"delete":{"paramStatic":{"name":"xs:string : template"},"paramQuery":{},"path":"system\/globalsignatures\/{name}","action":"DELETE","doc":"Delete the specified Global Signature given the name.","requestType":null,"responseType":null},"getList":{"paramStatic":{},"paramQuery":{},"path":"system\/globalsignatures","action":"GET","doc":"Get a list Global Signatures in this system.","requestType":null,"responseType":"listResult","__isStatic":"object"},"object":{"paramStatic":{"name":"xs:string : template"},"paramQuery":{},"path":"system\/globalsignatures\/{name}","action":"GET","doc":"Get a specific Global Signature given the name.","requestType":null,"responseType":"globalSignature"},"update":{"paramStatic":{"name":"xs:string : template"},"paramQuery":{},"path":"system\/globalsignatures\/{name}","action":"PUT","doc":"Create or update a Global Signature with the specified data","requestType":"globalSignature","responseType":null}}');
	}
	/**
	 * Create a Global Signature with the specified data.
	 * @internal
	 *
	 * @param apiResult|xsd\globalSignature $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/globalsignatures</p>
	 */
	protected function _create ($data=null,$queryString=null) { 
		return $this->doRequest ('create',$data,$queryString);
	}
	/**
	 * Delete the specified Global Signature given the name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE system/globalsignatures/{name}</p>
	 * <p>template-var: name => xs:string : template</p>
	 */
	protected function _delete ($data=null,$queryString=null) { 
		return $this->doRequest ('delete',$data,$queryString);
	}
	/**
	 * Get a list Global Signatures in this system.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\listResult
	 *
	 * <p>request: GET system/globalsignatures</p>
	 */
	protected function _getList ($data=null,$queryString=null) { 
		return $this->doRequest ('getList',$data,$queryString);
	}
	/**
	 * Get a specific Global Signature given the name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\globalSignature
	 *
	 * <p>request: GET system/globalsignatures/{name}</p>
	 * <p>template-var: name => xs:string : template</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Create or update a Global Signature with the specified data
	 * @internal
	 *
	 * @param apiResult|xsd\globalSignature $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT system/globalsignatures/{name}</p>
	 * <p>template-var: name => xs:string : template</p>
	 */
	protected function _update ($data=null,$queryString=null) { 
		return $this->doRequest ('update',$data,$queryString);
	}
}