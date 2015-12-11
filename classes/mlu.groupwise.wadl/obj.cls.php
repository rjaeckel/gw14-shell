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
 * dynamic abstraction for gw-class obj
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE object/{id}</p><p>template-var: id => xs:string : template</p>
 * @method static apiResult|mixed object ( mixed $data=null ,string $queryString=null ) <p>request: GET object/{id}</p><p>template-var: id => xs:string : template</p>
 * @method static apiResult|mixed objectType ( mixed $data=null ,string $queryString=null ) <p>request: GET object/type/{id}</p><p>template-var: id => xs:string : template</p>
 */
class obj extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"obj","__isObject":true,"delete":{"paramStatic":{"id":"xs:string : template"},"paramQuery":{},"path":"object\/{id}","action":"DELETE","doc":"Delete an object given the object TDPN","requestType":null,"responseType":null},"object":{"paramStatic":{"id":"xs:string : template"},"paramQuery":{},"path":"object\/{id}","action":"GET","doc":"Get an object given the object identifier  For example: <code>\/gwadmin-service\/object\/USER.MyDomain.MyPostOffice.MyUser<\/code> (will return the user MyUser)","requestType":null,"responseType":null},"objectType":{"paramStatic":{"id":"xs:string : template"},"paramQuery":{},"path":"object\/type\/{id}","action":"GET","doc":"Get the object type given the object new recod type  For example: <code>\/gwadmin-service\/object\/type\/106<\/code> (will return the USER)","requestType":null,"responseType":null,"__isStatic":"object"}}');
	}
	/**
	 * Delete an object given the object TDPN
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE object/{id}</p>
	 * <p>template-var: id => xs:string : template</p>
	 */
	protected function _delete ($data=null,$queryString=null) { 
		return $this->doRequest ('delete',$data,$queryString);
	}
	/**
	 * Get an object given the object identifier  For example: <code>/gwadmin-service/object/USER.MyDomain.MyPostOffice.MyUser</code> (will return the user MyUser)
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET object/{id}</p>
	 * <p>template-var: id => xs:string : template</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Get the object type given the object new recod type  For example: <code>/gwadmin-service/object/type/106</code> (will return the USER)
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET object/type/{id}</p>
	 * <p>template-var: id => xs:string : template</p>
	 */
	protected function _objectType ($data=null,$queryString=null) { 
		return $this->doRequest ('objectType',$data,$queryString);
	}
}