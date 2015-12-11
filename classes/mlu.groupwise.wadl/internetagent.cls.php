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
 * dynamic abstraction for gw-class internetagent
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed addAdministrator ( xsd\gatewayAdministrator $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/gwias/{gwia}/administrators</p><p>template-var: domain => xs:string : template</p><p>template-var: gwia => xs:string : template</p>
 * @method static apiResult|mixed addSmtpAllowException ( xsd\smtprelayexception $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/gwias/{gwia}/smtprelayallowexception</p><p>template-var: domain => xs:string : template</p><p>template-var: gwia => xs:string : template</p>
 * @method static apiResult|mixed addSmtpPreventException ( xsd\smtprelayexception $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/gwias/{gwia}/smtprelaypreventexception</p><p>template-var: domain => xs:string : template</p><p>template-var: gwia => xs:string : template</p>
 * @method static apiResult|mixed create ( xsd\internetAgent $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/gwias</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|xsd\warnings delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/gwias/{gwia}</p><p>template-var: domain => xs:string : template</p><p>template-var: gwia => xs:string : template</p><p>query-String: deleteFiles => xs:boolean : query</p>
 * @method static apiResult|xsd\sslfiles generateCert ( xsd\csrParams $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/gwias/{gwia}/sslcerts</p><p>template-var: domain => xs:string : template</p><p>template-var: gwia => xs:string : template</p><p>query-String: commit => xs:boolean : query</p>
 * @method static apiResult|mixed getList ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/gwias</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed info ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/gwias/{gwia}/info</p><p>template-var: domain => xs:string : template</p><p>template-var: gwia => xs:string : template</p>
 * @method static apiResult|mixed listAdministrators ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/gwias/{gwia}/administrators</p><p>template-var: domain => xs:string : template</p><p>template-var: gwia => xs:string : template</p>
 * @method static apiResult|mixed listAliases ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/gwias/{gwia}/aliases</p><p>template-var: domain => xs:string : template</p><p>template-var: gwia => xs:string : template</p>
 * @method static apiResult|mixed listSmtpAllowExceptions ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/gwias/{gwia}/smtprelayallowexception</p><p>template-var: domain => xs:string : template</p><p>template-var: gwia => xs:string : template</p>
 * @method static apiResult|mixed listSmtpPreventExceptions ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/gwias/{gwia}/smtprelaypreventexception</p><p>template-var: domain => xs:string : template</p><p>template-var: gwia => xs:string : template</p>
 * @method static apiResult|mixed manageAgent ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/gwias/{gwia}/manage</p><p>template-var: domain => xs:string : template</p><p>template-var: gwia => xs:string : template</p><p>query-String: command => xs:string : query</p>
 * @method static apiResult|mixed object ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/gwias/{gwia}</p><p>template-var: domain => xs:string : template</p><p>template-var: gwia => xs:string : template</p>
 * @method static apiResult|mixed recover ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/gwias/{gwia}/recoverDb</p><p>template-var: domain => xs:string : template</p><p>template-var: gwia => xs:string : template</p>
 * @method static apiResult|mixed removeAdministrator ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/gwias/{gwia}/administrators/{id}</p><p>template-var: domain => xs:string : template</p><p>template-var: gwia => xs:string : template</p><p>template-var: id => xs:string : template</p>
 * @method static apiResult|mixed removeSmtpAllowException ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/gwias/{gwia}/smtprelayallowexception/{fromUrl}/{toUrl}</p><p>template-var: toUrl => xs:string : template</p><p>template-var: fromUrl => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: exceptionId => xs:string : template</p><p>template-var: gwia => xs:string : template</p>
 * @method static apiResult|mixed removeSmtpPreventException ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/gwias/{gwia}/smtprelaypreventexception/{fromUrl}/{toUrl}</p><p>template-var: toUrl => xs:string : template</p><p>template-var: fromUrl => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: gwia => xs:string : template</p>
 * @method static apiResult|mixed status ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/gwias/{gwia}/status</p><p>template-var: domain => xs:string : template</p><p>template-var: gwia => xs:string : template</p>
 * @method static apiResult|mixed test ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/gwias/{gwia}/testAccessControl/{id}</p><p>template-var: domain => xs:string : template</p><p>template-var: gwia => xs:string : template</p><p>template-var: id => xs:string : template</p>
 * @method static apiResult|mixed update ( xsd\internetAgent $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/gwias/{gwia}</p><p>template-var: domain => xs:string : template</p><p>template-var: gwia => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 * @method static apiResult|mixed updateAdministrator ( xsd\gatewayAdministrator $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/gwias/{gwia}/administrators/{id}</p><p>template-var: domain => xs:string : template</p><p>template-var: gwia => xs:string : template</p><p>template-var: id => xs:string : template</p>
 * @method static apiResult|mixed validate ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/gwias/{gwia}/validateDb</p><p>template-var: domain => xs:string : template</p><p>template-var: gwia => xs:string : template</p>
 */
class internetagent extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"internetagent","__isObject":true,"addAdministrator":{"paramStatic":{"domain":"xs:string : template","gwia":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/gwias\/{gwia}\/administrators","action":"POST","doc":"Add a new administrator to the specified Gateway.","requestType":"gatewayAdministrator","responseType":null},"addSmtpAllowException":{"paramStatic":{"domain":"xs:string : template","gwia":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/gwias\/{gwia}\/smtprelayallowexception","action":"POST","doc":"Add a new exception to the SMTP Relay Allow Exception list.","requestType":"smtprelayexception","responseType":null},"addSmtpPreventException":{"paramStatic":{"domain":"xs:string : template","gwia":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/gwias\/{gwia}\/smtprelaypreventexception","action":"POST","doc":"Add a new exception to the SMTP Relay Prevent Exception list.","requestType":"smtprelayexception","responseType":null},"create":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/gwias","action":"POST","doc":"Create a GWIA with the specified data.","requestType":"internetAgent","responseType":null,"__isStatic":"object"},"delete":{"paramStatic":{"domain":"xs:string : template","gwia":"xs:string : template"},"paramQuery":{"deleteFiles":"xs:boolean : query"},"path":"domains\/{domain}\/gwias\/{gwia}","action":"DELETE","doc":"Delete a specific GWIA given the name.","requestType":null,"responseType":"warnings"},"generateCert":{"paramStatic":{"domain":"xs:string : template","gwia":"xs:string : template"},"paramQuery":{"commit":"xs:boolean : query"},"path":"domains\/{domain}\/gwias\/{gwia}\/sslcerts","action":"POST","doc":"Generate new SSL cert for this GWIA using the admin service certificate authority.","requestType":"csrParams","responseType":"sslfiles"},"getList":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/gwias","action":"GET","doc":"Get a list of Internet Agents in the specified Domain.  Note: Attribute filtering is supported using this query (for example: <code> ...?attribute=value<\/code>)","requestType":null,"responseType":null,"__isStatic":"object"},"info":{"paramStatic":{"domain":"xs:string : template","gwia":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/gwias\/{gwia}\/info","action":"GET","doc":"Retrieve statistical information about the specified Domain.","requestType":null,"responseType":null},"listAdministrators":{"paramStatic":{"domain":"xs:string : template","gwia":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/gwias\/{gwia}\/administrators","action":"GET","doc":"Get a list of administrators for the specified GWIA","requestType":null,"responseType":null},"listAliases":{"paramStatic":{"domain":"xs:string : template","gwia":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/gwias\/{gwia}\/aliases","action":"GET","doc":"Get a list of gateway aliases associated with the specified GWIA.","requestType":null,"responseType":null},"listSmtpAllowExceptions":{"paramStatic":{"domain":"xs:string : template","gwia":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/gwias\/{gwia}\/smtprelayallowexception","action":"GET","doc":"Get a list of SMTP Relay Allow Exceptions for the specified GWIA.","requestType":null,"responseType":null},"listSmtpPreventExceptions":{"paramStatic":{"domain":"xs:string : template","gwia":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/gwias\/{gwia}\/smtprelaypreventexception","action":"GET","doc":"Get a list of SMTP Relay Prevent Exceptions for the specified GWIA.","requestType":null,"responseType":null},"manageAgent":{"paramStatic":{"domain":"xs:string : template","gwia":"xs:string : template"},"paramQuery":{"command":"xs:string : query"},"path":"domains\/{domain}\/gwias\/{gwia}\/manage","action":"GET","doc":"Send a management command to a specific MTA.","requestType":null,"responseType":null},"object":{"paramStatic":{"domain":"xs:string : template","gwia":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/gwias\/{gwia}","action":"GET","doc":"Get a specific GWIA given the name and the Domain name.","requestType":null,"responseType":null},"recover":{"paramStatic":{"domain":"xs:string : template","gwia":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/gwias\/{gwia}\/recoverDb","action":"GET","doc":"Recover the Access Control database for the specified gwia. This command will recover the database in place.","requestType":null,"responseType":null},"removeAdministrator":{"paramStatic":{"domain":"xs:string : template","gwia":"xs:string : template","id":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/gwias\/{gwia}\/administrators\/{id}","action":"DELETE","doc":"Remove an administrator from the specified GWIA.","requestType":null,"responseType":null,"__isStatic":"orphan"},"removeSmtpAllowException":{"paramStatic":{"toUrl":"xs:string : template","fromUrl":"xs:string : template","domain":"xs:string : template","exceptionId":"xs:string : template","gwia":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/gwias\/{gwia}\/smtprelayallowexception\/{fromUrl}\/{toUrl}","action":"DELETE","doc":"Remove an exception from the SMTP Relay Allow Exception list.","requestType":null,"responseType":null,"__isStatic":"orphan"},"removeSmtpPreventException":{"paramStatic":{"toUrl":"xs:string : template","fromUrl":"xs:string : template","domain":"xs:string : template","gwia":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/gwias\/{gwia}\/smtprelaypreventexception\/{fromUrl}\/{toUrl}","action":"DELETE","doc":"Remove an exception from the SMTP Relay Prevent Exception list.","requestType":null,"responseType":null,"__isStatic":"orphan"},"status":{"paramStatic":{"domain":"xs:string : template","gwia":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/gwias\/{gwia}\/status","action":"GET","doc":"Get the HTTP Status for this GWIA","requestType":null,"responseType":null},"test":{"paramStatic":{"domain":"xs:string : template","gwia":"xs:string : template","id":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/gwias\/{gwia}\/testAccessControl\/{id}","action":"GET","doc":"Evaluate the Internet Agent Access Control settings for the specified object.","requestType":null,"responseType":null},"update":{"paramStatic":{"domain":"xs:string : template","gwia":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"domains\/{domain}\/gwias\/{gwia}","action":"PUT","doc":"Update a GWIA with the given data.","requestType":"internetAgent","responseType":null},"updateAdministrator":{"paramStatic":{"domain":"xs:string : template","gwia":"xs:string : template","id":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/gwias\/{gwia}\/administrators\/{id}","action":"PUT","doc":"Remove an administrator from the specified GWIA","requestType":"gatewayAdministrator","responseType":null,"__isStatic":"orphan"},"validate":{"paramStatic":{"domain":"xs:string : template","gwia":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/gwias\/{gwia}\/validateDb","action":"GET","doc":"Validate the Access Control database for the specified gwia.","requestType":null,"responseType":null}}');
	}
	/**
	 * Add a new administrator to the specified Gateway.
	 * @internal
	 *
	 * @param apiResult|xsd\gatewayAdministrator $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/gwias/{gwia}/administrators</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: gwia => xs:string : template</p>
	 */
	protected function _addAdministrator ($data=null,$queryString=null) { 
		return $this->doRequest ('addAdministrator',$data,$queryString);
	}
	/**
	 * Add a new exception to the SMTP Relay Allow Exception list.
	 * @internal
	 *
	 * @param apiResult|xsd\smtprelayexception $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/gwias/{gwia}/smtprelayallowexception</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: gwia => xs:string : template</p>
	 */
	protected function _addSmtpAllowException ($data=null,$queryString=null) { 
		return $this->doRequest ('addSmtpAllowException',$data,$queryString);
	}
	/**
	 * Add a new exception to the SMTP Relay Prevent Exception list.
	 * @internal
	 *
	 * @param apiResult|xsd\smtprelayexception $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/gwias/{gwia}/smtprelaypreventexception</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: gwia => xs:string : template</p>
	 */
	protected function _addSmtpPreventException ($data=null,$queryString=null) { 
		return $this->doRequest ('addSmtpPreventException',$data,$queryString);
	}
	/**
	 * Create a GWIA with the specified data.
	 * @internal
	 *
	 * @param apiResult|xsd\internetAgent $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/gwias</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _create ($data=null,$queryString=null) { 
		return $this->doRequest ('create',$data,$queryString);
	}
	/**
	 * Delete a specific GWIA given the name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\warnings
	 *
	 * <p>request: DELETE domains/{domain}/gwias/{gwia}</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: gwia => xs:string : template</p>
	 * <p>query-String: deleteFiles => xs:boolean : query</p>
	 */
	protected function _delete ($data=null,$queryString=null) { 
		return $this->doRequest ('delete',$data,$queryString);
	}
	/**
	 * Generate new SSL cert for this GWIA using the admin service certificate authority.
	 * @internal
	 *
	 * @param apiResult|xsd\csrParams $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\sslfiles
	 *
	 * <p>request: POST domains/{domain}/gwias/{gwia}/sslcerts</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: gwia => xs:string : template</p>
	 * <p>query-String: commit => xs:boolean : query</p>
	 */
	protected function _generateCert ($data=null,$queryString=null) { 
		return $this->doRequest ('generateCert',$data,$queryString);
	}
	/**
	 * Get a list of Internet Agents in the specified Domain.  Note: Attribute filtering is supported using this query (for example: <code> ...?attribute=value</code>)
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/gwias</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _getList ($data=null,$queryString=null) { 
		return $this->doRequest ('getList',$data,$queryString);
	}
	/**
	 * Retrieve statistical information about the specified Domain.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/gwias/{gwia}/info</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: gwia => xs:string : template</p>
	 */
	protected function _info ($data=null,$queryString=null) { 
		return $this->doRequest ('info',$data,$queryString);
	}
	/**
	 * Get a list of administrators for the specified GWIA
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/gwias/{gwia}/administrators</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: gwia => xs:string : template</p>
	 */
	protected function _listAdministrators ($data=null,$queryString=null) { 
		return $this->doRequest ('listAdministrators',$data,$queryString);
	}
	/**
	 * Get a list of gateway aliases associated with the specified GWIA.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/gwias/{gwia}/aliases</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: gwia => xs:string : template</p>
	 */
	protected function _listAliases ($data=null,$queryString=null) { 
		return $this->doRequest ('listAliases',$data,$queryString);
	}
	/**
	 * Get a list of SMTP Relay Allow Exceptions for the specified GWIA.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/gwias/{gwia}/smtprelayallowexception</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: gwia => xs:string : template</p>
	 */
	protected function _listSmtpAllowExceptions ($data=null,$queryString=null) { 
		return $this->doRequest ('listSmtpAllowExceptions',$data,$queryString);
	}
	/**
	 * Get a list of SMTP Relay Prevent Exceptions for the specified GWIA.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/gwias/{gwia}/smtprelaypreventexception</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: gwia => xs:string : template</p>
	 */
	protected function _listSmtpPreventExceptions ($data=null,$queryString=null) { 
		return $this->doRequest ('listSmtpPreventExceptions',$data,$queryString);
	}
	/**
	 * Send a management command to a specific MTA.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/gwias/{gwia}/manage</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: gwia => xs:string : template</p>
	 * <p>query-String: command => xs:string : query</p>
	 */
	protected function _manageAgent ($data=null,$queryString=null) { 
		return $this->doRequest ('manageAgent',$data,$queryString);
	}
	/**
	 * Get a specific GWIA given the name and the Domain name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/gwias/{gwia}</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: gwia => xs:string : template</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Recover the Access Control database for the specified gwia. This command will recover the database in place.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/gwias/{gwia}/recoverDb</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: gwia => xs:string : template</p>
	 */
	protected function _recover ($data=null,$queryString=null) { 
		return $this->doRequest ('recover',$data,$queryString);
	}
	/**
	 * Remove an administrator from the specified GWIA.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/gwias/{gwia}/administrators/{id}</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: gwia => xs:string : template</p>
	 * <p>template-var: id => xs:string : template</p>
	 */
	protected function _removeAdministrator ($data=null,$queryString=null) { 
		return $this->doRequest ('removeAdministrator',$data,$queryString);
	}
	/**
	 * Remove an exception from the SMTP Relay Allow Exception list.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/gwias/{gwia}/smtprelayallowexception/{fromUrl}/{toUrl}</p>
	 * <p>template-var: toUrl => xs:string : template</p>
	 * <p>template-var: fromUrl => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: exceptionId => xs:string : template</p>
	 * <p>template-var: gwia => xs:string : template</p>
	 */
	protected function _removeSmtpAllowException ($data=null,$queryString=null) { 
		return $this->doRequest ('removeSmtpAllowException',$data,$queryString);
	}
	/**
	 * Remove an exception from the SMTP Relay Prevent Exception list.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/gwias/{gwia}/smtprelaypreventexception/{fromUrl}/{toUrl}</p>
	 * <p>template-var: toUrl => xs:string : template</p>
	 * <p>template-var: fromUrl => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: gwia => xs:string : template</p>
	 */
	protected function _removeSmtpPreventException ($data=null,$queryString=null) { 
		return $this->doRequest ('removeSmtpPreventException',$data,$queryString);
	}
	/**
	 * Get the HTTP Status for this GWIA
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/gwias/{gwia}/status</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: gwia => xs:string : template</p>
	 */
	protected function _status ($data=null,$queryString=null) { 
		return $this->doRequest ('status',$data,$queryString);
	}
	/**
	 * Evaluate the Internet Agent Access Control settings for the specified object.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/gwias/{gwia}/testAccessControl/{id}</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: gwia => xs:string : template</p>
	 * <p>template-var: id => xs:string : template</p>
	 */
	protected function _test ($data=null,$queryString=null) { 
		return $this->doRequest ('test',$data,$queryString);
	}
	/**
	 * Update a GWIA with the given data.
	 * @internal
	 *
	 * @param apiResult|xsd\internetAgent $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/gwias/{gwia}</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: gwia => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _update ($data=null,$queryString=null) { 
		return $this->doRequest ('update',$data,$queryString);
	}
	/**
	 * Remove an administrator from the specified GWIA
	 * @internal
	 *
	 * @param apiResult|xsd\gatewayAdministrator $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/gwias/{gwia}/administrators/{id}</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: gwia => xs:string : template</p>
	 * <p>template-var: id => xs:string : template</p>
	 */
	protected function _updateAdministrator ($data=null,$queryString=null) { 
		return $this->doRequest ('updateAdministrator',$data,$queryString);
	}
	/**
	 * Validate the Access Control database for the specified gwia.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/gwias/{gwia}/validateDb</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: gwia => xs:string : template</p>
	 */
	protected function _validate ($data=null,$queryString=null) { 
		return $this->doRequest ('validate',$data,$queryString);
	}
}