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
 * dynamic abstraction for gw-class postoffice
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed addAlias ( xsd\gatewayAlias $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/aliases</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed create ( xsd\postOffice $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|xsd\warnings delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/postoffices/{postoffice}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>query-String: deleteFiles => xs:boolean : query</p>
 * @method static apiResult|mixed getClientOptions ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/clientoptions</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 * @method static apiResult|mixed getList ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|xsd\listResult getMoveRequests ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/moverequests</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed gwcheck ( xsd\checkOptions $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/gwcheck</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed incrementClientUpdateBumpNumber ( mixed $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/bumpclientupdate</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed info ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/info</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed ldapLink ( xsd\dirLink $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/directorylinks</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed ldapPublish ( xsd\dirPublish $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/directorylinks/publish</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed listAccessControl ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/acl</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed listAliases ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/aliases</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed listldapservers ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/refldapservers</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|xsd\checkOptions loadCheckOptions ( mixed $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/gwcheck/load</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed object ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed removeAlias ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/postoffices/{postoffice}/aliases/{type}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: type => xs:string : template</p>
 * @method static apiResult|mixed rename ( xsd\renameRequest $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/rename</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed replicate ( mixed $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/replicate</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed saveCheckOptions ( xsd\checkOptions $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/gwcheck/save</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed setAssoc2 ( xsd\batchupdate $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/refldapservers</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed setClientOptions ( xsd\clientOptions $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/clientoptions</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 * @method static apiResult|mixed setTimeStamp ( xsd\gwtimestamp $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/timestamp</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed systemMaintenance ( xsd\maintenanceOptions $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/maintenance</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed update ( xsd\postOffice $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 * @method static apiResult|mixed updateAccessControl ( xsd\batchupdate $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/acl</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 */
class postoffice extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"postoffice","__isObject":true,"addAlias":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/aliases","action":"POST","doc":"Add a new Gateway Alias for this Post Office.","requestType":"gatewayAlias","responseType":null},"create":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices","action":"POST","doc":"Create a Post Office with the specified data. Note: The \"rebuild\" resource should be used to create the related post office database (wphost.db) afterwards.","requestType":"postOffice","responseType":null,"__isStatic":"object"},"delete":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{"deleteFiles":"xs:boolean : query"},"path":"domains\/{domain}\/postoffices\/{postoffice}","action":"DELETE","doc":"Delete a specific Post Office given the name.","requestType":null,"responseType":"warnings"},"getClientOptions":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"domains\/{domain}\/postoffices\/{postoffice}\/clientoptions","action":"GET","doc":"Get the Client Options for a specific Post Office.","requestType":null,"responseType":null},"getList":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices","action":"GET","doc":"Get a list of PostOffices in a specific Domain. Note: Attribute filtering is supported using this query (for example: <code> ...?attribute=value<\/code>)","requestType":null,"responseType":null,"__isStatic":"object"},"getMoveRequests":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/moverequests","action":"GET","doc":"Get a list of Move User Status objects in this domain.","requestType":null,"responseType":"listResult"},"gwcheck":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/gwcheck","action":"POST","doc":"Perform mailbox maintenance for this Post Office.","requestType":"checkOptions","responseType":null},"incrementClientUpdateBumpNumber":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/bumpclientupdate","action":"POST","doc":"Bump the version used by GroupWise to trigger a check for new versions of client software.","requestType":null,"responseType":null},"info":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/info","action":"GET","doc":"Retrieve statistical information about the specified Post Office.","requestType":null,"responseType":null},"ldapLink":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/directorylinks","action":"POST","doc":"Link the users in the specified container to the directory users returned from the  LDAP search specified.","requestType":"dirLink","responseType":null},"ldapPublish":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/directorylinks\/publish","action":"POST","doc":"Publish the email address for directory linked users in this post office","requestType":"dirPublish","responseType":null,"__isStatic":"orphan"},"listAccessControl":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/acl","action":"GET","doc":"Get a list of Access Control objects for the specified Post Office","requestType":null,"responseType":null},"listAliases":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/aliases","action":"GET","doc":"Get a list of Gateway Aliases for the specified Post Office.","requestType":null,"responseType":null},"listldapservers":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/refldapservers","action":"GET","doc":"Get a list of all the LDAP Server Associations for a specific Post Office.","requestType":null,"responseType":null},"loadCheckOptions":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/gwcheck\/load","action":"POST","doc":"Convert mailbox maintenance options in XML file format into a REST check options object.","requestType":null,"responseType":"checkOptions","__isStatic":"orphan"},"object":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}","action":"GET","doc":"Get a specific Post Office given the name.","requestType":null,"responseType":null},"removeAlias":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","type":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/aliases\/{type}","action":"DELETE","doc":"Remove a Gateway Alias specified by the alias type from the specified Post Office.","requestType":null,"responseType":null,"__isStatic":"orphan"},"rename":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/rename","action":"POST","doc":"Rename a single user, resource or group belonging to this post office. The rename request must contain the current object id of the object and the new Id for the object.","requestType":"renameRequest","responseType":null},"replicate":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/replicate","action":"POST","doc":"Replicate this post office through the system.","requestType":null,"responseType":null},"saveCheckOptions":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/gwcheck\/save","action":"POST","doc":"Convert mailbox maintenance REST check options object into an options XML file suitable for use with GwCheck.","requestType":"checkOptions","responseType":null,"__isStatic":"orphan"},"setAssoc2":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/refldapservers","action":"PUT","doc":"Update the LDAP Server Associations for the specified Post Office. Add \/ Remove LDAP Server associations. Two arrays of LDAP Server ID strings, one for adding and one for removing LDAP association objects.","requestType":"batchupdate","responseType":null},"setClientOptions":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"domains\/{domain}\/postoffices\/{postoffice}\/clientoptions","action":"PUT","doc":"Update the Client Options for a specific Post Office.","requestType":"clientOptions","responseType":null},"setTimeStamp":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/timestamp","action":"PUT","doc":"Set a Time Stamp value for all the Users on a Post Office.","requestType":"gwtimestamp","responseType":null},"systemMaintenance":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/maintenance","action":"POST","doc":"Performance system maintenance on this post office","requestType":"maintenanceOptions","responseType":null},"update":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"domains\/{domain}\/postoffices\/{postoffice}","action":"PUT","doc":"Update the specified Post Office with the given data.","requestType":"postOffice","responseType":null},"updateAccessControl":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/acl","action":"PUT","doc":"Update the Access Control List for the specified Post Office.","requestType":"batchupdate","responseType":null}}');
	}
	/**
	 * Add a new Gateway Alias for this Post Office.
	 * @internal
	 *
	 * @param apiResult|xsd\gatewayAlias $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/aliases</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _addAlias ($data=null,$queryString=null) { 
		return $this->doRequest ('addAlias',$data,$queryString);
	}
	/**
	 * Create a Post Office with the specified data. Note: The "rebuild" resource should be used to create the related post office database (wphost.db) afterwards.
	 * @internal
	 *
	 * @param apiResult|xsd\postOffice $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _create ($data=null,$queryString=null) { 
		return $this->doRequest ('create',$data,$queryString);
	}
	/**
	 * Delete a specific Post Office given the name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\warnings
	 *
	 * <p>request: DELETE domains/{domain}/postoffices/{postoffice}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>query-String: deleteFiles => xs:boolean : query</p>
	 */
	protected function _delete ($data=null,$queryString=null) { 
		return $this->doRequest ('delete',$data,$queryString);
	}
	/**
	 * Get the Client Options for a specific Post Office.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/clientoptions</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _getClientOptions ($data=null,$queryString=null) { 
		return $this->doRequest ('getClientOptions',$data,$queryString);
	}
	/**
	 * Get a list of PostOffices in a specific Domain. Note: Attribute filtering is supported using this query (for example: <code> ...?attribute=value</code>)
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _getList ($data=null,$queryString=null) { 
		return $this->doRequest ('getList',$data,$queryString);
	}
	/**
	 * Get a list of Move User Status objects in this domain.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\listResult
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/moverequests</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _getMoveRequests ($data=null,$queryString=null) { 
		return $this->doRequest ('getMoveRequests',$data,$queryString);
	}
	/**
	 * Perform mailbox maintenance for this Post Office.
	 * @internal
	 *
	 * @param apiResult|xsd\checkOptions $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/gwcheck</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _gwcheck ($data=null,$queryString=null) { 
		return $this->doRequest ('gwcheck',$data,$queryString);
	}
	/**
	 * Bump the version used by GroupWise to trigger a check for new versions of client software.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/bumpclientupdate</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _incrementClientUpdateBumpNumber ($data=null,$queryString=null) { 
		return $this->doRequest ('incrementClientUpdateBumpNumber',$data,$queryString);
	}
	/**
	 * Retrieve statistical information about the specified Post Office.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/info</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _info ($data=null,$queryString=null) { 
		return $this->doRequest ('info',$data,$queryString);
	}
	/**
	 * Link the users in the specified container to the directory users returned from the  LDAP search specified.
	 * @internal
	 *
	 * @param apiResult|xsd\dirLink $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/directorylinks</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _ldapLink ($data=null,$queryString=null) { 
		return $this->doRequest ('ldapLink',$data,$queryString);
	}
	/**
	 * Publish the email address for directory linked users in this post office
	 * @internal
	 *
	 * @param apiResult|xsd\dirPublish $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/directorylinks/publish</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _ldapPublish ($data=null,$queryString=null) { 
		return $this->doRequest ('ldapPublish',$data,$queryString);
	}
	/**
	 * Get a list of Access Control objects for the specified Post Office
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/acl</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _listAccessControl ($data=null,$queryString=null) { 
		return $this->doRequest ('listAccessControl',$data,$queryString);
	}
	/**
	 * Get a list of Gateway Aliases for the specified Post Office.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/aliases</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _listAliases ($data=null,$queryString=null) { 
		return $this->doRequest ('listAliases',$data,$queryString);
	}
	/**
	 * Get a list of all the LDAP Server Associations for a specific Post Office.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/refldapservers</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _listldapservers ($data=null,$queryString=null) { 
		return $this->doRequest ('listldapservers',$data,$queryString);
	}
	/**
	 * Convert mailbox maintenance options in XML file format into a REST check options object.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\checkOptions
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/gwcheck/load</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _loadCheckOptions ($data=null,$queryString=null) { 
		return $this->doRequest ('loadCheckOptions',$data,$queryString);
	}
	/**
	 * Get a specific Post Office given the name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Remove a Gateway Alias specified by the alias type from the specified Post Office.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/postoffices/{postoffice}/aliases/{type}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: type => xs:string : template</p>
	 */
	protected function _removeAlias ($data=null,$queryString=null) { 
		return $this->doRequest ('removeAlias',$data,$queryString);
	}
	/**
	 * Rename a single user, resource or group belonging to this post office. The rename request must contain the current object id of the object and the new Id for the object.
	 * @internal
	 *
	 * @param apiResult|xsd\renameRequest $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/rename</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _rename ($data=null,$queryString=null) { 
		return $this->doRequest ('rename',$data,$queryString);
	}
	/**
	 * Replicate this post office through the system.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/replicate</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _replicate ($data=null,$queryString=null) { 
		return $this->doRequest ('replicate',$data,$queryString);
	}
	/**
	 * Convert mailbox maintenance REST check options object into an options XML file suitable for use with GwCheck.
	 * @internal
	 *
	 * @param apiResult|xsd\checkOptions $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/gwcheck/save</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _saveCheckOptions ($data=null,$queryString=null) { 
		return $this->doRequest ('saveCheckOptions',$data,$queryString);
	}
	/**
	 * Update the LDAP Server Associations for the specified Post Office. Add / Remove LDAP Server associations. Two arrays of LDAP Server ID strings, one for adding and one for removing LDAP association objects.
	 * @internal
	 *
	 * @param apiResult|xsd\batchupdate $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/refldapservers</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _setAssoc2 ($data=null,$queryString=null) { 
		return $this->doRequest ('setAssoc2',$data,$queryString);
	}
	/**
	 * Update the Client Options for a specific Post Office.
	 * @internal
	 *
	 * @param apiResult|xsd\clientOptions $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/clientoptions</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _setClientOptions ($data=null,$queryString=null) { 
		return $this->doRequest ('setClientOptions',$data,$queryString);
	}
	/**
	 * Set a Time Stamp value for all the Users on a Post Office.
	 * @internal
	 *
	 * @param apiResult|xsd\gwtimestamp $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/timestamp</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _setTimeStamp ($data=null,$queryString=null) { 
		return $this->doRequest ('setTimeStamp',$data,$queryString);
	}
	/**
	 * Performance system maintenance on this post office
	 * @internal
	 *
	 * @param apiResult|xsd\maintenanceOptions $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/maintenance</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _systemMaintenance ($data=null,$queryString=null) { 
		return $this->doRequest ('systemMaintenance',$data,$queryString);
	}
	/**
	 * Update the specified Post Office with the given data.
	 * @internal
	 *
	 * @param apiResult|xsd\postOffice $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _update ($data=null,$queryString=null) { 
		return $this->doRequest ('update',$data,$queryString);
	}
	/**
	 * Update the Access Control List for the specified Post Office.
	 * @internal
	 *
	 * @param apiResult|xsd\batchupdate $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/acl</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _updateAccessControl ($data=null,$queryString=null) { 
		return $this->doRequest ('updateAccessControl',$data,$queryString);
	}
}