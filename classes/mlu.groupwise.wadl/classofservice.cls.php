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
 * dynamic abstraction for gw-class classofservice
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed addMember ( xsd\cosmembership $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/gwias/{gwia}/classofservice/{cosname}/members</p><p>template-var: domain => xs:string : template</p><p>template-var: gwia => xs:string : template</p><p>template-var: cosname => xs:string : template</p>
 * @method static apiResult|mixed create ( xsd\classOfService $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/gwias/{gwia}/classofservice</p><p>template-var: domain => xs:string : template</p><p>template-var: gwia => xs:string : template</p>
 * @method static apiResult|mixed delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/gwias/{gwia}/classofservice/{cosname}</p><p>template-var: domain => xs:string : template</p><p>template-var: gwia => xs:string : template</p><p>template-var: cosname => xs:string : template</p>
 * @method static apiResult|mixed listClassesOfService ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/gwias/{gwia}/classofservice</p><p>template-var: domain => xs:string : template</p><p>template-var: gwia => xs:string : template</p>
 * @method static apiResult|mixed listMembers ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/gwias/{gwia}/classofservice/{cosname}/members</p><p>template-var: domain => xs:string : template</p><p>template-var: gwia => xs:string : template</p><p>template-var: cosname => xs:string : template</p>
 * @method static apiResult|mixed object ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/gwias/{gwia}/classofservice/{cosname}</p><p>template-var: domain => xs:string : template</p><p>template-var: gwia => xs:string : template</p><p>template-var: cosname => xs:string : template</p>
 * @method static apiResult|mixed removeMember ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/gwias/{gwia}/classofservice/{cosname}/members/{member}</p><p>template-var: domain => xs:string : template</p><p>template-var: gwia => xs:string : template</p><p>template-var: cosname => xs:string : template</p><p>template-var: member => xs:string : template</p>
 * @method static apiResult|mixed update ( xsd\classOfService $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/gwias/{gwia}/classofservice/{cosname}</p><p>template-var: domain => xs:string : template</p><p>template-var: gwia => xs:string : template</p><p>template-var: cosname => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 */
class classofservice extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"classofservice","__isObject":true,"addMember":{"paramStatic":{"domain":"xs:string : template","gwia":"xs:string : template","cosname":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/gwias\/{gwia}\/classofservice\/{cosname}\/members","action":"POST","doc":"Add a new member to the specified Class of Service. The \'id\' field of groupMember is required and all other fields are ignored","requestType":"cosmembership","responseType":null},"create":{"paramStatic":{"domain":"xs:string : template","gwia":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/gwias\/{gwia}\/classofservice","action":"POST","doc":"Create a Class of Service for the specified GWIA.","requestType":"classOfService","responseType":null,"__isStatic":"object"},"delete":{"paramStatic":{"domain":"xs:string : template","gwia":"xs:string : template","cosname":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/gwias\/{gwia}\/classofservice\/{cosname}","action":"DELETE","doc":"Delete a specific Class of Service given the name","requestType":null,"responseType":null},"listClassesOfService":{"paramStatic":{"domain":"xs:string : template","gwia":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/gwias\/{gwia}\/classofservice","action":"GET","doc":"Gate a list of Class of Service objects for the specified gwia.","requestType":null,"responseType":null,"__isStatic":"object"},"listMembers":{"paramStatic":{"domain":"xs:string : template","gwia":"xs:string : template","cosname":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/gwias\/{gwia}\/classofservice\/{cosname}\/members","action":"GET","doc":"Get the list of members for a specified Class of Service given the name.","requestType":null,"responseType":null},"object":{"paramStatic":{"domain":"xs:string : template","gwia":"xs:string : template","cosname":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/gwias\/{gwia}\/classofservice\/{cosname}","action":"GET","doc":"Get a specific GWIA given the name and the Domain name.","requestType":null,"responseType":null},"removeMember":{"paramStatic":{"domain":"xs:string : template","gwia":"xs:string : template","cosname":"xs:string : template","member":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/gwias\/{gwia}\/classofservice\/{cosname}\/members\/{member}","action":"DELETE","doc":"Remove a member from the specified Class of Service","requestType":null,"responseType":null,"__isStatic":"orphan"},"update":{"paramStatic":{"domain":"xs:string : template","gwia":"xs:string : template","cosname":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"domains\/{domain}\/gwias\/{gwia}\/classofservice\/{cosname}","action":"PUT","doc":"Update a specific Class of Service given the name","requestType":"classOfService","responseType":null}}');
	}
	/**
	 * Add a new member to the specified Class of Service. The 'id' field of groupMember is required and all other fields are ignored
	 * @internal
	 *
	 * @param apiResult|xsd\cosmembership $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/gwias/{gwia}/classofservice/{cosname}/members</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: gwia => xs:string : template</p>
	 * <p>template-var: cosname => xs:string : template</p>
	 */
	protected function _addMember ($data=null,$queryString=null) { 
		return $this->doRequest ('addMember',$data,$queryString);
	}
	/**
	 * Create a Class of Service for the specified GWIA.
	 * @internal
	 *
	 * @param apiResult|xsd\classOfService $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/gwias/{gwia}/classofservice</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: gwia => xs:string : template</p>
	 */
	protected function _create ($data=null,$queryString=null) { 
		return $this->doRequest ('create',$data,$queryString);
	}
	/**
	 * Delete a specific Class of Service given the name
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/gwias/{gwia}/classofservice/{cosname}</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: gwia => xs:string : template</p>
	 * <p>template-var: cosname => xs:string : template</p>
	 */
	protected function _delete ($data=null,$queryString=null) { 
		return $this->doRequest ('delete',$data,$queryString);
	}
	/**
	 * Gate a list of Class of Service objects for the specified gwia.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/gwias/{gwia}/classofservice</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: gwia => xs:string : template</p>
	 */
	protected function _listClassesOfService ($data=null,$queryString=null) { 
		return $this->doRequest ('listClassesOfService',$data,$queryString);
	}
	/**
	 * Get the list of members for a specified Class of Service given the name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/gwias/{gwia}/classofservice/{cosname}/members</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: gwia => xs:string : template</p>
	 * <p>template-var: cosname => xs:string : template</p>
	 */
	protected function _listMembers ($data=null,$queryString=null) { 
		return $this->doRequest ('listMembers',$data,$queryString);
	}
	/**
	 * Get a specific GWIA given the name and the Domain name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/gwias/{gwia}/classofservice/{cosname}</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: gwia => xs:string : template</p>
	 * <p>template-var: cosname => xs:string : template</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Remove a member from the specified Class of Service
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/gwias/{gwia}/classofservice/{cosname}/members/{member}</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: gwia => xs:string : template</p>
	 * <p>template-var: cosname => xs:string : template</p>
	 * <p>template-var: member => xs:string : template</p>
	 */
	protected function _removeMember ($data=null,$queryString=null) { 
		return $this->doRequest ('removeMember',$data,$queryString);
	}
	/**
	 * Update a specific Class of Service given the name
	 * @internal
	 *
	 * @param apiResult|xsd\classOfService $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/gwias/{gwia}/classofservice/{cosname}</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: gwia => xs:string : template</p>
	 * <p>template-var: cosname => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _update ($data=null,$queryString=null) { 
		return $this->doRequest ('update',$data,$queryString);
	}
}