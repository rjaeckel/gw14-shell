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
 * dynamic abstraction for gw-class externalsystem
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed create ( xsd\externalsystem $data=null ,string $queryString=null ) <p>request: POST system/externalsystemsync</p>
 * @method static apiResult|mixed delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE system/externalsystemsync/{externalsystem}</p><p>template-var: externalsystem => xs:string : template</p>
 * @method static apiResult|mixed getExternalSystem ( mixed $data=null ,string $queryString=null ) <p>request: GET system/externalsystemsync/{externalsystem}</p><p>template-var: externalsystem => xs:string : template</p>
 * @method static apiResult|mixed getExternalSystemSync ( mixed $data=null ,string $queryString=null ) <p>request: GET system/externalsystemsync</p>
 * @method static apiResult|mixed request ( mixed $data=null ,string $queryString=null ) <p>request: POST system/externalsystemsync/{externalsystem}/request</p><p>template-var: externalsystem => xs:string : template</p>
 * @method static apiResult|mixed update ( xsd\externalsystem $data=null ,string $queryString=null ) <p>request: PUT system/externalsystemsync/{externalsystem}</p><p>template-var: externalsystem => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 */
class externalsystem extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"externalsystem","__isObject":true,"create":{"paramStatic":{},"paramQuery":{},"path":"system\/externalsystemsync","action":"POST","doc":"Create the specified external System object with the given data.","requestType":"externalsystem","responseType":null,"__isStatic":"object"},"delete":{"paramStatic":{"externalsystem":"xs:string : template"},"paramQuery":{},"path":"system\/externalsystemsync\/{externalsystem}","action":"DELETE","doc":"Delete a specific System given the name.","requestType":null,"responseType":null},"getExternalSystem":{"paramStatic":{"externalsystem":"xs:string : template"},"paramQuery":{},"path":"system\/externalsystemsync\/{externalsystem}","action":"GET","doc":"Get the specified external System object","requestType":null,"responseType":null},"getExternalSystemSync":{"paramStatic":{},"paramQuery":{},"path":"system\/externalsystemsync","action":"GET","doc":"Get the list of external System objects","requestType":null,"responseType":null,"__isStatic":"object"},"request":{"paramStatic":{"externalsystem":"xs:string : template"},"paramQuery":{},"path":"system\/externalsystemsync\/{externalsystem}\/request","action":"POST","doc":"Request all information configured to be received from the specified external system.","requestType":null,"responseType":null},"update":{"paramStatic":{"externalsystem":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"system\/externalsystemsync\/{externalsystem}","action":"PUT","doc":"Update the specified external System object with the given data.","requestType":"externalsystem","responseType":null}}');
	}
	/**
	 * Create the specified external System object with the given data.
	 * @internal
	 *
	 * @param apiResult|xsd\externalsystem $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/externalsystemsync</p>
	 */
	protected function _create ($data=null,$queryString=null) { 
		return $this->doRequest ('create',$data,$queryString);
	}
	/**
	 * Delete a specific System given the name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE system/externalsystemsync/{externalsystem}</p>
	 * <p>template-var: externalsystem => xs:string : template</p>
	 */
	protected function _delete ($data=null,$queryString=null) { 
		return $this->doRequest ('delete',$data,$queryString);
	}
	/**
	 * Get the specified external System object
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/externalsystemsync/{externalsystem}</p>
	 * <p>template-var: externalsystem => xs:string : template</p>
	 */
	protected function _getExternalSystem ($data=null,$queryString=null) { 
		return $this->doRequest ('getExternalSystem',$data,$queryString);
	}
	/**
	 * Get the list of external System objects
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/externalsystemsync</p>
	 */
	protected function _getExternalSystemSync ($data=null,$queryString=null) { 
		return $this->doRequest ('getExternalSystemSync',$data,$queryString);
	}
	/**
	 * Request all information configured to be received from the specified external system.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/externalsystemsync/{externalsystem}/request</p>
	 * <p>template-var: externalsystem => xs:string : template</p>
	 */
	protected function _request ($data=null,$queryString=null) { 
		return $this->doRequest ('request',$data,$queryString);
	}
	/**
	 * Update the specified external System object with the given data.
	 * @internal
	 *
	 * @param apiResult|xsd\externalsystem $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT system/externalsystemsync/{externalsystem}</p>
	 * <p>template-var: externalsystem => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _update ($data=null,$queryString=null) { 
		return $this->doRequest ('update',$data,$queryString);
	}
}