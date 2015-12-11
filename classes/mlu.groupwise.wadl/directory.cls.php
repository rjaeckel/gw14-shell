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
 * dynamic abstraction for gw-class directory
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed clearCertificate ( mixed $data=null ,string $queryString=null ) <p>request: DELETE system/directories/{directoryId}/certificate</p><p>template-var: directoryId => xs:string : template</p>
 * @method static apiResult|mixed create ( xsd\directory $data=null ,string $queryString=null ) <p>request: POST system/directories</p>
 * @method static apiResult|mixed delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE system/directories/{directoryId}</p><p>template-var: directoryId => xs:string : template</p>
 * @method static apiResult|mixed getCertificate ( mixed $data=null ,string $queryString=null ) <p>request: GET system/directories/{directoryId}/certificate</p><p>template-var: directoryId => xs:string : template</p>
 * @method static apiResult|mixed getGroupSchema ( mixed $data=null ,string $queryString=null ) <p>request: GET system/directories/{directoryId}/schema/group</p><p>template-var: directoryId => xs:string : template</p>
 * @method static apiResult|mixed getList ( mixed $data=null ,string $queryString=null ) <p>request: GET system/directories</p>
 * @method static apiResult|mixed getUserSchema ( mixed $data=null ,string $queryString=null ) <p>request: GET system/directories/{directoryId}/schema/user</p><p>template-var: directoryId => xs:string : template</p>
 * @method static apiResult|mixed ldapImport ( xsd\dirImport $data=null ,string $queryString=null ) <p>request: POST system/directories/{directoryId}/import</p><p>template-var: directoryId => xs:string : template</p>
 * @method static apiResult|mixed ldapLink ( xsd\dirLink $data=null ,string $queryString=null ) <p>request: POST system/directories/{directoryId}/link</p><p>template-var: directoryId => xs:string : template</p>
 * @method static apiResult|mixed ldapPublish ( xsd\dirPublish $data=null ,string $queryString=null ) <p>request: POST system/directories/{directoryId}/publish</p><p>template-var: directoryId => xs:string : template</p>
 * @method static apiResult|mixed ldapSync ( mixed $data=null ,string $queryString=null ) <p>request: POST system/directories/{directoryId}/sync</p><p>template-var: directoryId => xs:string : template</p>
 * @method static apiResult|mixed object ( mixed $data=null ,string $queryString=null ) <p>request: GET system/directories/{directoryId}</p><p>template-var: directoryId => xs:string : template</p>
 * @method static apiResult|xsd\listResult search ( mixed $data=null ,string $queryString=null ) <p>request: GET system/directories/{directoryId}/search</p><p>template-var: directoryId => xs:string : template</p><p>query-String: context => xs:string : query</p><p>query-String: filter => xs:string : query</p><p>query-String: subtree => xs:boolean : query</p><p>query-String: type => xs:string : query</p>
 * @method static apiResult|mixed update ( xsd\directory $data=null ,string $queryString=null ) <p>request: PUT system/directories/{directoryId}</p><p>template-var: directoryId => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 */
