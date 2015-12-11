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
 * dynamic abstraction for gw-class ldapserver
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed clearCertificate ( mixed $data=null ,string $queryString=null ) <p>request: DELETE system/ldapservers/{ldapserver}/certificate</p><p>template-var: ldapserver => xs:string : template</p>
 * @method static apiResult|mixed create ( xsd\ldapServer $data=null ,string $queryString=null ) <p>request: POST system/ldapservers</p>
 * @method static apiResult|mixed delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE system/ldapservers/{ldapserver}</p><p>template-var: ldapserver => xs:string : template</p>
 * @method static apiResult|mixed getCertificate ( mixed $data=null ,string $queryString=null ) <p>request: GET system/ldapservers/{ldapserver}/certificate</p><p>template-var: ldapserver => xs:string : template</p>
 * @method static apiResult|mixed getList ( mixed $data=null ,string $queryString=null ) <p>request: GET system/ldapservers</p>
 * @method static apiResult|mixed listAssoc ( mixed $data=null ,string $queryString=null ) <p>request: GET system/ldapservers/{ldapserver}/refpostoffices</p><p>template-var: ldapserver => xs:string : template</p>
 * @method static apiResult|mixed object ( mixed $data=null ,string $queryString=null ) <p>request: GET system/ldapservers/{ldapserver}</p><p>template-var: ldapserver => xs:string : template</p>
 * @method static apiResult|mixed setAssoc2 ( xsd\batchupdate $data=null ,string $queryString=null ) <p>request: PUT system/ldapservers/{ldapserver}/refpostoffices</p><p>template-var: ldapserver => xs:string : template</p>
 * @method static apiResult|mixed setCertificate ( mixed $data=null ,string $queryString=null ) <p>request: PUT system/ldapservers/{ldapserver}/certificate</p><p>template-var: ldapserver => xs:string : template</p>
 * @method static apiResult|mixed update ( xsd\ldapServer $data=null ,string $queryString=null ) <p>request: PUT system/ldapservers/{ldapserver}</p><p>template-var: ldapserver => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 */
