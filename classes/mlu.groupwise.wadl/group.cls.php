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
 * dynamic abstraction for gw-class group
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed addGroupMembership ( xsd\membership $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/groups/{group}/groupmemberships</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|mixed addMember ( xsd\member $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/groups/{group}/members</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|mixed clearDirectoryLink ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/postoffices/{postoffice}/groups/{group}/directorylink</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|mixed create ( xsd\group $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/groups</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/postoffices/{postoffice}/groups/{group}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|xsd\emailAddresses getAllEmailAddresses ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/groups/{group}/emailaddresses</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|xsd\directoryLink getDirectoryLink ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/groups/{group}/directorylink</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|mixed getList ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/groups</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed getMember ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/groups/{group}/members/{member}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: member => xs:string : template</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|xsd\listResult groupmemberships ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/groups/{group}/groupmemberships</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|mixed info ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/groups/{group}/info</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|xsd\syncResult ldapPublishUser ( mixed $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/groups/{group}/directorylink/publish</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|xsd\syncResult ldapSyncUser ( mixed $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/groups/{group}/directorylink/sync</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|mixed listAccessControl ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/groups/{group}/acl</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|mixed listMembers ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/groups/{group}/members</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|mixed members_csv ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/groups/{group}/members.csv</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|mixed nicknames ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/groups/{group}/nicknames</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|mixed object ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/groups/{group}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|mixed putDirectoryLink ( xsd\directoryLink $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/groups/{group}/directorylink</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|mixed removeAllGroupMemberships ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/postoffices/{postoffice}/groups/{group}/groupmemberships</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|mixed removeAllMembers ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/postoffices/{postoffice}/groups/{group}/members</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|mixed removeGroupMembership ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/postoffices/{postoffice}/groups/{group}/groupmemberships/{groupid}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: groupid => xs:string : template</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|mixed removeMember ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/postoffices/{postoffice}/groups/{group}/members/{member}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: member => xs:string : template</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|mixed replicate ( mixed $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/groups/{group}/replicate</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|mixed update ( xsd\group $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/groups/{group}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: group => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 * @method static apiResult|mixed updateAccessControl ( xsd\accessControlListUpdate $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/groups/{group}/acl</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|mixed updateGroupMembership ( xsd\membership $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/groups/{group}/groupmemberships/{groupid}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: groupid => xs:string : template</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|xsd\listUpdateResult updateGroupMemberships ( xsd\groupMemberListUpdate $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/groups/{group}/groupmemberships</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|mixed updateMember ( xsd\member $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/groups/{group}/members/{member}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: member => xs:string : template</p><p>template-var: group => xs:string : template</p>
 * @method static apiResult|mixed updateMembers ( xsd\groupMemberListUpdate $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/groups/{group}/members</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: group => xs:string : template</p>
 */
class group extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"group","__isObject":true,"addGroupMembership":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups\/{group}\/groupmemberships","action":"POST","doc":"Add a list of Group Memberships to the specified Group.","requestType":"membership","responseType":null},"addMember":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups\/{group}\/members","action":"POST","doc":"Adds a Group Member to the specified Group. Noe: If the Group Member participation is not specified it will default to PRIMARY.","requestType":"member","responseType":null},"clearDirectoryLink":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups\/{group}\/directorylink","action":"DELETE","doc":"Delete the directory link for this user (disassociate).","requestType":null,"responseType":null},"create":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups","action":"POST","doc":"Create a Group with the given data.","requestType":"group","responseType":null,"__isStatic":"object"},"delete":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups\/{group}","action":"DELETE","doc":"Delete a specified Group given the name.","requestType":null,"responseType":null},"getAllEmailAddresses":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups\/{group}\/emailaddresses","action":"GET","doc":"Get a list of allowed email addresses for this Group including Nickname and Gateway Alias email addresses.","requestType":null,"responseType":"emailAddresses"},"getDirectoryLink":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups\/{group}\/directorylink","action":"GET","doc":"Get the directory link for this user or return 404 Not Found if no link exists.","requestType":null,"responseType":"directoryLink"},"getList":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups","action":"GET","doc":"Get a list of Groups in a specified Post Office.  Note: Attribute filtering is supported using this query (for example: <code> ...?attribute=value<\/code>)","requestType":null,"responseType":null,"__isStatic":"object"},"getMember":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","member":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups\/{group}\/members\/{member}","action":"GET","doc":"Get a specific Group Member for the specified Group.","requestType":null,"responseType":null,"__isStatic":"orphan"},"groupmemberships":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups\/{group}\/groupmemberships","action":"GET","doc":"Get a list of Groups that the specified Group is a member of","requestType":null,"responseType":"listResult"},"info":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups\/{group}\/info","action":"GET","doc":"Retrieve statistical information about the specified Group.","requestType":null,"responseType":null},"ldapPublishUser":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups\/{group}\/directorylink\/publish","action":"POST","doc":"Publish this users details back to the LDAP directory","requestType":null,"responseType":"syncResult","__isStatic":"orphan"},"ldapSyncUser":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups\/{group}\/directorylink\/sync","action":"POST","doc":"Update user from their LDAP directory object","requestType":null,"responseType":"syncResult","__isStatic":"orphan"},"listAccessControl":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups\/{group}\/acl","action":"GET","doc":"Get a list of Access Control objects for the specified Group.","requestType":null,"responseType":null},"listMembers":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups\/{group}\/members","action":"GET","doc":"Get a list of Group Members for the specified Group.","requestType":null,"responseType":null},"members_csv":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups\/{group}\/members.csv","action":"GET","doc":"Get a list of Group Members for the specified Group.","requestType":null,"responseType":null},"nicknames":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups\/{group}\/nicknames","action":"GET","doc":"Get a list of Nicknames for the specified Group.","requestType":null,"responseType":null},"object":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups\/{group}","action":"GET","doc":"Get a specific Group given the name","requestType":null,"responseType":null},"putDirectoryLink":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups\/{group}\/directorylink","action":"PUT","doc":"Update the directory link (i.e. associate) for this user","requestType":"directoryLink","responseType":null},"removeAllGroupMemberships":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups\/{group}\/groupmemberships","action":"DELETE","doc":"Remove all group memberships for this group.","requestType":null,"responseType":null},"removeAllMembers":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups\/{group}\/members","action":"DELETE","doc":"Delete all members of a group","requestType":null,"responseType":null},"removeGroupMembership":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","groupid":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups\/{group}\/groupmemberships\/{groupid}","action":"DELETE","doc":"Remove a Group Membership for the specified Group.","requestType":null,"responseType":null,"__isStatic":"orphan"},"removeMember":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","member":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups\/{group}\/members\/{member}","action":"DELETE","doc":"Remove a Group Member from the specified Group.","requestType":null,"responseType":null,"__isStatic":"orphan"},"replicate":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups\/{group}\/replicate","action":"POST","doc":"Replicate this group through the system.","requestType":null,"responseType":null},"update":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","group":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups\/{group}","action":"PUT","doc":"Update the specified Group with the given data.","requestType":"group","responseType":null},"updateAccessControl":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups\/{group}\/acl","action":"PUT","doc":"Update the Access Control list for the specified Group.","requestType":"accessControlListUpdate","responseType":null},"updateGroupMembership":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","groupid":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups\/{group}\/groupmemberships\/{groupid}","action":"PUT","doc":"Update a Group Membership for the specified Group.","requestType":"membership","responseType":null,"__isStatic":"orphan"},"updateGroupMemberships":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups\/{group}\/groupmemberships","action":"PUT","doc":"Update the list of Group Memberships for this group.","requestType":"groupMemberListUpdate","responseType":"listUpdateResult"},"updateMember":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","member":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups\/{group}\/members\/{member}","action":"PUT","doc":"Update the participation of a Group Member. Note: The Group Member id and participation must be specified.","requestType":"member","responseType":null,"__isStatic":"orphan"},"updateMembers":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","group":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/groups\/{group}\/members","action":"PUT","doc":"Update a list of Group Memberships for the specified Group.","requestType":"groupMemberListUpdate","responseType":null}}');
	}
	/**
	 * Add a list of Group Memberships to the specified Group.
	 * @internal
	 *
	 * @param apiResult|xsd\membership $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/groups/{group}/groupmemberships</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
	 */
	protected function _addGroupMembership ($data=null,$queryString=null) { 
		return $this->doRequest ('addGroupMembership',$data,$queryString);
	}
	/**
	 * Adds a Group Member to the specified Group. Noe: If the Group Member participation is not specified it will default to PRIMARY.
	 * @internal
	 *
	 * @param apiResult|xsd\member $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/groups/{group}/members</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
	 */
	protected function _addMember ($data=null,$queryString=null) { 
		return $this->doRequest ('addMember',$data,$queryString);
	}
	/**
	 * Delete the directory link for this user (disassociate).
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/postoffices/{postoffice}/groups/{group}/directorylink</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
	 */
	protected function _clearDirectoryLink ($data=null,$queryString=null) { 
		return $this->doRequest ('clearDirectoryLink',$data,$queryString);
	}
	/**
	 * Create a Group with the given data.
	 * @internal
	 *
	 * @param apiResult|xsd\group $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/groups</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _create ($data=null,$queryString=null) { 
		return $this->doRequest ('create',$data,$queryString);
	}
	/**
	 * Delete a specified Group given the name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/postoffices/{postoffice}/groups/{group}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
	 */
	protected function _delete ($data=null,$queryString=null) { 
		return $this->doRequest ('delete',$data,$queryString);
	}
	/**
	 * Get a list of allowed email addresses for this Group including Nickname and Gateway Alias email addresses.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\emailAddresses
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/groups/{group}/emailaddresses</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
	 */
	protected function _getAllEmailAddresses ($data=null,$queryString=null) { 
		return $this->doRequest ('getAllEmailAddresses',$data,$queryString);
	}
	/**
	 * Get the directory link for this user or return 404 Not Found if no link exists.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\directoryLink
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/groups/{group}/directorylink</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
	 */
	protected function _getDirectoryLink ($data=null,$queryString=null) { 
		return $this->doRequest ('getDirectoryLink',$data,$queryString);
	}
	/**
	 * Get a list of Groups in a specified Post Office.  Note: Attribute filtering is supported using this query (for example: <code> ...?attribute=value</code>)
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/groups</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _getList ($data=null,$queryString=null) { 
		return $this->doRequest ('getList',$data,$queryString);
	}
	/**
	 * Get a specific Group Member for the specified Group.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/groups/{group}/members/{member}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: member => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
	 */
	protected function _getMember ($data=null,$queryString=null) { 
		return $this->doRequest ('getMember',$data,$queryString);
	}
	/**
	 * Get a list of Groups that the specified Group is a member of
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\listResult
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/groups/{group}/groupmemberships</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
	 */
	protected function _groupmemberships ($data=null,$queryString=null) { 
		return $this->doRequest ('groupmemberships',$data,$queryString);
	}
	/**
	 * Retrieve statistical information about the specified Group.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/groups/{group}/info</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
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
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/groups/{group}/directorylink/publish</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
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
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/groups/{group}/directorylink/sync</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
	 */
	protected function _ldapSyncUser ($data=null,$queryString=null) { 
		return $this->doRequest ('ldapSyncUser',$data,$queryString);
	}
	/**
	 * Get a list of Access Control objects for the specified Group.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/groups/{group}/acl</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
	 */
	protected function _listAccessControl ($data=null,$queryString=null) { 
		return $this->doRequest ('listAccessControl',$data,$queryString);
	}
	/**
	 * Get a list of Group Members for the specified Group.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/groups/{group}/members</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
	 */
	protected function _listMembers ($data=null,$queryString=null) { 
		return $this->doRequest ('listMembers',$data,$queryString);
	}
	/**
	 * Get a list of Group Members for the specified Group.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/groups/{group}/members.csv</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
	 */
	protected function _members_csv ($data=null,$queryString=null) { 
		return $this->doRequest ('members_csv',$data,$queryString);
	}
	/**
	 * Get a list of Nicknames for the specified Group.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/groups/{group}/nicknames</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
	 */
	protected function _nicknames ($data=null,$queryString=null) { 
		return $this->doRequest ('nicknames',$data,$queryString);
	}
	/**
	 * Get a specific Group given the name
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/groups/{group}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
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
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/groups/{group}/directorylink</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
	 */
	protected function _putDirectoryLink ($data=null,$queryString=null) { 
		return $this->doRequest ('putDirectoryLink',$data,$queryString);
	}
	/**
	 * Remove all group memberships for this group.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/postoffices/{postoffice}/groups/{group}/groupmemberships</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
	 */
	protected function _removeAllGroupMemberships ($data=null,$queryString=null) { 
		return $this->doRequest ('removeAllGroupMemberships',$data,$queryString);
	}
	/**
	 * Delete all members of a group
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/postoffices/{postoffice}/groups/{group}/members</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
	 */
	protected function _removeAllMembers ($data=null,$queryString=null) { 
		return $this->doRequest ('removeAllMembers',$data,$queryString);
	}
	/**
	 * Remove a Group Membership for the specified Group.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/postoffices/{postoffice}/groups/{group}/groupmemberships/{groupid}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: groupid => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
	 */
	protected function _removeGroupMembership ($data=null,$queryString=null) { 
		return $this->doRequest ('removeGroupMembership',$data,$queryString);
	}
	/**
	 * Remove a Group Member from the specified Group.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/postoffices/{postoffice}/groups/{group}/members/{member}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: member => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
	 */
	protected function _removeMember ($data=null,$queryString=null) { 
		return $this->doRequest ('removeMember',$data,$queryString);
	}
	/**
	 * Replicate this group through the system.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/groups/{group}/replicate</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
	 */
	protected function _replicate ($data=null,$queryString=null) { 
		return $this->doRequest ('replicate',$data,$queryString);
	}
	/**
	 * Update the specified Group with the given data.
	 * @internal
	 *
	 * @param apiResult|xsd\group $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/groups/{group}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _update ($data=null,$queryString=null) { 
		return $this->doRequest ('update',$data,$queryString);
	}
	/**
	 * Update the Access Control list for the specified Group.
	 * @internal
	 *
	 * @param apiResult|xsd\accessControlListUpdate $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/groups/{group}/acl</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
	 */
	protected function _updateAccessControl ($data=null,$queryString=null) { 
		return $this->doRequest ('updateAccessControl',$data,$queryString);
	}
	/**
	 * Update a Group Membership for the specified Group.
	 * @internal
	 *
	 * @param apiResult|xsd\membership $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/groups/{group}/groupmemberships/{groupid}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: groupid => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
	 */
	protected function _updateGroupMembership ($data=null,$queryString=null) { 
		return $this->doRequest ('updateGroupMembership',$data,$queryString);
	}
	/**
	 * Update the list of Group Memberships for this group.
	 * @internal
	 *
	 * @param apiResult|xsd\groupMemberListUpdate $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\listUpdateResult
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/groups/{group}/groupmemberships</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
	 */
	protected function _updateGroupMemberships ($data=null,$queryString=null) { 
		return $this->doRequest ('updateGroupMemberships',$data,$queryString);
	}
	/**
	 * Update the participation of a Group Member. Note: The Group Member id and participation must be specified.
	 * @internal
	 *
	 * @param apiResult|xsd\member $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/groups/{group}/members/{member}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: member => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
	 */
	protected function _updateMember ($data=null,$queryString=null) { 
		return $this->doRequest ('updateMember',$data,$queryString);
	}
	/**
	 * Update a list of Group Memberships for the specified Group.
	 * @internal
	 *
	 * @param apiResult|xsd\groupMemberListUpdate $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/groups/{group}/members</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: group => xs:string : template</p>
	 */
	protected function _updateMembers ($data=null,$queryString=null) { 
		return $this->doRequest ('updateMembers',$data,$queryString);
	}
}