class directory extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"directory","__isObject":true,"clearCertificate":{"paramStatic":{"directoryId":"xs:string : template"},"paramQuery":{},"path":"system\/directories\/{directoryId}\/certificate","action":"DELETE","doc":"Remove the certificate information stored by this LDAP server and disable SSL. Note  that if the SSL certificate was stored as a file that the file will NOT be deleted.","requestType":null,"responseType":null},"create":{"paramStatic":{},"paramQuery":{},"path":"system\/directories","action":"POST","doc":"Create a new directory","requestType":"directory","responseType":null,"__isStatic":"object"},"delete":{"paramStatic":{"directoryId":"xs:string : template"},"paramQuery":{},"path":"system\/directories\/{directoryId}","action":"DELETE","doc":"Delete a directory object","requestType":null,"responseType":null},"getCertificate":{"paramStatic":{"directoryId":"xs:string : template"},"paramQuery":{},"path":"system\/directories\/{directoryId}\/certificate","action":"GET","doc":"Retrieve the certificate stream. This will return the binary certificate  if set on the ldap server, otherwise it will attempt to read the certificate  at the ssl cert file path.","requestType":null,"responseType":null},"getGroupSchema":{"paramStatic":{"directoryId":"xs:string : template"},"paramQuery":{},"path":"system\/directories\/{directoryId}\/schema\/group","action":"GET","doc":"Connect to the LDAP server and lookup the LDAP schema for group objects","requestType":null,"responseType":null},"getList":{"paramStatic":{},"paramQuery":{},"path":"system\/directories","action":"GET","doc":"List all directories.","requestType":null,"responseType":null,"__isStatic":"object"},"getUserSchema":{"paramStatic":{"directoryId":"xs:string : template"},"paramQuery":{},"path":"system\/directories\/{directoryId}\/schema\/user","action":"GET","doc":"Connect to the LDAP server and lookup the LDAP schema for user objects","requestType":null,"responseType":null},"ldapImport":{"paramStatic":{"directoryId":"xs:string : template"},"paramQuery":{},"path":"system\/directories\/{directoryId}\/import","action":"POST","doc":"Imports users from LDAP server into the target post office.","requestType":"dirImport","responseType":null},"ldapLink":{"paramStatic":{"directoryId":"xs:string : template"},"paramQuery":{},"path":"system\/directories\/{directoryId}\/link","action":"POST","doc":"Link users in the specified container to users on this ldap server.","requestType":"dirLink","responseType":null},"ldapPublish":{"paramStatic":{"directoryId":"xs:string : template"},"paramQuery":{},"path":"system\/directories\/{directoryId}\/publish","action":"POST","doc":"Publish user details back to the LDAP directory","requestType":"dirPublish","responseType":null},"ldapSync":{"paramStatic":{"directoryId":"xs:string : template"},"paramQuery":{},"path":"system\/directories\/{directoryId}\/sync","action":"POST","doc":"Synchronize all objects associated with this Directory.","requestType":null,"responseType":null},"object":{"paramStatic":{"directoryId":"xs:string : template"},"paramQuery":{},"path":"system\/directories\/{directoryId}","action":"GET","doc":"Get a particular directory by ID","requestType":null,"responseType":null},"search":{"paramStatic":{"directoryId":"xs:string : template"},"paramQuery":{"context":"xs:string : query","filter":"xs:string : query","subtree":"xs:boolean : query","type":"xs:string : query"},"path":"system\/directories\/{directoryId}\/search","action":"GET","doc":"Temporary search endpoint for testing LDAP search, mapping and enumeration functionality.","requestType":null,"responseType":"listResult"},"update":{"paramStatic":{"directoryId":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"system\/directories\/{directoryId}","action":"PUT","doc":"Update a directory object","requestType":"directory","responseType":null}}');
	}
	/**
	 * Remove the certificate information stored by this LDAP server and disable SSL. Note  that if the SSL certificate was stored as a file that the file will NOT be deleted.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE system/directories/{directoryId}/certificate</p>
	 * <p>template-var: directoryId => xs:string : template</p>
	 */
	protected function _clearCertificate ($data=null,$queryString=null) { 
		return $this->doRequest ('clearCertificate',$data,$queryString);
	}
	/**
	 * Create a new directory
	 * @internal
	 *
	 * @param apiResult|xsd\directory $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/directories</p>
	 */
	protected function _create ($data=null,$queryString=null) { 
		return $this->doRequest ('create',$data,$queryString);
	}
	/**
	 * Delete a directory object
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE system/directories/{directoryId}</p>
	 * <p>template-var: directoryId => xs:string : template</p>
	 */
	protected function _delete ($data=null,$queryString=null) { 
		return $this->doRequest ('delete',$data,$queryString);
	}
	/**
	 * Retrieve the certificate stream. This will return the binary certificate  if set on the ldap server, otherwise it will attempt to read the certificate  at the ssl cert file path.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/directories/{directoryId}/certificate</p>
	 * <p>template-var: directoryId => xs:string : template</p>
	 */
	protected function _getCertificate ($data=null,$queryString=null) { 
		return $this->doRequest ('getCertificate',$data,$queryString);
	}
	/**
	 * Connect to the LDAP server and lookup the LDAP schema for group objects
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/directories/{directoryId}/schema/group</p>
	 * <p>template-var: directoryId => xs:string : template</p>
	 */
	protected function _getGroupSchema ($data=null,$queryString=null) { 
		return $this->doRequest ('getGroupSchema',$data,$queryString);
	}
	/**
	 * List all directories.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/directories</p>
	 */
	protected function _getList ($data=null,$queryString=null) { 
		return $this->doRequest ('getList',$data,$queryString);
	}
	/**
	 * Connect to the LDAP server and lookup the LDAP schema for user objects
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/directories/{directoryId}/schema/user</p>
	 * <p>template-var: directoryId => xs:string : template</p>
	 */
	protected function _getUserSchema ($data=null,$queryString=null) { 
		return $this->doRequest ('getUserSchema',$data,$queryString);
	}
	/**
	 * Imports users from LDAP server into the target post office.
	 * @internal
	 *
	 * @param apiResult|xsd\dirImport $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/directories/{directoryId}/import</p>
	 * <p>template-var: directoryId => xs:string : template</p>
	 */
	protected function _ldapImport ($data=null,$queryString=null) { 
		return $this->doRequest ('ldapImport',$data,$queryString);
	}
	/**
	 * Link users in the specified container to users on this ldap server.
	 * @internal
	 *
	 * @param apiResult|xsd\dirLink $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/directories/{directoryId}/link</p>
	 * <p>template-var: directoryId => xs:string : template</p>
	 */
	protected function _ldapLink ($data=null,$queryString=null) { 
		return $this->doRequest ('ldapLink',$data,$queryString);
	}
	/**
	 * Publish user details back to the LDAP directory
	 * @internal
	 *
	 * @param apiResult|xsd\dirPublish $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/directories/{directoryId}/publish</p>
	 * <p>template-var: directoryId => xs:string : template</p>
	 */
	protected function _ldapPublish ($data=null,$queryString=null) { 
		return $this->doRequest ('ldapPublish',$data,$queryString);
	}
	/**
	 * Synchronize all objects associated with this Directory.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/directories/{directoryId}/sync</p>
	 * <p>template-var: directoryId => xs:string : template</p>
	 */
	protected function _ldapSync ($data=null,$queryString=null) { 
		return $this->doRequest ('ldapSync',$data,$queryString);
	}
	/**
	 * Get a particular directory by ID
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/directories/{directoryId}</p>
	 * <p>template-var: directoryId => xs:string : template</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Temporary search endpoint for testing LDAP search, mapping and enumeration functionality.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\listResult
	 *
	 * <p>request: GET system/directories/{directoryId}/search</p>
	 * <p>template-var: directoryId => xs:string : template</p>
	 * <p>query-String: context => xs:string : query</p>
	 * <p>query-String: filter => xs:string : query</p>
	 * <p>query-String: subtree => xs:boolean : query</p>
	 * <p>query-String: type => xs:string : query</p>
	 */
	protected function _search ($data=null,$queryString=null) { 
		return $this->doRequest ('search',$data,$queryString);
	}
	/**
	 * Update a directory object
	 * @internal
	 *
	 * @param apiResult|xsd\directory $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT system/directories/{directoryId}</p>
	 * <p>template-var: directoryId => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _update ($data=null,$queryString=null) { 
		return $this->doRequest ('update',$data,$queryString);
	}
}