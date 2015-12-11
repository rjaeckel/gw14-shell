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
 * dynamic abstraction for gw-class custompreference
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed create ( xsd\customPreference $data=null ,string $queryString=null ) <p>request: POST prefs</p>
 * @method static apiResult|mixed createInGroup ( xsd\customPreference $data=null ,string $queryString=null ) <p>request: POST prefs/{group}</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|mixed delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE prefs/{group}/{name}</p><p>template-var: name => xs:string : template</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|mixed getList ( mixed $data=null ,string $queryString=null ) <p>request: GET prefs</p>
 * @method static apiResult|mixed listInGroup ( mixed $data=null ,string $queryString=null ) <p>request: GET prefs/{group}</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|mixed object ( mixed $data=null ,string $queryString=null ) <p>request: GET prefs/{group}/{name}</p><p>template-var: name => xs:string : template</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|mixed update ( xsd\customPreference $data=null ,string $queryString=null ) <p>request: PUT prefs/{group}/{name}</p><p>template-var: name => xs:string : template</p><p>template-var: group => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 */
class custompreference extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"custompreference","__isObject":true,"create":{"paramStatic":{},"paramQuery":{},"path":"prefs","action":"POST","doc":"Create a new custom preference for the current administrator.","requestType":"customPreference","responseType":null,"__isStatic":"object"},"createInGroup":{"paramStatic":{"group":"xs:string : template"},"paramQuery":{},"path":"prefs\/{group}","action":"POST","doc":"Create a new custom preference for the current administrator.","requestType":"customPreference","responseType":null,"__isStatic":"object"},"delete":{"paramStatic":{"name":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"prefs\/{group}\/{name}","action":"DELETE","doc":"Delete a specific preference given the preference group and name.","requestType":null,"responseType":null},"getList":{"paramStatic":{},"paramQuery":{},"path":"prefs","action":"GET","doc":"Get a list of custom preferences for the current administrator.","requestType":null,"responseType":null,"__isStatic":"object"},"listInGroup":{"paramStatic":{"group":"xs:string : template"},"paramQuery":{},"path":"prefs\/{group}","action":"GET","doc":"Get a list of custom preferences in the specified property group for the current administrator.","requestType":null,"responseType":null,"__isStatic":"object"},"object":{"paramStatic":{"name":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"prefs\/{group}\/{name}","action":"GET","doc":"Get a specific preference given the preference group and name.","requestType":null,"responseType":null},"update":{"paramStatic":{"name":"xs:string : template","group":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"prefs\/{group}\/{name}","action":"PUT","doc":"Update a specific preference given the preference group and name.","requestType":"customPreference","responseType":null}}');
	}
	/**
	 * Create a new custom preference for the current administrator.
	 * @internal
	 *
	 * @param apiResult|xsd\customPreference $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST prefs</p>
	 */
	protected function _create ($data=null,$queryString=null) { 
		return $this->doRequest ('create',$data,$queryString);
	}
	/**
	 * Create a new custom preference for the current administrator.
	 * @internal
	 *
	 * @param apiResult|xsd\customPreference $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST prefs/{group}</p>
	 * <p>template-var: group => xs:string : template</p>
	 */
	protected function _createInGroup ($data=null,$queryString=null) { 
		return $this->doRequest ('createInGroup',$data,$queryString);
	}
	/**
	 * Delete a specific preference given the preference group and name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE prefs/{group}/{name}</p>
	 * <p>template-var: name => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
	 */
	protected function _delete ($data=null,$queryString=null) { 
		return $this->doRequest ('delete',$data,$queryString);
	}
	/**
	 * Get a list of custom preferences for the current administrator.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET prefs</p>
	 */
	protected function _getList ($data=null,$queryString=null) { 
		return $this->doRequest ('getList',$data,$queryString);
	}
	/**
	 * Get a list of custom preferences in the specified property group for the current administrator.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET prefs/{group}</p>
	 * <p>template-var: group => xs:string : template</p>
	 */
	protected function _listInGroup ($data=null,$queryString=null) { 
		return $this->doRequest ('listInGroup',$data,$queryString);
	}
	/**
	 * Get a specific preference given the preference group and name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET prefs/{group}/{name}</p>
	 * <p>template-var: name => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Update a specific preference given the preference group and name.
	 * @internal
	 *
	 * @param apiResult|xsd\customPreference $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT prefs/{group}/{name}</p>
	 * <p>template-var: name => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _update ($data=null,$queryString=null) { 
		return $this->doRequest ('update',$data,$queryString);
	}
}