class ldapserver extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"ldapserver","__isObject":true,"clearCertificate":{"paramStatic":{"ldapserver":"xs:string : template"},"paramQuery":{},"path":"system\/ldapservers\/{ldapserver}\/certificate","action":"DELETE","doc":"Remove the certificate information stored by this LDAP server and disable SSL. Note  that if the SSL certificate was stored as a file that the file will NOT be deleted.","requestType":null,"responseType":null},"create":{"paramStatic":{},"paramQuery":{},"path":"system\/ldapservers","action":"POST","doc":"Create an LDAP Server with the specified data.","requestType":"ldapServer","responseType":null,"__isStatic":"object"},"delete":{"paramStatic":{"ldapserver":"xs:string : template"},"paramQuery":{},"path":"system\/ldapservers\/{ldapserver}","action":"DELETE","doc":"Delete a specific LDAP Server given the name.","requestType":null,"responseType":null},"getCertificate":{"paramStatic":{"ldapserver":"xs:string : template"},"paramQuery":{},"path":"system\/ldapservers\/{ldapserver}\/certificate","action":"GET","doc":"Retrieve the certificate stream. This will return the binary certificate  if set on the ldap server, otherwise it will attempt to read the certificate  at the ssl cert file path.","requestType":null,"responseType":null},"getList":{"paramStatic":{},"paramQuery":{},"path":"system\/ldapservers","action":"GET","doc":"Get a list of LDAP Servers in this system.","requestType":null,"responseType":null,"__isStatic":"object"},"listAssoc":{"paramStatic":{"ldapserver":"xs:string : template"},"paramQuery":{},"path":"system\/ldapservers\/{ldapserver}\/refpostoffices","action":"GET","doc":"Get a list of LDAP Server Associations for the specified LDAP Server.","requestType":null,"responseType":null},"object":{"paramStatic":{"ldapserver":"xs:string : template"},"paramQuery":{},"path":"system\/ldapservers\/{ldapserver}","action":"GET","doc":"Get a specific LDAP Server given the name.","requestType":null,"responseType":null},"setAssoc2":{"paramStatic":{"ldapserver":"xs:string : template"},"paramQuery":{},"path":"system\/ldapservers\/{ldapserver}\/refpostoffices","action":"PUT","doc":"Update the LDAP Server Associations for the specified LDAP Server.","requestType":"batchupdate","responseType":null},"setCertificate":{"paramStatic":{"ldapserver":"xs:string : template"},"paramQuery":{},"path":"system\/ldapservers\/{ldapserver}\/certificate","action":"PUT","doc":"Set the certificate for the LDAP server","requestType":null,"responseType":null},"update":{"paramStatic":{"ldapserver":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"system\/ldapservers\/{ldapserver}","action":"PUT","doc":"Update the specified LDAP Server with the given data.","requestType":"ldapServer","responseType":null}}');
	}
	/**
	 * Remove the certificate information stored by this LDAP server and disable SSL. Note  that if the SSL certificate was stored as a file that the file will NOT be deleted.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE system/ldapservers/{ldapserver}/certificate</p>
	 * <p>template-var: ldapserver => xs:string : template</p>
	 */
	protected function _clearCertificate ($data=null,$queryString=null) { 
		return $this->doRequest ('clearCertificate',$data,$queryString);
	}
	/**
	 * Create an LDAP Server with the specified data.
	 * @internal
	 *
	 * @param apiResult|xsd\ldapServer $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/ldapservers</p>
	 */
	protected function _create ($data=null,$queryString=null) { 
		return $this->doRequest ('create',$data,$queryString);
	}
	/**
	 * Delete a specific LDAP Server given the name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE system/ldapservers/{ldapserver}</p>
	 * <p>template-var: ldapserver => xs:string : template</p>
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
	 * <p>request: GET system/ldapservers/{ldapserver}/certificate</p>
	 * <p>template-var: ldapserver => xs:string : template</p>
	 */
	protected function _getCertificate ($data=null,$queryString=null) { 
		return $this->doRequest ('getCertificate',$data,$queryString);
	}
	/**
	 * Get a list of LDAP Servers in this system.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/ldapservers</p>
	 */
	protected function _getList ($data=null,$queryString=null) { 
		return $this->doRequest ('getList',$data,$queryString);
	}
	/**
	 * Get a list of LDAP Server Associations for the specified LDAP Server.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/ldapservers/{ldapserver}/refpostoffices</p>
	 * <p>template-var: ldapserver => xs:string : template</p>
	 */
	protected function _listAssoc ($data=null,$queryString=null) { 
		return $this->doRequest ('listAssoc',$data,$queryString);
	}
	/**
	 * Get a specific LDAP Server given the name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/ldapservers/{ldapserver}</p>
	 * <p>template-var: ldapserver => xs:string : template</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Update the LDAP Server Associations for the specified LDAP Server.
	 * @internal
	 *
	 * @param apiResult|xsd\batchupdate $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT system/ldapservers/{ldapserver}/refpostoffices</p>
	 * <p>template-var: ldapserver => xs:string : template</p>
	 */
	protected function _setAssoc2 ($data=null,$queryString=null) { 
		return $this->doRequest ('setAssoc2',$data,$queryString);
	}
	/**
	 * Set the certificate for the LDAP server
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT system/ldapservers/{ldapserver}/certificate</p>
	 * <p>template-var: ldapserver => xs:string : template</p>
	 */
	protected function _setCertificate ($data=null,$queryString=null) { 
		return $this->doRequest ('setCertificate',$data,$queryString);
	}
	/**
	 * Update the specified LDAP Server with the given data.
	 * @internal
	 *
	 * @param apiResult|xsd\ldapServer $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT system/ldapservers/{ldapserver}</p>
	 * <p>template-var: ldapserver => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _update ($data=null,$queryString=null) { 
		return $this->doRequest ('update',$data,$queryString);
	}
}