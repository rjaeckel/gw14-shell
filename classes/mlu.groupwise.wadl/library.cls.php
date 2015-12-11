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
 * dynamic abstraction for gw-class library
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed addAccessRights ( xsd\libraryAccessRights $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/libraries/{library}/accessrights</p><p>template-var: postoffice => xs:string : template</p><p>template-var: library => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed batchUpdateAccessRights ( xsd\libraryAccessRightsListUpdate $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/libraries/{library}/accessrights</p><p>template-var: postoffice => xs:string : template</p><p>template-var: library => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed create ( xsd\library $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/libraries</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/postoffices/{postoffice}/libraries/{library}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: library => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed disableStorageArea ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/postoffices/{postoffice}/libraries/{library}/enabledstorageareas/{area}</p><p>template-var: area => xs:string : template</p><p>template-var: postoffice => xs:string : template</p><p>template-var: library => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed enableStorageArea ( xsd\libraryAreaAccess $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/libraries/{library}/enabledstorageareas</p><p>template-var: postoffice => xs:string : template</p><p>template-var: library => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed getList ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/libraries</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed gwcheck ( xsd\checkOptions $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/libraries/{library}/gwcheck</p><p>template-var: postoffice => xs:string : template</p><p>template-var: library => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed info ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/libraries/{library}/info</p><p>template-var: postoffice => xs:string : template</p><p>template-var: library => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed listAccessRights ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/libraries/{library}/accessrights</p><p>template-var: postoffice => xs:string : template</p><p>template-var: library => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed listEnabledStorageAreas ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/libraries/{library}/enabledstorageareas</p><p>template-var: postoffice => xs:string : template</p><p>template-var: library => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|xsd\checkOptions loadCheckOptions ( mixed $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/libraries/{library}/gwcheck/load</p><p>template-var: postoffice => xs:string : template</p><p>template-var: library => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed object ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/libraries/{library}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: library => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed removeAccessRights ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/postoffices/{postoffice}/libraries/{library}/accessrights/{userid}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: library => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: userid => xs:string : template</p>
 * @method static apiResult|mixed replicate ( mixed $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/libraries/{library}/replicate</p><p>template-var: postoffice => xs:string : template</p><p>template-var: library => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed saveCheckOptions ( xsd\checkOptions $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/libraries/{library}/gwcheck/save</p><p>template-var: postoffice => xs:string : template</p><p>template-var: library => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed update ( xsd\library $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/libraries/{library}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: library => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 * @method static apiResult|mixed updateAccessRights ( xsd\libraryAccessRights $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/libraries/{library}/accessrights/{userid}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: library => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: userid => xs:string : template</p>
 * @method static apiResult|mixed updateEnabledStorageAreas ( xsd\batchupdate $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/libraries/{library}/enabledstorageareas/</p><p>template-var: postoffice => xs:string : template</p><p>template-var: library => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 */
class library extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"library","__isObject":true,"addAccessRights":{"paramStatic":{"postoffice":"xs:string : template","library":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/libraries\/{library}\/accessrights","action":"POST","doc":"Add Library Access Rights for a User to the specified Library.","requestType":"libraryAccessRights","responseType":null},"batchUpdateAccessRights":{"paramStatic":{"postoffice":"xs:string : template","library":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/libraries\/{library}\/accessrights","action":"PUT","doc":"Update a list of Library Access Rights for the specified Users to the specified Library.","requestType":"libraryAccessRightsListUpdate","responseType":null},"create":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/libraries","action":"POST","doc":"Create a Library with the given data.","requestType":"library","responseType":null,"__isStatic":"object"},"delete":{"paramStatic":{"postoffice":"xs:string : template","library":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/libraries\/{library}","action":"DELETE","doc":"Delete a specified Library given the name.","requestType":null,"responseType":null},"disableStorageArea":{"paramStatic":{"area":"xs:string : template","postoffice":"xs:string : template","library":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/libraries\/{library}\/enabledstorageareas\/{area}","action":"DELETE","doc":"Disable access to a Library Area for the specified Library.","requestType":null,"responseType":null,"__isStatic":"orphan"},"enableStorageArea":{"paramStatic":{"postoffice":"xs:string : template","library":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/libraries\/{library}\/enabledstorageareas","action":"POST","doc":"Enable access to a Library Area for the specified Library.","requestType":"libraryAreaAccess","responseType":null},"getList":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/libraries","action":"GET","doc":"Get a list of Libraries in a specific Post Office. Note: Attribute filtering is supported using this query (for example: <code> ...?attribute=value<\/code>)","requestType":null,"responseType":null,"__isStatic":"object"},"gwcheck":{"paramStatic":{"postoffice":"xs:string : template","library":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/libraries\/{library}\/gwcheck","action":"POST","doc":"Perform maintenance for the specified Library.","requestType":"checkOptions","responseType":null},"info":{"paramStatic":{"postoffice":"xs:string : template","library":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/libraries\/{library}\/info","action":"GET","doc":"Retrieve statistical information about the specified Library.","requestType":null,"responseType":null},"listAccessRights":{"paramStatic":{"postoffice":"xs:string : template","library":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/libraries\/{library}\/accessrights","action":"GET","doc":"Get a list of Library Access Rights for the specified Library.","requestType":null,"responseType":null},"listEnabledStorageAreas":{"paramStatic":{"postoffice":"xs:string : template","library":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/libraries\/{library}\/enabledstorageareas","action":"GET","doc":"Get a list of Library Area Access objects used by the specified Library.","requestType":null,"responseType":null},"loadCheckOptions":{"paramStatic":{"postoffice":"xs:string : template","library":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/libraries\/{library}\/gwcheck\/load","action":"POST","doc":"Convert maintenance options in XML file format into a REST check options object.","requestType":null,"responseType":"checkOptions","__isStatic":"orphan"},"object":{"paramStatic":{"postoffice":"xs:string : template","library":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/libraries\/{library}","action":"GET","doc":"Get a specific Library given the name.","requestType":null,"responseType":null},"removeAccessRights":{"paramStatic":{"postoffice":"xs:string : template","library":"xs:string : template","domain":"xs:string : template","userid":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/libraries\/{library}\/accessrights\/{userid}","action":"DELETE","doc":"Remove Library Access Rights for a User from the specified Library.","requestType":null,"responseType":null,"__isStatic":"orphan"},"replicate":{"paramStatic":{"postoffice":"xs:string : template","library":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/libraries\/{library}\/replicate","action":"POST","doc":"Replicate this library through the system.","requestType":null,"responseType":null},"saveCheckOptions":{"paramStatic":{"postoffice":"xs:string : template","library":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/libraries\/{library}\/gwcheck\/save","action":"POST","doc":"Convert maintenance REST check options object into XML file format file suitable for use with GwCheck.","requestType":"checkOptions","responseType":null,"__isStatic":"orphan"},"update":{"paramStatic":{"postoffice":"xs:string : template","library":"xs:string : template","domain":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"domains\/{domain}\/postoffices\/{postoffice}\/libraries\/{library}","action":"PUT","doc":"Update the specified Library with the given data.","requestType":"library","responseType":null},"updateAccessRights":{"paramStatic":{"postoffice":"xs:string : template","library":"xs:string : template","domain":"xs:string : template","userid":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/libraries\/{library}\/accessrights\/{userid}","action":"PUT","doc":"Add Library Access Rights for the specified User to the specified Library.","requestType":"libraryAccessRights","responseType":null,"__isStatic":"orphan"},"updateEnabledStorageAreas":{"paramStatic":{"postoffice":"xs:string : template","library":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/libraries\/{library}\/enabledstorageareas\/","action":"PUT","doc":"Update the access to a list of Library Areas for the specified Library.","requestType":"batchupdate","responseType":null}}');
	}
	/**
	 * Add Library Access Rights for a User to the specified Library.
	 * @internal
	 *
	 * @param apiResult|xsd\libraryAccessRights $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/libraries/{library}/accessrights</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: library => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _addAccessRights ($data=null,$queryString=null) { 
		return $this->doRequest ('addAccessRights',$data,$queryString);
	}
	/**
	 * Update a list of Library Access Rights for the specified Users to the specified Library.
	 * @internal
	 *
	 * @param apiResult|xsd\libraryAccessRightsListUpdate $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/libraries/{library}/accessrights</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: library => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _batchUpdateAccessRights ($data=null,$queryString=null) { 
		return $this->doRequest ('batchUpdateAccessRights',$data,$queryString);
	}
	/**
	 * Create a Library with the given data.
	 * @internal
	 *
	 * @param apiResult|xsd\library $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/libraries</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _create ($data=null,$queryString=null) { 
		return $this->doRequest ('create',$data,$queryString);
	}
	/**
	 * Delete a specified Library given the name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/postoffices/{postoffice}/libraries/{library}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: library => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _delete ($data=null,$queryString=null) { 
		return $this->doRequest ('delete',$data,$queryString);
	}
	/**
	 * Disable access to a Library Area for the specified Library.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/postoffices/{postoffice}/libraries/{library}/enabledstorageareas/{area}</p>
	 * <p>template-var: area => xs:string : template</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: library => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _disableStorageArea ($data=null,$queryString=null) { 
		return $this->doRequest ('disableStorageArea',$data,$queryString);
	}
	/**
	 * Enable access to a Library Area for the specified Library.
	 * @internal
	 *
	 * @param apiResult|xsd\libraryAreaAccess $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/libraries/{library}/enabledstorageareas</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: library => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _enableStorageArea ($data=null,$queryString=null) { 
		return $this->doRequest ('enableStorageArea',$data,$queryString);
	}
	/**
	 * Get a list of Libraries in a specific Post Office. Note: Attribute filtering is supported using this query (for example: <code> ...?attribute=value</code>)
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/libraries</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _getList ($data=null,$queryString=null) { 
		return $this->doRequest ('getList',$data,$queryString);
	}
	/**
	 * Perform maintenance for the specified Library.
	 * @internal
	 *
	 * @param apiResult|xsd\checkOptions $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/libraries/{library}/gwcheck</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: library => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _gwcheck ($data=null,$queryString=null) { 
		return $this->doRequest ('gwcheck',$data,$queryString);
	}
	/**
	 * Retrieve statistical information about the specified Library.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/libraries/{library}/info</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: library => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _info ($data=null,$queryString=null) { 
		return $this->doRequest ('info',$data,$queryString);
	}
	/**
	 * Get a list of Library Access Rights for the specified Library.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/libraries/{library}/accessrights</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: library => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _listAccessRights ($data=null,$queryString=null) { 
		return $this->doRequest ('listAccessRights',$data,$queryString);
	}
	/**
	 * Get a list of Library Area Access objects used by the specified Library.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/libraries/{library}/enabledstorageareas</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: library => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _listEnabledStorageAreas ($data=null,$queryString=null) { 
		return $this->doRequest ('listEnabledStorageAreas',$data,$queryString);
	}
	/**
	 * Convert maintenance options in XML file format into a REST check options object.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\checkOptions
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/libraries/{library}/gwcheck/load</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: library => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _loadCheckOptions ($data=null,$queryString=null) { 
		return $this->doRequest ('loadCheckOptions',$data,$queryString);
	}
	/**
	 * Get a specific Library given the name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/libraries/{library}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: library => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Remove Library Access Rights for a User from the specified Library.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/postoffices/{postoffice}/libraries/{library}/accessrights/{userid}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: library => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: userid => xs:string : template</p>
	 */
	protected function _removeAccessRights ($data=null,$queryString=null) { 
		return $this->doRequest ('removeAccessRights',$data,$queryString);
	}
	/**
	 * Replicate this library through the system.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/libraries/{library}/replicate</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: library => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _replicate ($data=null,$queryString=null) { 
		return $this->doRequest ('replicate',$data,$queryString);
	}
	/**
	 * Convert maintenance REST check options object into XML file format file suitable for use with GwCheck.
	 * @internal
	 *
	 * @param apiResult|xsd\checkOptions $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/libraries/{library}/gwcheck/save</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: library => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _saveCheckOptions ($data=null,$queryString=null) { 
		return $this->doRequest ('saveCheckOptions',$data,$queryString);
	}
	/**
	 * Update the specified Library with the given data.
	 * @internal
	 *
	 * @param apiResult|xsd\library $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/libraries/{library}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: library => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _update ($data=null,$queryString=null) { 
		return $this->doRequest ('update',$data,$queryString);
	}
	/**
	 * Add Library Access Rights for the specified User to the specified Library.
	 * @internal
	 *
	 * @param apiResult|xsd\libraryAccessRights $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/libraries/{library}/accessrights/{userid}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: library => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: userid => xs:string : template</p>
	 */
	protected function _updateAccessRights ($data=null,$queryString=null) { 
		return $this->doRequest ('updateAccessRights',$data,$queryString);
	}
	/**
	 * Update the access to a list of Library Areas for the specified Library.
	 * @internal
	 *
	 * @param apiResult|xsd\batchupdate $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/libraries/{library}/enabledstorageareas/</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: library => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _updateEnabledStorageAreas ($data=null,$queryString=null) { 
		return $this->doRequest ('updateEnabledStorageAreas',$data,$queryString);
	}
}