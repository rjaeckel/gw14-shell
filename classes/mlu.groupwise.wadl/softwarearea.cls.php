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
 * dynamic abstraction for gw-class softwarearea
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed create ( xsd\softwareArea $data=null ,string $queryString=null ) <p>request: POST system/softwareareas</p>
 * @method static apiResult|mixed delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE system/softwareareas/{area}</p><p>template-var: area => xs:string : template</p>
 * @method static apiResult|mixed getList ( mixed $data=null ,string $queryString=null ) <p>request: GET system/softwareareas</p>
 * @method static apiResult|mixed object ( mixed $data=null ,string $queryString=null ) <p>request: GET system/softwareareas/{area}</p><p>template-var: area => xs:string : template</p>
 * @method static apiResult|mixed update ( xsd\softwareArea $data=null ,string $queryString=null ) <p>request: PUT system/softwareareas/{area}</p><p>template-var: area => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 */
class softwarearea extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"softwarearea","__isObject":true,"create":{"paramStatic":{},"paramQuery":{},"path":"system\/softwareareas","action":"POST","doc":"Create a Software Area with the given data.","requestType":"softwareArea","responseType":null,"__isStatic":"object"},"delete":{"paramStatic":{"area":"xs:string : template"},"paramQuery":{},"path":"system\/softwareareas\/{area}","action":"DELETE","doc":"Delete the specified Software Area given the name.","requestType":null,"responseType":null},"getList":{"paramStatic":{},"paramQuery":{},"path":"system\/softwareareas","action":"GET","doc":"Get a list of Software Areas defined in this system.","requestType":null,"responseType":null,"__isStatic":"object"},"object":{"paramStatic":{"area":"xs:string : template"},"paramQuery":{},"path":"system\/softwareareas\/{area}","action":"GET","doc":"Get a specific Software Area given the name","requestType":null,"responseType":null},"update":{"paramStatic":{"area":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"system\/softwareareas\/{area}","action":"PUT","doc":"Update the specified Software Area with the given data.","requestType":"softwareArea","responseType":null}}');
	}
	/**
	 * Create a Software Area with the given data.
	 * @internal
	 *
	 * @param apiResult|xsd\softwareArea $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/softwareareas</p>
	 */
	protected function _create ($data=null,$queryString=null) { 
		return $this->doRequest ('create',$data,$queryString);
	}
	/**
	 * Delete the specified Software Area given the name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE system/softwareareas/{area}</p>
	 * <p>template-var: area => xs:string : template</p>
	 */
	protected function _delete ($data=null,$queryString=null) { 
		return $this->doRequest ('delete',$data,$queryString);
	}
	/**
	 * Get a list of Software Areas defined in this system.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/softwareareas</p>
	 */
	protected function _getList ($data=null,$queryString=null) { 
		return $this->doRequest ('getList',$data,$queryString);
	}
	/**
	 * Get a specific Software Area given the name
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/softwareareas/{area}</p>
	 * <p>template-var: area => xs:string : template</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Update the specified Software Area with the given data.
	 * @internal
	 *
	 * @param apiResult|xsd\softwareArea $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT system/softwareareas/{area}</p>
	 * <p>template-var: area => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _update ($data=null,$queryString=null) { 
		return $this->doRequest ('update',$data,$queryString);
	}
}