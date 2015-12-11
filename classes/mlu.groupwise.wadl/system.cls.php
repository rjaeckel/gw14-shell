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
 * dynamic abstraction for gw-class system
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed RecoverGwAccount ( mixed $data=null ,string $queryString=null ) <p>request: POST system/recover/{connectionid}/recover/{accountid}</p><p>template-var: accountid => xs:string : template</p><p>template-var: connectionid => xs:string : template</p>
 * @method static apiResult|mixed action ( mixed $data=null ,string $queryString=null ) <p>request: POST system/moverequests/{id}/actions</p><p>template-var: id => xs:string : template</p><p>query-String: action => xs:string : query</p>
 * @method static apiResult|mixed clearAllCompleted ( mixed $data=null ,string $queryString=null ) <p>request: DELETE system/moverequests</p>
 * @method static apiResult|mixed clearKeyShieldSsoCertificateAuthority ( mixed $data=null ,string $queryString=null ) <p>request: DELETE system/keyshieldsso/ca</p>
 * @method static apiResult|mixed clearSingle ( mixed $data=null ,string $queryString=null ) <p>request: DELETE system/moverequests/{id}</p><p>template-var: id => xs:string : template</p><p>query-String: clearincomplete => xs:string : query</p>
 * @method static apiResult|mixed connectedDomain ( mixed $data=null ,string $queryString=null ) <p>request: GET system/connecteddomain</p>
 * @method static apiResult|mixed createRecoverConnection ( xsd\gwpath $data=null ,string $queryString=null ) <p>request: POST system/recover</p>
 * @method static apiResult|mixed createRecoverConnectionFromFile ( mixed $data=null ,string $queryString=null ) <p>request: POST system/recover</p>
 * @method static apiResult|mixed crl ( mixed $data=null ,string $queryString=null ) <p>request: GET system/ca/crl</p>
 * @method static apiResult|mixed deleteRecoverConnection ( mixed $data=null ,string $queryString=null ) <p>request: DELETE system/recover/{connectionid}</p><p>template-var: connectionid => xs:string : template</p>
 * @method static apiResult|xsd\listResult expired ( mixed $data=null ,string $queryString=null ) <p>request: GET system/expired</p>
 * @method static apiResult|mixed get ( mixed $data=null ,string $queryString=null ) <p>request: GET system/ca</p>
 * @method static apiResult|mixed getAvailableCoumns ( mixed $data=null ,string $queryString=null ) <p>request: GET system/list/columns/{listId}</p><p>template-var: listId => xs:int : template</p>
 * @method static apiResult|mixed getDefaultTimezones ( mixed $data=null ,string $queryString=null ) <p>request: GET system/defaulttimezones</p>
 * @method static apiResult|mixed getIssuedCert ( mixed $data=null ,string $queryString=null ) <p>request: GET system/ca/issued/{serial}</p><p>template-var: serial => xs:string : template</p>
 * @method static apiResult|mixed getKeyShieldSsoCertificateAuthority ( mixed $data=null ,string $queryString=null ) <p>request: GET system/keyshieldsso/ca</p>
 * @method static apiResult|xsd\keyshieldsso getKeyShieldSsoLinks ( mixed $data=null ,string $queryString=null ) <p>request: GET system/keyshieldsso</p>
 * @method static apiResult|mixed getLanguages ( mixed $data=null ,string $queryString=null ) <p>request: GET system/languages</p>
 * @method static apiResult|xsd\listResult getList ( mixed $data=null ,string $queryString=null ) <p>request: GET system/moverequests</p>
 * @method static apiResult|mixed getLocaleLanguageDescription ( mixed $data=null ,string $queryString=null ) <p>request: GET system/localelanguagedescription</p>
 * @method static apiResult|xsd\listResult getPending ( mixed $data=null ,string $queryString=null ) <p>request: GET system/pending</p>
 * @method static apiResult|xsd\listResult getPendingItems ( mixed $data=null ,string $queryString=null ) <p>request: GET system/moverequests/{id}/pending</p><p>template-var: id => xs:string : template</p>
 * @method static apiResult|mixed getPlatforms ( mixed $data=null ,string $queryString=null ) <p>request: GET system/platforms</p>
 * @method static apiResult|xsd\objectAttributes getRecoverRawObject ( mixed $data=null ,string $queryString=null ) <p>request: GET system/recover/{connectionid}/diagnosticsobject/{id}</p><p>template-var: connectionid => xs:string : template</p><p>template-var: id => xs:string : template</p>
 * @method static apiResult|mixed getRecoverResource ( mixed $data=null ,string $queryString=null ) <p>request: GET system/recover/{connectionid}/resources/{resource}</p><p>template-var: resource => xs:string : template</p><p>template-var: connectionid => xs:string : template</p>
 * @method static apiResult|mixed getRecoverResources ( mixed $data=null ,string $queryString=null ) <p>request: GET system/recover/{connectionid}/resources</p><p>template-var: connectionid => xs:string : template</p>
 * @method static apiResult|mixed getRecoverUser ( mixed $data=null ,string $queryString=null ) <p>request: GET system/recover/{connectionid}/users/{user}</p><p>template-var: connectionid => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|mixed getRecoverUsers ( mixed $data=null ,string $queryString=null ) <p>request: GET system/recover/{connectionid}/users</p><p>template-var: connectionid => xs:string : template</p>
 * @method static apiResult|mixed info ( mixed $data=null ,string $queryString=null ) <p>request: GET system/info</p>
 * @method static apiResult|mixed issue ( mixed $data=null ,string $queryString=null ) <p>request: POST system/ca</p>
 * @method static apiResult|xsd\listResult issued ( mixed $data=null ,string $queryString=null ) <p>request: GET system/ca/issued</p>
 * @method static apiResult|mixed ldapLink ( xsd\dirLink $data=null ,string $queryString=null ) <p>request: POST system/directorylinks</p>
 * @method static apiResult|mixed ldapPublish ( xsd\dirPublish $data=null ,string $queryString=null ) <p>request: POST system/directorylinks/publish</p>
 * @method static apiResult|mixed listAccessControl ( mixed $data=null ,string $queryString=null ) <p>request: GET system/acl</p>
 * @method static apiResult|mixed lookupUserByEmail ( mixed $data=null ,string $queryString=null ) <p>request: GET system/userbyemail/{email}</p><p>template-var: email => xs:string : template</p>
 * @method static apiResult|mixed maintenance ( xsd\maintenanceOptions $data=null ,string $queryString=null ) <p>request: POST system/maintenance</p>
 * @method static apiResult|xsd\batchResult moveUsers ( xsd\moveRequest $data=null ,string $queryString=null ) <p>request: POST system/moverequests</p>
 * @method static apiResult|mixed object ( mixed $data=null ,string $queryString=null ) <p>request: GET system</p>
 * @method static apiResult|mixed retryPending ( mixed $data=null ,string $queryString=null ) <p>request: PUT system/pending/{id}</p><p>template-var: id => xs:string : template</p>
 * @method static apiResult|mixed revokeIssuedCert ( mixed $data=null ,string $queryString=null ) <p>request: DELETE system/ca/issued/{serial}</p><p>template-var: serial => xs:string : template</p>
 * @method static apiResult|xsd\listResult search ( mixed $data=null ,string $queryString=null ) <p>request: GET system/search</p><p>query-String: text => xs:string : query</p><p>query-String: load => xs:boolean : query</p>
 * @method static apiResult|mixed setKeyShieldSsoCertificateAuthority ( mixed $data=null ,string $queryString=null ) <p>request: PUT system/keyshieldsso/ca</p>
 * @method static apiResult|mixed testAddresses ( mixed $data=null ,string $queryString=null ) <p>request: GET system/customaddresses/test</p><p>query-String: testAddress => xs:string : query</p>
 * @method static apiResult|mixed undoPending ( mixed $data=null ,string $queryString=null ) <p>request: DELETE system/pending/{id}</p><p>template-var: id => xs:string : template</p>
 * @method static apiResult|mixed update ( xsd\system $data=null ,string $queryString=null ) <p>request: PUT system</p><p>query-String: attrs => xs:string : query</p>
 * @method static apiResult|mixed updateAccessControl ( xsd\batchupdate $data=null ,string $queryString=null ) <p>request: PUT system/acl</p>
 * @method static apiResult|mixed whoami ( mixed $data=null ,string $queryString=null ) <p>request: GET system/whoami</p>
 */
