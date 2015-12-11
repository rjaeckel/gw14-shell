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
 * dynamic abstraction for gw-class restorearea
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed addMember ( xsd\restoreAreaMembership $data=null ,string $queryString=null ) <p>request: POST system/restoreareas/{area}/membership</p><p>template-var: area => xs:string : template</p>
 * @method static apiResult|mixed create ( xsd\restoreArea $data=null ,string $queryString=null ) <p>request: POST system/restoreareas</p>
 * @method static apiResult|mixed delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE system/restoreareas/{area}</p><p>template-var: area => xs:string : template</p>
 * @method static apiResult|mixed getList ( mixed $data=null ,string $queryString=null ) <p>request: GET system/restoreareas</p>
 * @method static apiResult|mixed membership ( mixed $data=null ,string $queryString=null ) <p>request: GET system/restoreareas/{area}/membership</p><p>template-var: area => xs:string : template</p>
 * @method static apiResult|mixed object ( mixed $data=null ,string $queryString=null ) <p>request: GET system/restoreareas/{area}</p><p>template-var: area => xs:string : template</p>
 * @method static apiResult|mixed removeMember ( mixed $data=null ,string $queryString=null ) <p>request: DELETE system/restoreareas/{area}/membership/{member}</p><p>template-var: area => xs:string : template</p><p>template-var: member => xs:string : template</p>
 * @method static apiResult|mixed update ( xsd\restoreArea $data=null ,string $queryString=null ) <p>request: PUT system/restoreareas/{area}</p><p>template-var: area => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 * @method static apiResult|mixed updateMembership ( xsd\batchupdate $data=null ,string $queryString=null ) <p>request: PUT system/restoreareas/{area}/membership</p><p>template-var: area => xs:string : template</p>
 */
class restorearea extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"restorearea","__isObject":true,"addMember":{"paramStatic":{"area":"xs:string : template"},"paramQuery":{},"path":"system\/restoreareas\/{area}\/membership","action":"POST","doc":"Add a membership to the specified Restore Area.","requestType":"restoreAreaMembership","responseType":null},"create":{"paramStatic":{},"paramQuery":{},"path":"system\/restoreareas","action":"POST","doc":"Create a Restore Area with the specified data.","requestType":"restoreArea","responseType":null,"__isStatic":"object"},"delete":{"paramStatic":{"area":"xs:string : template"},"paramQuery":{},"path":"system\/restoreareas\/{area}","action":"DELETE","doc":"Delete a specific Restore Area given the name.","requestType":null,"responseType":null},"getList":{"paramStatic":{},"paramQuery":{},"path":"system\/restoreareas","action":"GET","doc":"Get a list of Restore Areas in this system.","requestType":null,"responseType":null,"__isStatic":"object"},"membership":{"paramStatic":{"area":"xs:string : template"},"paramQuery":{},"path":"system\/restoreareas\/{area}\/membership","action":"GET","doc":"Get a list of memberships for the specified Restore Area.","requestType":null,"responseType":null},"object":{"paramStatic":{"area":"xs:string : template"},"paramQuery":{},"path":"system\/restoreareas\/{area}","action":"GET","doc":"Get a specific Restore Area given the name.","requestType":null,"responseType":null},"removeMember":{"paramStatic":{"area":"xs:string : template","member":"xs:string : template"},"paramQuery":{},"path":"system\/restoreareas\/{area}\/membership\/{member}","action":"DELETE","doc":"Remove a membership from the specified Restore Area.","requestType":null,"responseType":null,"__isStatic":"orphan"},"update":{"paramStatic":{"area":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"system\/restoreareas\/{area}","action":"PUT","doc":"Update the specified Restore Area given the name.","requestType":"restoreArea","responseType":null},"updateMembership":{"paramStatic":{"area":"xs:string : template"},"paramQuery":{},"path":"system\/restoreareas\/{area}\/membership","action":"PUT","doc":"Update a list of memberships for the specified Restore Area","requestType":"batchupdate","responseType":null}}');
	}
	/**
	 * Add a membership to the specified Restore Area.
	 * @internal
	 *
	 * @param apiResult|xsd\restoreAreaMembership $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/restoreareas/{area}/membership</p>
	 * <p>template-var: area => xs:string : template</p>
	 */
	protected function _addMember ($data=null,$queryString=null) { 
		return $this->doRequest ('addMember',$data,$queryString);
	}
	/**
	 * Create a Restore Area with the specified data.
	 * @internal
	 *
	 * @param apiResult|xsd\restoreArea $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/restoreareas</p>
	 */
	protected function _create ($data=null,$queryString=null) { 
		return $this->doRequest ('create',$data,$queryString);
	}
	/**
	 * Delete a specific Restore Area given the name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE system/restoreareas/{area}</p>
	 * <p>template-var: area => xs:string : template</p>
	 */
	protected function _delete ($data=null,$queryString=null) { 
		return $this->doRequest ('delete',$data,$queryString);
	}
	/**
	 * Get a list of Restore Areas in this system.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/restoreareas</p>
	 */
	protected function _getList ($data=null,$queryString=null) { 
		return $this->doRequest ('getList',$data,$queryString);
	}
	/**
	 * Get a list of memberships for the specified Restore Area.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/restoreareas/{area}/membership</p>
	 * <p>template-var: area => xs:string : template</p>
	 */
	protected function _membership ($data=null,$queryString=null) { 
		return $this->doRequest ('membership',$data,$queryString);
	}
	/**
	 * Get a specific Restore Area given the name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/restoreareas/{area}</p>
	 * <p>template-var: area => xs:string : template</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Remove a membership from the specified Restore Area.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE system/restoreareas/{area}/membership/{member}</p>
	 * <p>template-var: area => xs:string : template</p>
	 * <p>template-var: member => xs:string : template</p>
	 */
	protected function _removeMember ($data=null,$queryString=null) { 
		return $this->doRequest ('removeMember',$data,$queryString);
	}
	/**
	 * Update the specified Restore Area given the name.
	 * @internal
	 *
	 * @param apiResult|xsd\restoreArea $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT system/restoreareas/{area}</p>
	 * <p>template-var: area => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _update ($data=null,$queryString=null) { 
		return $this->doRequest ('update',$data,$queryString);
	}
	/**
	 * Update a list of memberships for the specified Restore Area
	 * @internal
	 *
	 * @param apiResult|xsd\batchupdate $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT system/restoreareas/{area}/membership</p>
	 * <p>template-var: area => xs:string : template</p>
	 */
	protected function _updateMembership ($data=null,$queryString=null) { 
		return $this->doRequest ('updateMembership',$data,$queryString);
	}
}