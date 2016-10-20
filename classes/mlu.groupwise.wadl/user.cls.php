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
 * dynamic abstraction for gw-class user
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed addAdministeredGroup ( xsd\group $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/users/{user}/administeredgroups</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|mixed addAlias ( xsd\gatewayAlias $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/users/{user}/aliases</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|mixed addGroupMembership ( xsd\membership $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/users/{user}/groupmemberships</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|mixed administeredgroups ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/users/{user}/administeredgroups</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|mixed clearDirectoryLink ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/postoffices/{postoffice}/users/{user}/directorylink</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|mixed clearPicture ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/postoffices/{postoffice}/users/{user}/picture</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|mixed create ( xsd\user $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/users</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/postoffices/{postoffice}/users/{user}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|mixed deleteSharedFolders ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/postoffices/{postoffice}/users/{user}/sharedfolders</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|xsd\emailAddresses getAllEmailAddresses ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/users/{user}/emailaddresses</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|mixed getClientOptions ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/users/{user}/clientoptions</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 * @method static apiResult|xsd\directoryLink getDirectoryLink ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/users/{user}/directorylink</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|mixed getList ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/users</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed getPicture ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/users/{user}/picture</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|xsd\restoreArea getRestoreArea ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/users/{user}/restorearea</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|mixed getSharedFolders ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/users/{user}/sharedfolders</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|mixed gwcheck ( xsd\checkOptions $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/users/{user}/gwcheck</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|mixed info ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/users/{user}/info</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|xsd\syncResult ldapPublishUser ( mixed $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/users/{user}/directorylink/publish</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|xsd\syncResult ldapSyncUser ( mixed $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/users/{user}/directorylink/sync</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|xsd\syncResult ldapSyncUserPicture ( mixed $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/users/{user}/directorylink/syncpicture</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|mixed listAliases ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/users/{user}/aliases</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|xsd\listResult listGroupMemberships ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/users/{user}/groupmemberships</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|xsd\checkOptions loadCheckOptions ( mixed $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/users/{user}/gwcheck/load</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|mixed nicknames ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/users/{user}/nicknames</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|mixed object ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/users/{user}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|mixed putDirectoryLink ( xsd\directoryLink $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/users/{user}/directorylink</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|mixed putSharedFolders ( xsd\sharedFolderAction $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/users/{user}/sharedfolders</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|mixed removeAdministeredGroup ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/postoffices/{postoffice}/users/{user}/administeredgroups/{group}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|mixed removeAlias ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/postoffices/{postoffice}/users/{user}/aliases/{type}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: type => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|mixed removeAllGroupMemberships ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/postoffices/{postoffice}/users/{user}/groupmemberships</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|mixed removeGroupMembership ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/postoffices/{postoffice}/users/{user}/groupmemberships/{groupid}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: groupid => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|mixed replicate ( mixed $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/users/{user}/replicate</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|xsd\listResult resources ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/users/{user}/resources</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|mixed restoreMailbox ( mixed $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/users/{user}/restoremailbox</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|mixed saveCheckOptions ( xsd\checkOptions $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/users/{user}/gwcheck/save</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|mixed setClientOptions ( xsd\clientOptions $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/users/{user}/clientoptions</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 * @method static apiResult|mixed setPicture ( mixed $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/users/{user}/picture</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|mixed update ( xsd\user $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/users/{user}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 * @method static apiResult|xsd\listUpdateResult updateAdministeredGroups ( xsd\batchupdate $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/users/{user}/administeredgroups</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|mixed updateGroupMembership ( xsd\membership $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/users/{user}/groupmemberships/{groupid}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: groupid => xs:string : template</p><p>template-var: user => xs:string : template</p>
 * @method static apiResult|xsd\listUpdateResult updateGroupMemberships ( xsd\groupMemberListUpdate $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/users/{user}/groupmemberships</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: user => xs:string : template</p>
 */
class user extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"user","__isObject":true,"addAdministeredGroup":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/administeredgroups","action":"POST","doc":"Add to the list of groups administered by this user.","requestType":"group","responseType":null},"addAlias":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/aliases","action":"POST","doc":"Add a new gateway alias for this user","requestType":"gatewayAlias","responseType":null},"addGroupMembership":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/groupmemberships","action":"POST","doc":"Add to the list of group memberships for this user.","requestType":"membership","responseType":null},"administeredgroups":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/administeredgroups","action":"GET","doc":"Performs a query to find all the groups administered by this user","requestType":null,"responseType":null},"clearDirectoryLink":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/directorylink","action":"DELETE","doc":"Delete the directory link for this user (disassociate).","requestType":null,"responseType":null},"clearPicture":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/picture","action":"DELETE","doc":"Clear the user picture","requestType":null,"responseType":null},"create":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users","action":"POST","doc":"Create a User given the data. Required fields: domainName, postOfficeName, name","requestType":"user","responseType":null,"__isStatic":"object"},"delete":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}","action":"DELETE","doc":"Delete a User given the name","requestType":null,"responseType":null},"deleteSharedFolders":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/sharedfolders","action":"DELETE","doc":"Delete Shared Folder transfer information for the specified user.","requestType":null,"responseType":null},"getAllEmailAddresses":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/emailaddresses","action":"GET","doc":"Get the list of allowed email address for this user including nickname and gateway alias  email addresses.","requestType":null,"responseType":"emailAddresses"},"getClientOptions":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/clientoptions","action":"GET","doc":"Get the Client Options under a specific User","requestType":null,"responseType":null},"getDirectoryLink":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/directorylink","action":"GET","doc":"Get the directory link for this user or return 404 Not Found if no link exists.","requestType":null,"responseType":"directoryLink"},"getList":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users","action":"GET","doc":"Get all Users under a specific PostOffice.<br\/> <br\/> <i>Note:<\/i> Attribute filtering is supported using this query (for example: <code> ...?attribute=value<\/code>)","requestType":null,"responseType":null,"__isStatic":"object"},"getPicture":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/picture","action":"GET","doc":"Retrieve the user picture stream.","requestType":null,"responseType":null},"getRestoreArea":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/restorearea","action":"GET","doc":"Get the restore area for this user","requestType":null,"responseType":"restoreArea"},"getSharedFolders":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/sharedfolders","action":"GET","doc":"Get Shared Folder information for the specified user.","requestType":null,"responseType":null},"gwcheck":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/gwcheck","action":"POST","doc":"Run mailbox maintenance for this user","requestType":"checkOptions","responseType":null},"info":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/info","action":"GET","doc":"Retrieve statistical information about the objects related to this user.","requestType":null,"responseType":null},"ldapPublishUser":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/directorylink\/publish","action":"POST","doc":"Publish this users details back to the LDAP directory","requestType":null,"responseType":"syncResult","__isStatic":"orphan"},"ldapSyncUser":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/directorylink\/sync","action":"POST","doc":"Update user from their LDAP directory object","requestType":null,"responseType":"syncResult","__isStatic":"orphan"},"ldapSyncUserPicture":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/directorylink\/syncpicture","action":"POST","doc":"Update a user picture from their LDAP directory object","requestType":null,"responseType":"syncResult","__isStatic":"orphan"},"listAliases":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/aliases","action":"GET","doc":"Performs a query to find all the aliases for this user","requestType":null,"responseType":null},"listGroupMemberships":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/groupmemberships","action":"GET","doc":"Performs a query to find all the group memberships for this User","requestType":null,"responseType":"listResult"},"loadCheckOptions":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/gwcheck\/load","action":"POST","doc":"Convert an XML options file into a REST check options object","requestType":null,"responseType":"checkOptions","__isStatic":"orphan"},"nicknames":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/nicknames","action":"GET","doc":"Performs a query to find all the Nicknames for this user","requestType":null,"responseType":null},"object":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}","action":"GET","doc":"Get a specific <a href=\"#User\">User<\/a> given the name","requestType":null,"responseType":null},"putDirectoryLink":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/directorylink","action":"PUT","doc":"Update the directory link (i.e. associate) for this user","requestType":"directoryLink","responseType":null},"putSharedFolders":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/sharedfolders","action":"PUT","doc":"Set shared folder information for a user. This may include setting an expiration date for the user.","requestType":"sharedFolderAction","responseType":null},"removeAdministeredGroup":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/administeredgroups\/{group}","action":"DELETE","doc":"Remove from the list of groups administered by this user.","requestType":null,"responseType":null,"__isStatic":"orphan"},"removeAlias":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","type":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/aliases\/{type}","action":"DELETE","doc":"Remove a gateway alias for this user identified by it\'s gateway type.","requestType":null,"responseType":null,"__isStatic":"orphan"},"removeAllGroupMemberships":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/groupmemberships","action":"DELETE","doc":"Remove all group memberships for this user.","requestType":null,"responseType":null},"removeGroupMembership":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","groupid":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/groupmemberships\/{groupid}","action":"DELETE","doc":"Remove from the list of group memberships for this user.","requestType":null,"responseType":null,"__isStatic":"orphan"},"replicate":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/replicate","action":"POST","doc":"Replicate this user through the system.","requestType":null,"responseType":null},"resources":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/resources","action":"GET","doc":"Performs a query to find all the Resources for this user","requestType":null,"responseType":"listResult"},"restoreMailbox":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/restoremailbox","action":"PUT","doc":"Sends a command to the Post Office Agent to perform a Restore operation for the specified user.","requestType":null,"responseType":null},"saveCheckOptions":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/gwcheck\/save","action":"POST","doc":"Convert REST check options into an options XML file suitable for use with GWCHECK","requestType":"checkOptions","responseType":null,"__isStatic":"orphan"},"setClientOptions":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/clientoptions","action":"PUT","doc":"Update the Client Options under a specific User","requestType":"clientOptions","responseType":null},"setPicture":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/picture","action":"PUT","doc":"Set the picture for the user","requestType":null,"responseType":null},"update":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}","action":"PUT","doc":"Update a User given the data. Required fields: domainName, postOfficeName, fileId, name","requestType":"user","responseType":null},"updateAdministeredGroups":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/administeredgroups","action":"PUT","doc":"Update the list of groups administered by this user.","requestType":"batchupdate","responseType":"listUpdateResult"},"updateGroupMembership":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","groupid":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/groupmemberships\/{groupid}","action":"PUT","doc":"Update the participation in the specified group for this user.","requestType":"membership","responseType":null,"__isStatic":"orphan"},"updateGroupMemberships":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","user":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/users\/{user}\/groupmemberships","action":"PUT","doc":"Update the list of group memberships for this user.","requestType":"groupMemberListUpdate","responseType":"listUpdateResult"}}');
	}
	/**
	 * Add to the list of groups administered by this user.
	 * @internal
	 *
	 * @param apiResult|xsd\group $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/users/{user}/administeredgroups</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _addAdministeredGroup ($data=null,$queryString=null) { 
		return $this->doRequest ('addAdministeredGroup',$data,$queryString);
	}
	/**
	 * Add a new gateway alias for this user
	 * @internal
	 *
	 * @param apiResult|xsd\gatewayAlias $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/users/{user}/aliases</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _addAlias ($data=null,$queryString=null) { 
		return $this->doRequest ('addAlias',$data,$queryString);
	}
	/**
	 * Add to the list of group memberships for this user.
	 * @internal
	 *
	 * @param apiResult|xsd\membership $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/users/{user}/groupmemberships</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _addGroupMembership ($data=null,$queryString=null) { 
		return $this->doRequest ('addGroupMembership',$data,$queryString);
	}
	/**
	 * Performs a query to find all the groups administered by this user
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/users/{user}/administeredgroups</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _administeredgroups ($data=null,$queryString=null) { 
		return $this->doRequest ('administeredgroups',$data,$queryString);
	}
	/**
	 * Delete the directory link for this user (disassociate).
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/postoffices/{postoffice}/users/{user}/directorylink</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _clearDirectoryLink ($data=null,$queryString=null) { 
		return $this->doRequest ('clearDirectoryLink',$data,$queryString);
	}
	/**
	 * Clear the user picture
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/postoffices/{postoffice}/users/{user}/picture</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _clearPicture ($data=null,$queryString=null) { 
		return $this->doRequest ('clearPicture',$data,$queryString);
	}
	/**
	 * Create a User given the data. Required fields: domainName, postOfficeName, name
	 * @internal
	 *
	 * @param apiResult|xsd\user $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/users</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _create ($data=null,$queryString=null) { 
		return $this->doRequest ('create',$data,$queryString);
	}
	/**
	 * Delete a User given the name
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/postoffices/{postoffice}/users/{user}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _delete ($data=null,$queryString=null) { 
		return $this->doRequest ('delete',$data,$queryString);
	}
	/**
	 * Delete Shared Folder transfer information for the specified user.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/postoffices/{postoffice}/users/{user}/sharedfolders</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _deleteSharedFolders ($data=null,$queryString=null) { 
		return $this->doRequest ('deleteSharedFolders',$data,$queryString);
	}
	/**
	 * Get the list of allowed email address for this user including nickname and gateway alias  email addresses.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\emailAddresses
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/users/{user}/emailaddresses</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _getAllEmailAddresses ($data=null,$queryString=null) { 
		return $this->doRequest ('getAllEmailAddresses',$data,$queryString);
	}
	/**
	 * Get the Client Options under a specific User
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/users/{user}/clientoptions</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _getClientOptions ($data=null,$queryString=null) { 
		return $this->doRequest ('getClientOptions',$data,$queryString);
	}
	/**
	 * Get the directory link for this user or return 404 Not Found if no link exists.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\directoryLink
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/users/{user}/directorylink</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _getDirectoryLink ($data=null,$queryString=null) { 
		return $this->doRequest ('getDirectoryLink',$data,$queryString);
	}
	/**
	 * Get all Users under a specific PostOffice.<br/> <br/> <i>Note:</i> Attribute filtering is supported using this query (for example: <code> ...?attribute=value</code>)
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/users</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _getList ($data=null,$queryString=null) { 
		return $this->doRequest ('getList',$data,$queryString);
	}
	/**
	 * Retrieve the user picture stream.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/users/{user}/picture</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _getPicture ($data=null,$queryString=null) { 
		return $this->doRequest ('getPicture',$data,$queryString);
	}
	/**
	 * Get the restore area for this user
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\restoreArea
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/users/{user}/restorearea</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _getRestoreArea ($data=null,$queryString=null) { 
		return $this->doRequest ('getRestoreArea',$data,$queryString);
	}
	/**
	 * Get Shared Folder information for the specified user.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/users/{user}/sharedfolders</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _getSharedFolders ($data=null,$queryString=null) { 
		return $this->doRequest ('getSharedFolders',$data,$queryString);
	}
	/**
	 * Run mailbox maintenance for this user
	 * @internal
	 *
	 * @param apiResult|xsd\checkOptions $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/users/{user}/gwcheck</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _gwcheck ($data=null,$queryString=null) { 
		return $this->doRequest ('gwcheck',$data,$queryString);
	}
	/**
	 * Retrieve statistical information about the objects related to this user.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/users/{user}/info</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _info ($data=null,$queryString=null) { 
		return $this->doRequest ('info',$data,$queryString);
	}
	/**
	 * Publish this users details back to the LDAP directory
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\syncResult
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/users/{user}/directorylink/publish</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _ldapPublishUser ($data=null,$queryString=null) { 
		return $this->doRequest ('ldapPublishUser',$data,$queryString);
	}
	/**
	 * Update user from their LDAP directory object
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\syncResult
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/users/{user}/directorylink/sync</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _ldapSyncUser ($data=null,$queryString=null) { 
		return $this->doRequest ('ldapSyncUser',$data,$queryString);
	}
	/**
	 * Update a user picture from their LDAP directory object
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\syncResult
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/users/{user}/directorylink/syncpicture</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _ldapSyncUserPicture ($data=null,$queryString=null) { 
		return $this->doRequest ('ldapSyncUserPicture',$data,$queryString);
	}
	/**
	 * Performs a query to find all the aliases for this user
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/users/{user}/aliases</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _listAliases ($data=null,$queryString=null) { 
		return $this->doRequest ('listAliases',$data,$queryString);
	}
	/**
	 * Performs a query to find all the group memberships for this User
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\listResult
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/users/{user}/groupmemberships</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _listGroupMemberships ($data=null,$queryString=null) { 
		return $this->doRequest ('listGroupMemberships',$data,$queryString);
	}
	/**
	 * Convert an XML options file into a REST check options object
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\checkOptions
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/users/{user}/gwcheck/load</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _loadCheckOptions ($data=null,$queryString=null) { 
		return $this->doRequest ('loadCheckOptions',$data,$queryString);
	}
	/**
	 * Performs a query to find all the Nicknames for this user
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/users/{user}/nicknames</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _nicknames ($data=null,$queryString=null) { 
		return $this->doRequest ('nicknames',$data,$queryString);
	}
	/**
	 * Get a specific <a href="#User">User</a> given the name
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/users/{user}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Update the directory link (i.e. associate) for this user
	 * @internal
	 *
	 * @param apiResult|xsd\directoryLink $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/users/{user}/directorylink</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _putDirectoryLink ($data=null,$queryString=null) { 
		return $this->doRequest ('putDirectoryLink',$data,$queryString);
	}
	/**
	 * Set shared folder information for a user. This may include setting an expiration date for the user.
	 * @internal
	 *
	 * @param apiResult|xsd\sharedFolderAction $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/users/{user}/sharedfolders</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _putSharedFolders ($data=null,$queryString=null) { 
		return $this->doRequest ('putSharedFolders',$data,$queryString);
	}
	/**
	 * Remove from the list of groups administered by this user.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/postoffices/{postoffice}/users/{user}/administeredgroups/{group}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
	 */
	protected function _removeAdministeredGroup ($data=null,$queryString=null) { 
		return $this->doRequest ('removeAdministeredGroup',$data,$queryString);
	}
	/**
	 * Remove a gateway alias for this user identified by it's gateway type.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/postoffices/{postoffice}/users/{user}/aliases/{type}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: type => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _removeAlias ($data=null,$queryString=null) { 
		return $this->doRequest ('removeAlias',$data,$queryString);
	}
	/**
	 * Remove all group memberships for this user.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/postoffices/{postoffice}/users/{user}/groupmemberships</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _removeAllGroupMemberships ($data=null,$queryString=null) { 
		return $this->doRequest ('removeAllGroupMemberships',$data,$queryString);
	}
	/**
	 * Remove from the list of group memberships for this user.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/postoffices/{postoffice}/users/{user}/groupmemberships/{groupid}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: groupid => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _removeGroupMembership ($data=null,$queryString=null) { 
		return $this->doRequest ('removeGroupMembership',$data,$queryString);
	}
	/**
	 * Replicate this user through the system.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/users/{user}/replicate</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _replicate ($data=null,$queryString=null) { 
		return $this->doRequest ('replicate',$data,$queryString);
	}
	/**
	 * Performs a query to find all the Resources for this user
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\listResult
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/users/{user}/resources</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _resources ($data=null,$queryString=null) { 
		return $this->doRequest ('resources',$data,$queryString);
	}
	/**
	 * Sends a command to the Post Office Agent to perform a Restore operation for the specified user.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/users/{user}/restoremailbox</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _restoreMailbox ($data=null,$queryString=null) { 
		return $this->doRequest ('restoreMailbox',$data,$queryString);
	}
	/**
	 * Convert REST check options into an options XML file suitable for use with GWCHECK
	 * @internal
	 *
	 * @param apiResult|xsd\checkOptions $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/users/{user}/gwcheck/save</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _saveCheckOptions ($data=null,$queryString=null) { 
		return $this->doRequest ('saveCheckOptions',$data,$queryString);
	}
	/**
	 * Update the Client Options under a specific User
	 * @internal
	 *
	 * @param apiResult|xsd\clientOptions $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/users/{user}/clientoptions</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _setClientOptions ($data=null,$queryString=null) { 
		return $this->doRequest ('setClientOptions',$data,$queryString);
	}
	/**
	 * Set the picture for the user
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/users/{user}/picture</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _setPicture ($data=null,$queryString=null) { 
		return $this->doRequest ('setPicture',$data,$queryString);
	}
	/**
	 * Update a User given the data. Required fields: domainName, postOfficeName, fileId, name
	 * @internal
	 *
	 * @param apiResult|xsd\user $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/users/{user}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _update ($data=null,$queryString=null) { 
		return $this->doRequest ('update',$data,$queryString);
	}
	/**
	 * Update the list of groups administered by this user.
	 * @internal
	 *
	 * @param apiResult|xsd\batchupdate $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\listUpdateResult
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/users/{user}/administeredgroups</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _updateAdministeredGroups ($data=null,$queryString=null) { 
		return $this->doRequest ('updateAdministeredGroups',$data,$queryString);
	}
	/**
	 * Update the participation in the specified group for this user.
	 * @internal
	 *
	 * @param apiResult|xsd\membership $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/users/{user}/groupmemberships/{groupid}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: groupid => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _updateGroupMembership ($data=null,$queryString=null) { 
		return $this->doRequest ('updateGroupMembership',$data,$queryString);
	}
	/**
	 * Update the list of group memberships for this user.
	 * @internal
	 *
	 * @param apiResult|xsd\groupMemberListUpdate $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\listUpdateResult
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/users/{user}/groupmemberships</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: user => xs:string : template</p>
	 */
	protected function _updateGroupMemberships ($data=null,$queryString=null) { 
		return $this->doRequest ('updateGroupMemberships',$data,$queryString);
	}
}