class system extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"RecoverGwAccount":{"paramStatic":{"accountid":"xs:string : template","connectionid":"xs:string : template"},"paramQuery":{},"path":"system\/recover\/{connectionid}\/recover\/{accountid}","action":"POST","doc":"Recover a deleted GroupWise account from a backup copy of the GroupWise primary domain database. <p> <p> Once the account has been recovered, you can use the command: <p> domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/restoremailbox <p> or <p> domains\/{domain}\/postoffices\/{postoffice}\/resources\/{resource}\/restoremailbox <p> to restore the contents of the mailbox from your backup system.","requestType":null,"responseType":null,"__isStatic":"orphan"},"__className":"system","action":{"paramStatic":{"id":"xs:string : template"},"paramQuery":{"action":"xs:string : query"},"path":"system\/moverequests\/{id}\/actions","action":"POST","doc":"Run an action on the specified user move status. Actions are one of (case-insensitive): <dl> <dt>RETRY<\/dt> <dd>Submit a retry of the current step of the user move to the post office<\/dd> <dt>SKIP_MAILBOX_ITEM<\/dt> <dd>Skip the current mailbox item blocking the move process and continue with the move<\/dd> <dt>STOP_DEFERRED_RETRIES<\/dt> <dt>RESTART<\/dt> <dd>Restart the whole user move process<\/dd> <dt>REQUEST_PENDING_ITEMS<\/dt> <dd>Submit a request to the post office to build a list of pending items.<\/dd> <dt>FORCE_COMPLETE<\/dt> <dd>Mark the user move process as complete even if it is not.<\/dd> <\/dl>","requestType":null,"responseType":null,"__isStatic":"orphan"},"clearAllCompleted":{"paramStatic":{},"paramQuery":{},"path":"system\/moverequests","action":"DELETE","doc":"Remove all Move User Status objects with a status of Complete.","requestType":null,"responseType":null},"clearKeyShieldSsoCertificateAuthority":{"paramStatic":{},"paramQuery":{},"path":"system\/keyshieldsso\/ca","action":"DELETE","doc":"Clear the CA certificate used to validate user login certificates issued  by the KeyShield SSO server.","requestType":null,"responseType":null,"__isStatic":"orphan"},"clearSingle":{"paramStatic":{"id":"xs:string : template"},"paramQuery":{"clearincomplete":"xs:string : query"},"path":"system\/moverequests\/{id}","action":"DELETE","doc":"Clear a single user move status","requestType":null,"responseType":null,"__isStatic":"orphan"},"connectedDomain":{"paramStatic":{},"paramQuery":{},"path":"system\/connecteddomain","action":"GET","doc":"Get the name of the Domain this service is connected to.","requestType":null,"responseType":null},"createRecoverConnection":{"paramStatic":{},"paramQuery":{},"path":"system\/recover","action":"POST","doc":"Create a connection to a GroupWise Domain database that exists in the specified path","requestType":"gwpath","responseType":null},"createRecoverConnectionFromFile":{"paramStatic":{},"paramQuery":{},"path":"system\/recover","action":"POST","doc":"Create a connection to the specified GroupWise Domain database. The database file is stored locally in a temporary directory and a connection is established to it","requestType":null,"responseType":null},"crl":{"paramStatic":{},"paramQuery":{},"path":"system\/ca\/crl","action":"GET","doc":"Download the certificate revocation list","requestType":null,"responseType":null,"__isStatic":"orphan"},"deleteRecoverConnection":{"paramStatic":{"connectionid":"xs:string : template"},"paramQuery":{},"path":"system\/recover\/{connectionid}","action":"DELETE","doc":"Close the connection to a backup copy of a domain database","requestType":null,"responseType":null,"__isStatic":"orphan"},"expired":{"paramStatic":{},"paramQuery":{},"path":"system\/expired","action":"GET","doc":"Get a list of expired objects in this System.","requestType":null,"responseType":"listResult"},"get":{"paramStatic":{},"paramQuery":{},"path":"system\/ca","action":"GET","doc":"Get the public certificate of the certificate authority of the domain serviced by  this admin service.","requestType":null,"responseType":null},"getAvailableCoumns":{"paramStatic":{"listId":"xs:int : template"},"paramQuery":{},"path":"system\/list\/columns\/{listId}","action":"GET","doc":"Returns the list of available display columns for the specified object type.","requestType":null,"responseType":null},"getDefaultTimezones":{"paramStatic":{},"paramQuery":{},"path":"system\/defaulttimezones","action":"GET","doc":"Returns the default system Time Zone records for this system. Returns a StringMapEntry","requestType":null,"responseType":null},"getIssuedCert":{"paramStatic":{"serial":"xs:string : template"},"paramQuery":{},"path":"system\/ca\/issued\/{serial}","action":"GET","doc":"Read a particular certificate that was issued by this CA","requestType":null,"responseType":null,"__isStatic":"orphan"},"getKeyShieldSsoCertificateAuthority":{"paramStatic":{},"paramQuery":{},"path":"system\/keyshieldsso\/ca","action":"GET","doc":"Retrieve the CA certificate used to validate user login certificates issued  by the KeyShield SSO server.","requestType":null,"responseType":null,"__isStatic":"orphan"},"getKeyShieldSsoLinks":{"paramStatic":{},"paramQuery":{},"path":"system\/keyshieldsso","action":"GET","doc":"Return the links to the keyshieldsso resources","requestType":null,"responseType":"keyshieldsso"},"getLanguages":{"paramStatic":{},"paramQuery":{},"path":"system\/languages","action":"GET","doc":"Get the available database languages for this System.","requestType":null,"responseType":null},"getList":{"paramStatic":{},"paramQuery":{},"path":"system\/moverequests","action":"GET","doc":"Get a list of Move User Status objects in the system.","requestType":null,"responseType":"listResult"},"getLocaleLanguageDescription":{"paramStatic":{},"paramQuery":{},"path":"system\/localelanguagedescription","action":"GET","doc":"Get the default Locale Language Description for this system.","requestType":null,"responseType":null},"getPending":{"paramStatic":{},"paramQuery":{},"path":"system\/pending","action":"GET","doc":"Get a list of pending operations in the system.","requestType":null,"responseType":"listResult"},"getPendingItems":{"paramStatic":{"id":"xs:string : template"},"paramQuery":{},"path":"system\/moverequests\/{id}\/pending","action":"GET","doc":"Get a list of Move User Status pending items","requestType":null,"responseType":"listResult","__isStatic":"orphan"},"getPlatforms":{"paramStatic":{},"paramQuery":{},"path":"system\/platforms","action":"GET","doc":"Get the Platforms for this system.","requestType":null,"responseType":null},"getRecoverRawObject":{"paramStatic":{"connectionid":"xs:string : template","id":"xs:string : template"},"paramQuery":{},"path":"system\/recover\/{connectionid}\/diagnosticsobject\/{id}","action":"GET","doc":"Return a raw dump of an object specified by TDPN (Type.Domain.PostOffice.Name)","requestType":null,"responseType":"objectAttributes","__isStatic":"orphan"},"getRecoverResource":{"paramStatic":{"resource":"xs:string : template","connectionid":"xs:string : template"},"paramQuery":{},"path":"system\/recover\/{connectionid}\/resources\/{resource}","action":"GET","doc":"Get a specific <a href=\"#Resource\">Resource<\/a> from a backup copy of the domain database given the connection ID and the resource ID.","requestType":null,"responseType":null,"__isStatic":"orphan"},"getRecoverResources":{"paramStatic":{"connectionid":"xs:string : template"},"paramQuery":{},"path":"system\/recover\/{connectionid}\/resources","action":"GET","doc":"Get a list of resources. All resources that are visible in the backup copy of the domain will be listed if no search criteria are specified","requestType":null,"responseType":null,"__isStatic":"orphan"},"getRecoverUser":{"paramStatic":{"connectionid":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"system\/recover\/{connectionid}\/users\/{user}","action":"GET","doc":"Get a specific <a href=\"#User\">User<\/a> from a backup copy of the domain database given the connection ID and the user ID.","requestType":null,"responseType":null,"__isStatic":"orphan"},"getRecoverUsers":{"paramStatic":{"connectionid":"xs:string : template"},"paramQuery":{},"path":"system\/recover\/{connectionid}\/users","action":"GET","doc":"Get a list of users. All users that are visible in the backup copy of the domain will be listed if no search criteria are specified","requestType":null,"responseType":null,"__isStatic":"orphan"},"info":{"paramStatic":{},"paramQuery":{},"path":"system\/info","action":"GET","doc":"Retrieve statistical information about the current System.","requestType":null,"responseType":null},"issue":{"paramStatic":{},"paramQuery":{},"path":"system\/ca","action":"POST","doc":"Load the certificate authority and issue a new certificate for the specified certificate signing  request.","requestType":null,"responseType":null},"issued":{"paramStatic":{},"paramQuery":{},"path":"system\/ca\/issued","action":"GET","doc":"Return the list of issued certificates","requestType":null,"responseType":"listResult","__isStatic":"orphan"},"ldapLink":{"paramStatic":{},"paramQuery":{},"path":"system\/directorylinks","action":"POST","doc":"Link the users in the specified container to the directory users returned from the  LDAP search specified.","requestType":"dirLink","responseType":null},"ldapPublish":{"paramStatic":{},"paramQuery":{},"path":"system\/directorylinks\/publish","action":"POST","doc":"Publish the email address for directory linked users in this system","requestType":"dirPublish","responseType":null,"__isStatic":"orphan"},"listAccessControl":{"paramStatic":{},"paramQuery":{},"path":"system\/acl","action":"GET","doc":"Get a list of referenced Access Controls for this System.","requestType":null,"responseType":null},"lookupUserByEmail":{"paramStatic":{"email":"xs:string : template"},"paramQuery":{},"path":"system\/userbyemail\/{email}","action":"GET","doc":"Get an addressable object by their email address.","requestType":null,"responseType":null},"maintenance":{"paramStatic":{},"paramQuery":{},"path":"system\/maintenance","action":"POST","doc":"Submit a new system maintenance request","requestType":"maintenanceOptions","responseType":null},"moveUsers":{"paramStatic":{},"paramQuery":{},"path":"system\/moverequests","action":"POST","doc":"Move one or more users to a new post office.  The request object must contain the id of the destination post office as well as a list containing one or more user ids. Each user entry in the source list can optionally specify whether or not they want to create a nickname on the source post office and a new owner for resources.<\/p>  <pre> { \t\"postOfficeId\": \"POST_OFFICE.Dom1.Po2\", \t\"sources\": [ \t\t{\"id\": \"USER.Dom1.Po1.User1\", \"createNickname\": \"true\"}, \t\t{\"id\": \"USER.Dom1.Po1.User2\"}, \t\t{\"id\": \"RESOURCE.Dom1.Po1.Rsrc1\", \"resourceOwnerId\": \"USER.Dom1.Po1.User3\"}, \t] } <\/pre>  <p> If the request is well formed and the destination post office is valid then a 200 OK response will be returned with a response entity that encodes the success or failure of the individual move operations. The caller MUST examine the response entity to determine if the move succeeded for a given and not just assume that a 200 OK means that the move succeeded. <\/p>  <p> The response entity will contain the number of user moves that succeeded in addition to a collection of errors that were encountered for user moves that failed. The caller can determine that the entire move succeeded if the number of users that succeeded in the response match the number of users that were requested to move in the request entity. Individual failures are identified by the id that was passed into the move request. <\/p>  <p> When moving a resource, the new owner field is required. The owner must be the id of a user that exists on the destination post office. If the resource owner is not specified then the move will fail with a status of FORBIDDEN and an error code of INVALID_OWNER (0xDB04). <\/p>  <p> When moving a user, the new resource owner field is only required in cases where the user owns resources on the source post office. In this case, the new resource owner must be another user on the source post office that the owned resources will be reassigned to. If the user owns resources and no resource owner is specified the move will fail with a status of FORBIDDEN and an error code of OWNED_RSRC_EXISTS (0xDB09). <\/p>","requestType":"moveRequest","responseType":"batchResult"},"object":{"paramStatic":{},"paramQuery":{},"path":"system","action":"GET","doc":"Get the System object for the current system.","requestType":null,"responseType":null},"retryPending":{"paramStatic":{"id":"xs:string : template"},"paramQuery":{},"path":"system\/pending\/{id}","action":"PUT","doc":"Retry the pending operation on the specified object.","requestType":null,"responseType":null,"__isStatic":"orphan"},"revokeIssuedCert":{"paramStatic":{"serial":"xs:string : template"},"paramQuery":{},"path":"system\/ca\/issued\/{serial}","action":"DELETE","doc":"Revoke an issued certificate","requestType":null,"responseType":null,"__isStatic":"orphan"},"search":{"paramStatic":{},"paramQuery":{"text":"xs:string : query","load":"xs:boolean : query"},"path":"system\/search","action":"GET","doc":"Global search","requestType":null,"responseType":"listResult"},"setKeyShieldSsoCertificateAuthority":{"paramStatic":{},"paramQuery":{},"path":"system\/keyshieldsso\/ca","action":"PUT","doc":"Set the CA certificate used to validate user login certificates issued  by the KeyShield SSO server.","requestType":null,"responseType":null,"__isStatic":"orphan"},"testAddresses":{"paramStatic":{},"paramQuery":{"testAddress":"xs:string : query"},"path":"system\/customaddresses\/test","action":"GET","doc":"Test the specified address using the Custom Addressing Rules.","requestType":null,"responseType":null,"__isStatic":"orphan"},"undoPending":{"paramStatic":{"id":"xs:string : template"},"paramQuery":{},"path":"system\/pending\/{id}","action":"DELETE","doc":"Undo the pending operation on the specified object.","requestType":null,"responseType":null,"__isStatic":"orphan"},"update":{"paramStatic":{},"paramQuery":{"attrs":"xs:string : query"},"path":"system","action":"PUT","doc":"Update the specified System object with the given data.","requestType":"system","responseType":null},"updateAccessControl":{"paramStatic":{},"paramQuery":{},"path":"system\/acl","action":"PUT","doc":"Update a list of Access Control objects for this System.","requestType":"batchupdate","responseType":null},"whoami":{"paramStatic":{},"paramQuery":{},"path":"system\/whoami","action":"GET","doc":"Authenticate the specified credentials.","requestType":null,"responseType":null}}');
	}
	/**
	 * Recover a deleted GroupWise account from a backup copy of the GroupWise primary domain database. <p> <p> Once the account has been recovered, you can use the command: <p> domains/{domain}/postoffices/{postoffice}/users/{user}/restoremailbox <p> or <p> domains/{domain}/postoffices/{postoffice}/resources/{resource}/restoremailbox <p> to restore the contents of the mailbox from your backup system.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/recover/{connectionid}/recover/{accountid}</p>
	 * <p>template-var: accountid => xs:string : template</p>
	 * <p>template-var: connectionid => xs:string : template</p>
	 */
	protected function _RecoverGwAccount ($data=null,$queryString=null) { 
		return $this->doRequest ('RecoverGwAccount',$data,$queryString);
	}
	/**
	 * Run an action on the specified user move status. Actions are one of (case-insensitive): <dl> <dt>RETRY</dt> <dd>Submit a retry of the current step of the user move to the post office</dd> <dt>SKIP_MAILBOX_ITEM</dt> <dd>Skip the current mailbox item blocking the move process and continue with the move</dd> <dt>STOP_DEFERRED_RETRIES</dt> <dt>RESTART</dt> <dd>Restart the whole user move process</dd> <dt>REQUEST_PENDING_ITEMS</dt> <dd>Submit a request to the post office to build a list of pending items.</dd> <dt>FORCE_COMPLETE</dt> <dd>Mark the user move process as complete even if it is not.</dd> </dl>
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/moverequests/{id}/actions</p>
	 * <p>template-var: id => xs:string : template</p>
	 * <p>query-String: action => xs:string : query</p>
	 */
	protected function _action ($data=null,$queryString=null) { 
		return $this->doRequest ('action',$data,$queryString);
	}
	/**
	 * Remove all Move User Status objects with a status of Complete.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE system/moverequests</p>
	 */
	protected function _clearAllCompleted ($data=null,$queryString=null) { 
		return $this->doRequest ('clearAllCompleted',$data,$queryString);
	}
	/**
	 * Clear the CA certificate used to validate user login certificates issued  by the KeyShield SSO server.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE system/keyshieldsso/ca</p>
	 */
	protected function _clearKeyShieldSsoCertificateAuthority ($data=null,$queryString=null) { 
		return $this->doRequest ('clearKeyShieldSsoCertificateAuthority',$data,$queryString);
	}
	/**
	 * Clear a single user move status
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE system/moverequests/{id}</p>
	 * <p>template-var: id => xs:string : template</p>
	 * <p>query-String: clearincomplete => xs:string : query</p>
	 */
	protected function _clearSingle ($data=null,$queryString=null) { 
		return $this->doRequest ('clearSingle',$data,$queryString);
	}
	/**
	 * Get the name of the Domain this service is connected to.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/connecteddomain</p>
	 */
	protected function _connectedDomain ($data=null,$queryString=null) { 
		return $this->doRequest ('connectedDomain',$data,$queryString);
	}
	/**
	 * Create a connection to a GroupWise Domain database that exists in the specified path
	 * @internal
	 *
	 * @param apiResult|xsd\gwpath $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/recover</p>
	 */
	protected function _createRecoverConnection ($data=null,$queryString=null) { 
		return $this->doRequest ('createRecoverConnection',$data,$queryString);
	}
	/**
	 * Create a connection to the specified GroupWise Domain database. The database file is stored locally in a temporary directory and a connection is established to it
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/recover</p>
	 */
	protected function _createRecoverConnectionFromFile ($data=null,$queryString=null) { 
		return $this->doRequest ('createRecoverConnectionFromFile',$data,$queryString);
	}
	/**
	 * Download the certificate revocation list
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/ca/crl</p>
	 */
	protected function _crl ($data=null,$queryString=null) { 
		return $this->doRequest ('crl',$data,$queryString);
	}
	/**
	 * Close the connection to a backup copy of a domain database
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE system/recover/{connectionid}</p>
	 * <p>template-var: connectionid => xs:string : template</p>
	 */
	protected function _deleteRecoverConnection ($data=null,$queryString=null) { 
		return $this->doRequest ('deleteRecoverConnection',$data,$queryString);
	}
	/**
	 * Get a list of expired objects in this System.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\listResult
	 *
	 * <p>request: GET system/expired</p>
	 */
	protected function _expired ($data=null,$queryString=null) { 
		return $this->doRequest ('expired',$data,$queryString);
	}
	/**
	 * Get the public certificate of the certificate authority of the domain serviced by  this admin service.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/ca</p>
	 */
	protected function _get ($data=null,$queryString=null) { 
		return $this->doRequest ('get',$data,$queryString);
	}
	/**
	 * Returns the list of available display columns for the specified object type.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/list/columns/{listId}</p>
	 * <p>template-var: listId => xs:int : template</p>
	 */
	protected function _getAvailableCoumns ($data=null,$queryString=null) { 
		return $this->doRequest ('getAvailableCoumns',$data,$queryString);
	}
	/**
	 * Returns the default system Time Zone records for this system. Returns a StringMapEntry
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/defaulttimezones</p>
	 */
	protected function _getDefaultTimezones ($data=null,$queryString=null) { 
		return $this->doRequest ('getDefaultTimezones',$data,$queryString);
	}
	/**
	 * Read a particular certificate that was issued by this CA
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/ca/issued/{serial}</p>
	 * <p>template-var: serial => xs:string : template</p>
	 */
	protected function _getIssuedCert ($data=null,$queryString=null) { 
		return $this->doRequest ('getIssuedCert',$data,$queryString);
	}
	/**
	 * Retrieve the CA certificate used to validate user login certificates issued  by the KeyShield SSO server.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/keyshieldsso/ca</p>
	 */
	protected function _getKeyShieldSsoCertificateAuthority ($data=null,$queryString=null) { 
		return $this->doRequest ('getKeyShieldSsoCertificateAuthority',$data,$queryString);
	}
	/**
	 * Return the links to the keyshieldsso resources
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\keyshieldsso
	 *
	 * <p>request: GET system/keyshieldsso</p>
	 */
	protected function _getKeyShieldSsoLinks ($data=null,$queryString=null) { 
		return $this->doRequest ('getKeyShieldSsoLinks',$data,$queryString);
	}
	/**
	 * Get the available database languages for this System.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/languages</p>
	 */
	protected function _getLanguages ($data=null,$queryString=null) { 
		return $this->doRequest ('getLanguages',$data,$queryString);
	}
	/**
	 * Get a list of Move User Status objects in the system.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\listResult
	 *
	 * <p>request: GET system/moverequests</p>
	 */
	protected function _getList ($data=null,$queryString=null) { 
		return $this->doRequest ('getList',$data,$queryString);
	}
	/**
	 * Get the default Locale Language Description for this system.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/localelanguagedescription</p>
	 */
	protected function _getLocaleLanguageDescription ($data=null,$queryString=null) { 
		return $this->doRequest ('getLocaleLanguageDescription',$data,$queryString);
	}
	/**
	 * Get a list of pending operations in the system.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\listResult
	 *
	 * <p>request: GET system/pending</p>
	 */
	protected function _getPending ($data=null,$queryString=null) { 
		return $this->doRequest ('getPending',$data,$queryString);
	}
	/**
	 * Get a list of Move User Status pending items
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\listResult
	 *
	 * <p>request: GET system/moverequests/{id}/pending</p>
	 * <p>template-var: id => xs:string : template</p>
	 */
	protected function _getPendingItems ($data=null,$queryString=null) { 
		return $this->doRequest ('getPendingItems',$data,$queryString);
	}
	/**
	 * Get the Platforms for this system.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/platforms</p>
	 */
	protected function _getPlatforms ($data=null,$queryString=null) { 
		return $this->doRequest ('getPlatforms',$data,$queryString);
	}
	/**
	 * Return a raw dump of an object specified by TDPN (Type.Domain.PostOffice.Name)
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\objectAttributes
	 *
	 * <p>request: GET system/recover/{connectionid}/diagnosticsobject/{id}</p>
	 * <p>template-var: connectionid => xs:string : template</p>
	 * <p>template-var: id => xs:string : template</p>
	 */
	protected function _getRecoverRawObject ($data=null,$queryString=null) { 
		return $this->doRequest ('getRecoverRawObject',$data,$queryString);
	}
	/**
	 * Get a specific <a href="#Resource">Resource</a> from a backup copy of the domain database given the connection ID and the resource ID.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/recover/{connectionid}/resources/{resource}</p>
	 * <p>template-var: resource => xs:string : template</p>
	 * <p>template-var: connectionid => xs:string : template</p>
	 */
	protected function _getRecoverResource ($data=null,$queryString=null) { 
		return $this->doRequest ('getRecoverResource',$data,$queryString);
	}
	/**
	 * Get a list of resources. All resources that are visible in the backup copy of the domain will be listed if no search criteria are specified
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/recover/{connectionid}/resources</p>
	 * <p>template-var: connectionid => xs:string : template</p>
	 */
	protected function _getRecoverResources ($data=null,$queryString=null) { 
		return $this->doRequest ('getRecoverResources',$data,$queryString);
	}
	/**
	 * Get a specific <a href="#User">User</a> from a backup copy of the domain database given the connection ID and the user ID.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/recover/{connectionid}/users/{user}</p>
	 * <p>template-var: connectionid => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _getRecoverUser ($data=null,$queryString=null) { 
		return $this->doRequest ('getRecoverUser',$data,$queryString);
	}
	/**
	 * Get a list of users. All users that are visible in the backup copy of the domain will be listed if no search criteria are specified
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/recover/{connectionid}/users</p>
	 * <p>template-var: connectionid => xs:string : template</p>
	 */
	protected function _getRecoverUsers ($data=null,$queryString=null) { 
		return $this->doRequest ('getRecoverUsers',$data,$queryString);
	}
	/**
	 * Retrieve statistical information about the current System.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/info</p>
	 */
	protected function _info ($data=null,$queryString=null) { 
		return $this->doRequest ('info',$data,$queryString);
	}
	/**
	 * Load the certificate authority and issue a new certificate for the specified certificate signing  request.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/ca</p>
	 */
	protected function _issue ($data=null,$queryString=null) { 
		return $this->doRequest ('issue',$data,$queryString);
	}
	/**
	 * Return the list of issued certificates
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\listResult
	 *
	 * <p>request: GET system/ca/issued</p>
	 */
	protected function _issued ($data=null,$queryString=null) { 
		return $this->doRequest ('issued',$data,$queryString);
	}
	/**
	 * Link the users in the specified container to the directory users returned from the  LDAP search specified.
	 * @internal
	 *
	 * @param apiResult|xsd\dirLink $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/directorylinks</p>
	 */
	protected function _ldapLink ($data=null,$queryString=null) { 
		return $this->doRequest ('ldapLink',$data,$queryString);
	}
	/**
	 * Publish the email address for directory linked users in this system
	 * @internal
	 *
	 * @param apiResult|xsd\dirPublish $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/directorylinks/publish</p>
	 */
	protected function _ldapPublish ($data=null,$queryString=null) { 
		return $this->doRequest ('ldapPublish',$data,$queryString);
	}
	/**
	 * Get a list of referenced Access Controls for this System.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/acl</p>
	 */
	protected function _listAccessControl ($data=null,$queryString=null) { 
		return $this->doRequest ('listAccessControl',$data,$queryString);
	}
	/**
	 * Get an addressable object by their email address.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/userbyemail/{email}</p>
	 * <p>template-var: email => xs:string : template</p>
	 */
	protected function _lookupUserByEmail ($data=null,$queryString=null) { 
		return $this->doRequest ('lookupUserByEmail',$data,$queryString);
	}
	/**
	 * Submit a new system maintenance request
	 * @internal
	 *
	 * @param apiResult|xsd\maintenanceOptions $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/maintenance</p>
	 */
	protected function _maintenance ($data=null,$queryString=null) { 
		return $this->doRequest ('maintenance',$data,$queryString);
	}
	/**
	 * Move one or more users to a new post office.  The request object must contain the id of the destination post office as well as a list containing one or more user ids. Each user entry in the source list can optionally specify whether or not they want to create a nickname on the source post office and a new owner for resources.</p>  <pre> { 	"postOfficeId": "POST_OFFICE.Dom1.Po2", 	"sources": [ 		{"id": "USER.Dom1.Po1.User1", "createNickname": "true"}, 		{"id": "USER.Dom1.Po1.User2"}, 		{"id": "RESOURCE.Dom1.Po1.Rsrc1", "resourceOwnerId": "USER.Dom1.Po1.User3"}, 	] } </pre>  <p> If the request is well formed and the destination post office is valid then a 200 OK response will be returned with a response entity that encodes the success or failure of the individual move operations. The caller MUST examine the response entity to determine if the move succeeded for a given and not just assume that a 200 OK means that the move succeeded. </p>  <p> The response entity will contain the number of user moves that succeeded in addition to a collection of errors that were encountered for user moves that failed. The caller can determine that the entire move succeeded if the number of users that succeeded in the response match the number of users that were requested to move in the request entity. Individual failures are identified by the id that was passed into the move request. </p>  <p> When moving a resource, the new owner field is required. The owner must be the id of a user that exists on the destination post office. If the resource owner is not specified then the move will fail with a status of FORBIDDEN and an error code of INVALID_OWNER (0xDB04). </p>  <p> When moving a user, the new resource owner field is only required in cases where the user owns resources on the source post office. In this case, the new resource owner must be another user on the source post office that the owned resources will be reassigned to. If the user owns resources and no resource owner is specified the move will fail with a status of FORBIDDEN and an error code of OWNED_RSRC_EXISTS (0xDB09). </p>
	 * @internal
	 *
	 * @param apiResult|xsd\moveRequest $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\batchResult
	 *
	 * <p>request: POST system/moverequests</p>
	 */
	protected function _moveUsers ($data=null,$queryString=null) { 
		return $this->doRequest ('moveUsers',$data,$queryString);
	}
	/**
	 * Get the System object for the current system.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Retry the pending operation on the specified object.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT system/pending/{id}</p>
	 * <p>template-var: id => xs:string : template</p>
	 */
	protected function _retryPending ($data=null,$queryString=null) { 
		return $this->doRequest ('retryPending',$data,$queryString);
	}
	/**
	 * Revoke an issued certificate
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE system/ca/issued/{serial}</p>
	 * <p>template-var: serial => xs:string : template</p>
	 */
	protected function _revokeIssuedCert ($data=null,$queryString=null) { 
		return $this->doRequest ('revokeIssuedCert',$data,$queryString);
	}
	/**
	 * Global search
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\listResult
	 *
	 * <p>request: GET system/search</p>
	 * <p>query-String: text => xs:string : query</p>
	 * <p>query-String: load => xs:boolean : query</p>
	 */
	protected function _search ($data=null,$queryString=null) { 
		return $this->doRequest ('search',$data,$queryString);
	}
	/**
	 * Set the CA certificate used to validate user login certificates issued  by the KeyShield SSO server.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT system/keyshieldsso/ca</p>
	 */
	protected function _setKeyShieldSsoCertificateAuthority ($data=null,$queryString=null) { 
		return $this->doRequest ('setKeyShieldSsoCertificateAuthority',$data,$queryString);
	}
	/**
	 * Test the specified address using the Custom Addressing Rules.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/customaddresses/test</p>
	 * <p>query-String: testAddress => xs:string : query</p>
	 */
	protected function _testAddresses ($data=null,$queryString=null) { 
		return $this->doRequest ('testAddresses',$data,$queryString);
	}
	/**
	 * Undo the pending operation on the specified object.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE system/pending/{id}</p>
	 * <p>template-var: id => xs:string : template</p>
	 */
	protected function _undoPending ($data=null,$queryString=null) { 
		return $this->doRequest ('undoPending',$data,$queryString);
	}
	/**
	 * Update the specified System object with the given data.
	 * @internal
	 *
	 * @param apiResult|xsd\system $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT system</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _update ($data=null,$queryString=null) { 
		return $this->doRequest ('update',$data,$queryString);
	}
	/**
	 * Update a list of Access Control objects for this System.
	 * @internal
	 *
	 * @param apiResult|xsd\batchupdate $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT system/acl</p>
	 */
	protected function _updateAccessControl ($data=null,$queryString=null) { 
		return $this->doRequest ('updateAccessControl',$data,$queryString);
	}
	/**
	 * Authenticate the specified credentials.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/whoami</p>
	 */
	protected function _whoami ($data=null,$queryString=null) { 
		return $this->doRequest ('whoami',$data,$queryString);
	}
}