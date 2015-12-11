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
 * dynamic abstraction for gw-class adminapp
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed create ( xsd\adminapp $data=null ,string $queryString=null ) <p>request: POST system/adminapps</p>
 * @method static apiResult|mixed delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE system/adminapps/{adminapp}</p><p>template-var: adminapp => xs:string : template</p>
 * @method static apiResult|mixed getList ( mixed $data=null ,string $queryString=null ) <p>request: GET system/adminapps</p>
 * @method static apiResult|mixed object ( mixed $data=null ,string $queryString=null ) <p>request: GET system/adminapps/{adminapp}</p><p>template-var: adminapp => xs:string : template</p>
 * @method static apiResult|mixed update ( xsd\adminapp $data=null ,string $queryString=null ) <p>request: PUT system/adminapps/{adminapp}</p><p>template-var: adminapp => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 */
class adminapp extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"adminapp","__isObject":true,"create":{"paramStatic":{},"paramQuery":{},"path":"system\/adminapps","action":"POST","doc":"Create an Admin Application object given the data. Upon success the newly created key value is returned","requestType":"adminapp","responseType":null,"__isStatic":"object"},"delete":{"paramStatic":{"adminapp":"xs:string : template"},"paramQuery":{},"path":"system\/adminapps\/{adminapp}","action":"DELETE","doc":"Remove the specified Admin Application given the name.","requestType":null,"responseType":null},"getList":{"paramStatic":{},"paramQuery":{},"path":"system\/adminapps","action":"GET","doc":"Get a list of Admin Applications in this System.","requestType":null,"responseType":null,"__isStatic":"object"},"object":{"paramStatic":{"adminapp":"xs:string : template"},"paramQuery":{},"path":"system\/adminapps\/{adminapp}","action":"GET","doc":"Get a specific Admin Application object given the name","requestType":null,"responseType":null},"update":{"paramStatic":{"adminapp":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"system\/adminapps\/{adminapp}","action":"PUT","doc":"Update an Admin Application object given the data.","requestType":"adminapp","responseType":null}}');
	}
	/**
	 * Create an Admin Application object given the data. Upon success the newly created key value is returned
	 * @internal
	 *
	 * @param apiResult|xsd\adminapp $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/adminapps</p>
	 */
	protected function _create ($data=null,$queryString=null) { 
		return $this->doRequest ('create',$data,$queryString);
	}
	/**
	 * Remove the specified Admin Application given the name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE system/adminapps/{adminapp}</p>
	 * <p>template-var: adminapp => xs:string : template</p>
	 */
	protected function _delete ($data=null,$queryString=null) { 
		return $this->doRequest ('delete',$data,$queryString);
	}
	/**
	 * Get a list of Admin Applications in this System.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/adminapps</p>
	 */
	protected function _getList ($data=null,$queryString=null) { 
		return $this->doRequest ('getList',$data,$queryString);
	}
	/**
	 * Get a specific Admin Application object given the name
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/adminapps/{adminapp}</p>
	 * <p>template-var: adminapp => xs:string : template</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Update an Admin Application object given the data.
	 * @internal
	 *
	 * @param apiResult|xsd\adminapp $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT system/adminapps/{adminapp}</p>
	 * <p>template-var: adminapp => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _update ($data=null,$queryString=null) { 
		return $this->doRequest ('update',$data,$queryString);
	}
}