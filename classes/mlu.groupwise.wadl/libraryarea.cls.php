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
 * dynamic abstraction for gw-class libraryarea
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed create ( xsd\libraryArea $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/libraries/{library}/storageareas</p><p>template-var: postoffice => xs:string : template</p><p>template-var: library => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/postoffices/{postoffice}/libraries/{library}/storageareas/{area}</p><p>template-var: area => xs:string : template</p><p>template-var: postoffice => xs:string : template</p><p>template-var: library => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed getList ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/libraries/{library}/storageareas</p><p>template-var: postoffice => xs:string : template</p><p>template-var: library => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed object ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/libraries/{library}/storageareas/{area}</p><p>template-var: area => xs:string : template</p><p>template-var: postoffice => xs:string : template</p><p>template-var: library => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed update ( xsd\libraryArea $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/libraries/{library}/storageareas/{area}</p><p>template-var: area => xs:string : template</p><p>template-var: postoffice => xs:string : template</p><p>template-var: library => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 */
class libraryarea extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"libraryarea","__isObject":true,"create":{"paramStatic":{"postoffice":"xs:string : template","library":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/libraries\/{library}\/storageareas","action":"POST","doc":"Create a new Library Area","requestType":"libraryArea","responseType":null,"__isStatic":"object"},"delete":{"paramStatic":{"area":"xs:string : template","postoffice":"xs:string : template","library":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/libraries\/{library}\/storageareas\/{area}","action":"DELETE","doc":"Delete the Library Area with the specified name","requestType":null,"responseType":null},"getList":{"paramStatic":{"postoffice":"xs:string : template","library":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/libraries\/{library}\/storageareas","action":"GET","doc":"Get a list of all library areas defined in the system.","requestType":null,"responseType":null,"__isStatic":"object"},"object":{"paramStatic":{"area":"xs:string : template","postoffice":"xs:string : template","library":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/libraries\/{library}\/storageareas\/{area}","action":"GET","doc":"Get a specific library area given the name","requestType":null,"responseType":null},"update":{"paramStatic":{"area":"xs:string : template","postoffice":"xs:string : template","library":"xs:string : template","domain":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"domains\/{domain}\/postoffices\/{postoffice}\/libraries\/{library}\/storageareas\/{area}","action":"PUT","doc":"Update a Library Area with the specified name","requestType":"libraryArea","responseType":null}}');
	}
	/**
	 * Create a new Library Area
	 * @internal
	 *
	 * @param apiResult|xsd\libraryArea $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/libraries/{library}/storageareas</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: library => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _create ($data=null,$queryString=null) { 
		return $this->doRequest ('create',$data,$queryString);
	}
	/**
	 * Delete the Library Area with the specified name
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/postoffices/{postoffice}/libraries/{library}/storageareas/{area}</p>
	 * <p>template-var: area => xs:string : template</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: library => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _delete ($data=null,$queryString=null) { 
		return $this->doRequest ('delete',$data,$queryString);
	}
	/**
	 * Get a list of all library areas defined in the system.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/libraries/{library}/storageareas</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: library => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _getList ($data=null,$queryString=null) { 
		return $this->doRequest ('getList',$data,$queryString);
	}
	/**
	 * Get a specific library area given the name
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/libraries/{library}/storageareas/{area}</p>
	 * <p>template-var: area => xs:string : template</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: library => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Update a Library Area with the specified name
	 * @internal
	 *
	 * @param apiResult|xsd\libraryArea $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/libraries/{library}/storageareas/{area}</p>
	 * <p>template-var: area => xs:string : template</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: library => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _update ($data=null,$queryString=null) { 
		return $this->doRequest ('update',$data,$queryString);
	}
}