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
 * dynamic abstraction for gw-class domain
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed clearAddressBookLabel ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/addressbook/labels/{field}</p><p>template-var: field => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed clearAdministrator ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/administrator</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed create ( xsd\domain $data=null ,string $queryString=null ) <p>request: POST domains</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|xsd\warnings delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}</p><p>template-var: domain => xs:string : template</p><p>query-String: deleteFiles => xs:boolean : query</p>
 * @method static apiResult|mixed deleteLink ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/links/{link}</p><p>template-var: domain => xs:string : template</p><p>template-var: link => xs:string : template</p>
 * @method static apiResult|mixed getAddressBookFields ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/addressbook/fields</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed getAddressBookLabels ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/addressbook/labels</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed getAddressBookView ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/addressbook/view</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed getAdministrator ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/administrator</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed getAvailableAttributes ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/attributes</p>
 * @method static apiResult|mixed getClientOptions ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/clientoptions</p><p>template-var: domain => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 * @method static apiResult|mixed getCustomAddresses ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/customaddresses</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed getLink ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/links/{link}</p><p>template-var: domain => xs:string : template</p><p>template-var: link => xs:string : template</p>
 * @method static apiResult|mixed getList ( mixed $data=null ,string $queryString=null ) <p>request: GET domains</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|xsd\listResult getMoveRequests ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/moverequests</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed info ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/info</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed ldapLink ( xsd\dirLink $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/directorylinks</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed ldapPublish ( xsd\dirPublish $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/directorylinks/publish</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed listAccessControl ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/acl</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed listGatewaySubDirs ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/gatewaysubdirs</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed listLinks ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/links</p><p>template-var: domain => xs:string : template</p><p>query-String: direction => xs:string : query</p>
 * @method static apiResult|mixed object ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed putAddressBookView ( xsd\addressBookView $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/addressbook/view</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed putLink ( xsd\domainLink $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/links/{link}</p><p>template-var: domain => xs:string : template</p><p>template-var: link => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 * @method static apiResult|mixed replicate ( mixed $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/replicate</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed setAddressBookLabel ( xsd\addressBookField $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/addressbook/labels/{field}</p><p>template-var: field => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed setAdministrator ( xsd\administrator $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/administrator</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed setClientOptions ( xsd\clientOptions $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/clientoptions</p><p>template-var: domain => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 * @method static apiResult|mixed systemMaintenance ( xsd\maintenanceOptions $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/maintenance</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed testAddresses ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/customaddresses/test</p><p>template-var: domain => xs:string : template</p><p>query-String: testAddress => xs:string : query</p>
 * @method static apiResult|mixed update ( xsd\domain $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}</p><p>template-var: domain => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 * @method static apiResult|mixed updateAccessControl ( xsd\batchupdate $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/acl</p><p>template-var: domain => xs:string : template</p>
 */
class domain extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"domain","__isObject":true,"clearAddressBookLabel":{"paramStatic":{"field":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/addressbook\/labels\/{field}","action":"DELETE","doc":"Delete an address book label for a given field for the specified Domain.","requestType":null,"responseType":null,"__isStatic":"orphan"},"clearAdministrator":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/administrator","action":"DELETE","doc":"Clear the administrator for the specified Domain.","requestType":null,"responseType":null},"create":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{},"path":"domains","action":"POST","doc":"Create a Domain with the specified data. Note: The \"rebuild\" resource should be used to create the related domain database (wpdomain.db) after a primary or secondary domain is created.","requestType":"domain","responseType":null,"__isStatic":"object"},"delete":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{"deleteFiles":"xs:boolean : query"},"path":"domains\/{domain}","action":"DELETE","doc":"Delete the specified Domain given the name.","requestType":null,"responseType":"warnings"},"deleteLink":{"paramStatic":{"domain":"xs:string : template","link":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/links\/{link}","action":"DELETE","doc":"Update the Domain Link between the specified Domains.","requestType":null,"responseType":null,"__isStatic":"orphan"},"getAddressBookFields":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/addressbook\/fields","action":"GET","doc":"Returns the address book fields available for adding to a view. Note: This excludes admin defined fields which can only be added to a view if they have been properly mapped to a directory attribute.","requestType":null,"responseType":null},"getAddressBookLabels":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/addressbook\/labels","action":"GET","doc":"Get the address book labels defined for the specified Domain.","requestType":null,"responseType":null},"getAddressBookView":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/addressbook\/view","action":"GET","doc":"Returns the fields in the address book view for the specified Domain.","requestType":null,"responseType":null},"getAdministrator":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/administrator","action":"GET","doc":"Return the administrator for the specified Domain.","requestType":null,"responseType":null},"getAvailableAttributes":{"paramStatic":{},"paramQuery":{},"path":"domains\/attributes","action":"GET","doc":"Get all available attributes for a Domain.","requestType":null,"responseType":null,"__isStatic":"object"},"getClientOptions":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"domains\/{domain}\/clientoptions","action":"GET","doc":"Get the Client Options for the specified Domain.","requestType":null,"responseType":null},"getCustomAddresses":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/customaddresses","action":"GET","doc":"Get all Custom Addressing Rules for the specified Domain","requestType":null,"responseType":null},"getLink":{"paramStatic":{"domain":"xs:string : template","link":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/links\/{link}","action":"GET","doc":"Get the Domain Link between the specified Domains.","requestType":null,"responseType":null,"__isStatic":"orphan"},"getList":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{},"path":"domains","action":"GET","doc":"Get a list of Domains in this system. Note: Attribute filtering is supported using this query (for example: <code> ...?attribute=value<\/code>)","requestType":null,"responseType":null,"__isStatic":"object"},"getMoveRequests":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/moverequests","action":"GET","doc":"Get a list of Move User Status objects in this domain.","requestType":null,"responseType":"listResult"},"info":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/info","action":"GET","doc":"Retrieve statistical information about the specified Domain.","requestType":null,"responseType":null},"ldapLink":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/directorylinks","action":"POST","doc":"Link the users in the specified container to the directory users returned from the  LDAP search specified.","requestType":"dirLink","responseType":null},"ldapPublish":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/directorylinks\/publish","action":"POST","doc":"Publish the email address for directory linked users in this domain","requestType":"dirPublish","responseType":null,"__isStatic":"orphan"},"listAccessControl":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/acl","action":"GET","doc":"Get a list of Access Control objects for the specified Domain.","requestType":null,"responseType":null},"listGatewaySubDirs":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/gatewaysubdirs","action":"GET","doc":"List the gateway sub-directories for the specified Domain.","requestType":null,"responseType":null},"listLinks":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{"direction":"xs:string : query"},"path":"domains\/{domain}\/links","action":"GET","doc":"Get a list of Domain Links for the specified Domain. Specify a \'direction\' query parameter to read either the inbound or outbound links. If no direction is specified then all links are read (both inbound and outbound).","requestType":null,"responseType":null},"object":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}","action":"GET","doc":"Get a specific Domain given the name.","requestType":null,"responseType":null},"putAddressBookView":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/addressbook\/view","action":"PUT","doc":"Set the fields for the address book view for the specified Domain.","requestType":"addressBookView","responseType":null},"putLink":{"paramStatic":{"domain":"xs:string : template","link":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"domains\/{domain}\/links\/{link}","action":"PUT","doc":"Update the Domain Link between the specified Domains.","requestType":"domainLink","responseType":null,"__isStatic":"orphan"},"replicate":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/replicate","action":"POST","doc":"Replicate this domain through the system.","requestType":null,"responseType":null},"setAddressBookLabel":{"paramStatic":{"field":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/addressbook\/labels\/{field}","action":"PUT","doc":"Set an address book label for a given field for the specified Domain.","requestType":"addressBookField","responseType":null,"__isStatic":"orphan"},"setAdministrator":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/administrator","action":"PUT","doc":"Set the administrator for the specified Domain.","requestType":"administrator","responseType":null},"setClientOptions":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"domains\/{domain}\/clientoptions","action":"PUT","doc":"Update the Client Options for the specified Domain.","requestType":"clientOptions","responseType":null},"systemMaintenance":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/maintenance","action":"POST","doc":"Performance system maintenance on this domain","requestType":"maintenanceOptions","responseType":null},"testAddresses":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{"testAddress":"xs:string : query"},"path":"domains\/{domain}\/customaddresses\/test","action":"GET","doc":"Test the specified address using the Custom Addressing Rules associated with the specified Domain.","requestType":null,"responseType":null,"__isStatic":"orphan"},"update":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"domains\/{domain}","action":"PUT","doc":"Update the specified Domain with the given data.","requestType":"domain","responseType":null},"updateAccessControl":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/acl","action":"PUT","doc":"Update the Access Control List for the specified Domain.","requestType":"batchupdate","responseType":null}}');
	}
	/**
	 * Delete an address book label for a given field for the specified Domain.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/addressbook/labels/{field}</p>
	 * <p>template-var: field => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _clearAddressBookLabel ($data=null,$queryString=null) { 
		return $this->doRequest ('clearAddressBookLabel',$data,$queryString);
	}
	/**
	 * Clear the administrator for the specified Domain.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/administrator</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _clearAdministrator ($data=null,$queryString=null) { 
		return $this->doRequest ('clearAdministrator',$data,$queryString);
	}
	/**
	 * Create a Domain with the specified data. Note: The "rebuild" resource should be used to create the related domain database (wpdomain.db) after a primary or secondary domain is created.
	 * @internal
	 *
	 * @param apiResult|xsd\domain $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _create ($data=null,$queryString=null) { 
		return $this->doRequest ('create',$data,$queryString);
	}
	/**
	 * Delete the specified Domain given the name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\warnings
	 *
	 * <p>request: DELETE domains/{domain}</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>query-String: deleteFiles => xs:boolean : query</p>
	 */
	protected function _delete ($data=null,$queryString=null) { 
		return $this->doRequest ('delete',$data,$queryString);
	}
	/**
	 * Update the Domain Link between the specified Domains.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/links/{link}</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: link => xs:string : template</p>
	 */
	protected function _deleteLink ($data=null,$queryString=null) { 
		return $this->doRequest ('deleteLink',$data,$queryString);
	}
	/**
	 * Returns the address book fields available for adding to a view. Note: This excludes admin defined fields which can only be added to a view if they have been properly mapped to a directory attribute.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/addressbook/fields</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _getAddressBookFields ($data=null,$queryString=null) { 
		return $this->doRequest ('getAddressBookFields',$data,$queryString);
	}
	/**
	 * Get the address book labels defined for the specified Domain.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/addressbook/labels</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _getAddressBookLabels ($data=null,$queryString=null) { 
		return $this->doRequest ('getAddressBookLabels',$data,$queryString);
	}
	/**
	 * Returns the fields in the address book view for the specified Domain.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/addressbook/view</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _getAddressBookView ($data=null,$queryString=null) { 
		return $this->doRequest ('getAddressBookView',$data,$queryString);
	}
	/**
	 * Return the administrator for the specified Domain.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/administrator</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _getAdministrator ($data=null,$queryString=null) { 
		return $this->doRequest ('getAdministrator',$data,$queryString);
	}
	/**
	 * Get all available attributes for a Domain.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/attributes</p>
	 */
	protected function _getAvailableAttributes ($data=null,$queryString=null) { 
		return $this->doRequest ('getAvailableAttributes',$data,$queryString);
	}
	/**
	 * Get the Client Options for the specified Domain.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/clientoptions</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _getClientOptions ($data=null,$queryString=null) { 
		return $this->doRequest ('getClientOptions',$data,$queryString);
	}
	/**
	 * Get all Custom Addressing Rules for the specified Domain
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/customaddresses</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _getCustomAddresses ($data=null,$queryString=null) { 
		return $this->doRequest ('getCustomAddresses',$data,$queryString);
	}
	/**
	 * Get the Domain Link between the specified Domains.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/links/{link}</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: link => xs:string : template</p>
	 */
	protected function _getLink ($data=null,$queryString=null) { 
		return $this->doRequest ('getLink',$data,$queryString);
	}
	/**
	 * Get a list of Domains in this system. Note: Attribute filtering is supported using this query (for example: <code> ...?attribute=value</code>)
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains</p>
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
	 * <p>request: GET domains/{domain}/moverequests</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _getMoveRequests ($data=null,$queryString=null) { 
		return $this->doRequest ('getMoveRequests',$data,$queryString);
	}
	/**
	 * Retrieve statistical information about the specified Domain.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/info</p>
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
	 * <p>request: POST domains/{domain}/directorylinks</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _ldapLink ($data=null,$queryString=null) { 
		return $this->doRequest ('ldapLink',$data,$queryString);
	}
	/**
	 * Publish the email address for directory linked users in this domain
	 * @internal
	 *
	 * @param apiResult|xsd\dirPublish $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/directorylinks/publish</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _ldapPublish ($data=null,$queryString=null) { 
		return $this->doRequest ('ldapPublish',$data,$queryString);
	}
	/**
	 * Get a list of Access Control objects for the specified Domain.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/acl</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _listAccessControl ($data=null,$queryString=null) { 
		return $this->doRequest ('listAccessControl',$data,$queryString);
	}
	/**
	 * List the gateway sub-directories for the specified Domain.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/gatewaysubdirs</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _listGatewaySubDirs ($data=null,$queryString=null) { 
		return $this->doRequest ('listGatewaySubDirs',$data,$queryString);
	}
	/**
	 * Get a list of Domain Links for the specified Domain. Specify a 'direction' query parameter to read either the inbound or outbound links. If no direction is specified then all links are read (both inbound and outbound).
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/links</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>query-String: direction => xs:string : query</p>
	 */
	protected function _listLinks ($data=null,$queryString=null) { 
		return $this->doRequest ('listLinks',$data,$queryString);
	}
	/**
	 * Get a specific Domain given the name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Set the fields for the address book view for the specified Domain.
	 * @internal
	 *
	 * @param apiResult|xsd\addressBookView $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/addressbook/view</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _putAddressBookView ($data=null,$queryString=null) { 
		return $this->doRequest ('putAddressBookView',$data,$queryString);
	}
	/**
	 * Update the Domain Link between the specified Domains.
	 * @internal
	 *
	 * @param apiResult|xsd\domainLink $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/links/{link}</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: link => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _putLink ($data=null,$queryString=null) { 
		return $this->doRequest ('putLink',$data,$queryString);
	}
	/**
	 * Replicate this domain through the system.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/replicate</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _replicate ($data=null,$queryString=null) { 
		return $this->doRequest ('replicate',$data,$queryString);
	}
	/**
	 * Set an address book label for a given field for the specified Domain.
	 * @internal
	 *
	 * @param apiResult|xsd\addressBookField $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/addressbook/labels/{field}</p>
	 * <p>template-var: field => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _setAddressBookLabel ($data=null,$queryString=null) { 
		return $this->doRequest ('setAddressBookLabel',$data,$queryString);
	}
	/**
	 * Set the administrator for the specified Domain.
	 * @internal
	 *
	 * @param apiResult|xsd\administrator $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/administrator</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _setAdministrator ($data=null,$queryString=null) { 
		return $this->doRequest ('setAdministrator',$data,$queryString);
	}
	/**
	 * Update the Client Options for the specified Domain.
	 * @internal
	 *
	 * @param apiResult|xsd\clientOptions $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/clientoptions</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _setClientOptions ($data=null,$queryString=null) { 
		return $this->doRequest ('setClientOptions',$data,$queryString);
	}
	/**
	 * Performance system maintenance on this domain
	 * @internal
	 *
	 * @param apiResult|xsd\maintenanceOptions $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/maintenance</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _systemMaintenance ($data=null,$queryString=null) { 
		return $this->doRequest ('systemMaintenance',$data,$queryString);
	}
	/**
	 * Test the specified address using the Custom Addressing Rules associated with the specified Domain.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/customaddresses/test</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>query-String: testAddress => xs:string : query</p>
	 */
	protected function _testAddresses ($data=null,$queryString=null) { 
		return $this->doRequest ('testAddresses',$data,$queryString);
	}
	/**
	 * Update the specified Domain with the given data.
	 * @internal
	 *
	 * @param apiResult|xsd\domain $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _update ($data=null,$queryString=null) { 
		return $this->doRequest ('update',$data,$queryString);
	}
	/**
	 * Update the Access Control List for the specified Domain.
	 * @internal
	 *
	 * @param apiResult|xsd\batchupdate $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/acl</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _updateAccessControl ($data=null,$queryString=null) { 
		return $this->doRequest ('updateAccessControl',$data,$queryString);
	}
}