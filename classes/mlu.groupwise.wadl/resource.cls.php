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
 * dynamic abstraction for gw-class resource
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed addGroupMembership ( xsd\membership $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/resources/{resource}/groupmemberships</p><p>template-var: postoffice => xs:string : template</p><p>template-var: resource => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed clearDirectoryLink ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/postoffices/{postoffice}/resources/{resource}/directorylink</p><p>template-var: postoffice => xs:string : template</p><p>template-var: resource => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed create ( xsd\resource $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/resources</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/postoffices/{postoffice}/resources/{resource}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: resource => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|xsd\emailAddresses getAllEmailAddresses ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/resources/{resource}/emailaddresses</p><p>template-var: postoffice => xs:string : template</p><p>template-var: resource => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed getClientOptions ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/resources/{resource}/clientoptions</p><p>template-var: postoffice => xs:string : template</p><p>template-var: resource => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 * @method static apiResult|mixed getList ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/resources</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|xsd\restoreArea getRestoreArea ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/resources/{resource}/restorearea</p><p>template-var: postoffice => xs:string : template</p><p>template-var: resource => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|xsd\listResult groupmemberships ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/resources/{resource}/groupmemberships</p><p>template-var: postoffice => xs:string : template</p><p>template-var: resource => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed gwcheck ( xsd\checkOptions $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/resources/{resource}/gwcheck</p><p>template-var: postoffice => xs:string : template</p><p>template-var: resource => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed info ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/resources/{resource}/info</p><p>template-var: postoffice => xs:string : template</p><p>template-var: resource => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|xsd\syncResult ldapPublishUser ( mixed $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/resources/{resource}/directorylink/publish</p><p>template-var: postoffice => xs:string : template</p><p>template-var: resource => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|xsd\checkOptions loadCheckOptions ( mixed $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/resources/{resource}/gwcheck/load</p><p>template-var: postoffice => xs:string : template</p><p>template-var: resource => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed nicknames ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/resources/{resource}/nicknames</p><p>template-var: postoffice => xs:string : template</p><p>template-var: resource => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed object ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/resources/{resource}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: resource => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed removeAllGroupMemberships ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/postoffices/{postoffice}/resources/{resource}/groupmemberships</p><p>template-var: postoffice => xs:string : template</p><p>template-var: resource => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed removeGroupMembership ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/postoffices/{postoffice}/resources/{resource}/groupmemberships/{groupid}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: resource => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: groupid => xs:string : template</p>
 * @method static apiResult|mixed replicate ( mixed $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/resources/{resource}/replicate</p><p>template-var: postoffice => xs:string : template</p><p>template-var: resource => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed restoreMailbox ( mixed $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/resources/{resource}/restoremailbox</p><p>template-var: postoffice => xs:string : template</p><p>template-var: resource => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed saveCheckOptions ( xsd\checkOptions $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/resources/{resource}/gwcheck/save</p><p>template-var: postoffice => xs:string : template</p><p>template-var: resource => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed setClientOptions ( xsd\clientOptions $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/resources/{resource}/clientoptions</p><p>template-var: postoffice => xs:string : template</p><p>template-var: resource => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 * @method static apiResult|mixed update ( xsd\resource $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/resources/{resource}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: resource => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 * @method static apiResult|mixed updateGroupMembership ( xsd\membership $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/resources/{resource}/groupmemberships/{groupid}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: resource => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: groupid => xs:string : template</p>
 * @method static apiResult|xsd\listUpdateResult updateGroupMemberships ( xsd\groupMemberListUpdate $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/resources/{resource}/groupmemberships</p><p>template-var: postoffice => xs:string : template</p><p>template-var: resource => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 */
class resource extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"resource","__isObject":true,"addGroupMembership":{"paramStatic":{"postoffice":"xs:string : template","resource":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/resources\/{resource}\/groupmemberships","action":"POST","doc":"Add a Group Membership for the specified Resource.","requestType":"membership","responseType":null},"clearDirectoryLink":{"paramStatic":{"postoffice":"xs:string : template","resource":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/resources\/{resource}\/directorylink","action":"DELETE","doc":"Delete the directory link for this resource (disassociate).","requestType":null,"responseType":null},"create":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/resources","action":"POST","doc":"Create a Resource with the given data.","requestType":"resource","responseType":null,"__isStatic":"object"},"delete":{"paramStatic":{"postoffice":"xs:string : template","resource":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/resources\/{resource}","action":"DELETE","doc":"Delete a specified Resource given the name.","requestType":null,"responseType":null},"getAllEmailAddresses":{"paramStatic":{"postoffice":"xs:string : template","resource":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/resources\/{resource}\/emailaddresses","action":"GET","doc":"Get the list of allowed email address for this Resource including nickname and gateway alias email addresses.","requestType":null,"responseType":"emailAddresses"},"getClientOptions":{"paramStatic":{"postoffice":"xs:string : template","resource":"xs:string : template","domain":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"domains\/{domain}\/postoffices\/{postoffice}\/resources\/{resource}\/clientoptions","action":"GET","doc":"Get the Client Options for the specified Resource.","requestType":null,"responseType":null},"getList":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/resources","action":"GET","doc":"Get a list of Resources in a specific Post Office. Note: Attribute filtering is supported using this query (for example: <code> ...?attribute=value<\/code>)","requestType":null,"responseType":null,"__isStatic":"object"},"getRestoreArea":{"paramStatic":{"postoffice":"xs:string : template","resource":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/resources\/{resource}\/restorearea","action":"GET","doc":"Get the Restore Area for the specified Resource.","requestType":null,"responseType":"restoreArea"},"groupmemberships":{"paramStatic":{"postoffice":"xs:string : template","resource":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/resources\/{resource}\/groupmemberships","action":"GET","doc":"Get a list of Group Associations for the specified Resource.","requestType":null,"responseType":"listResult"},"gwcheck":{"paramStatic":{"postoffice":"xs:string : template","resource":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/resources\/{resource}\/gwcheck","action":"POST","doc":"Perform mailbox maintenance for this Resource.","requestType":"checkOptions","responseType":null},"info":{"paramStatic":{"postoffice":"xs:string : template","resource":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/resources\/{resource}\/info","action":"GET","doc":"Retrieve statistical information about the specified Resource.","requestType":null,"responseType":null},"ldapPublishUser":{"paramStatic":{"postoffice":"xs:string : template","resource":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/resources\/{resource}\/directorylink\/publish","action":"POST","doc":"Publish this resource\'s details back to the LDAP directory","requestType":null,"responseType":"syncResult","__isStatic":"orphan"},"loadCheckOptions":{"paramStatic":{"postoffice":"xs:string : template","resource":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/resources\/{resource}\/gwcheck\/load","action":"POST","doc":"Convert mailbox maintenance options in XML file format into a REST check options object.","requestType":null,"responseType":"checkOptions","__isStatic":"orphan"},"nicknames":{"paramStatic":{"postoffice":"xs:string : template","resource":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/resources\/{resource}\/nicknames","action":"GET","doc":"Get a list of Nicknames for the specified Resource.","requestType":null,"responseType":null},"object":{"paramStatic":{"postoffice":"xs:string : template","resource":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/resources\/{resource}","action":"GET","doc":"Get a specific Resource given the name","requestType":null,"responseType":null},"removeAllGroupMemberships":{"paramStatic":{"postoffice":"xs:string : template","resource":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/resources\/{resource}\/groupmemberships","action":"DELETE","doc":"Remove all group memberships for this resource.","requestType":null,"responseType":null},"removeGroupMembership":{"paramStatic":{"postoffice":"xs:string : template","resource":"xs:string : template","domain":"xs:string : template","groupid":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/resources\/{resource}\/groupmemberships\/{groupid}","action":"DELETE","doc":"Remove a Group Membership for the specified Resource.","requestType":null,"responseType":null,"__isStatic":"orphan"},"replicate":{"paramStatic":{"postoffice":"xs:string : template","resource":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/resources\/{resource}\/replicate","action":"POST","doc":"Replicate this resource through the system.","requestType":null,"responseType":null},"restoreMailbox":{"paramStatic":{"postoffice":"xs:string : template","resource":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/resources\/{resource}\/restoremailbox","action":"PUT","doc":"Send a restore management command to the Post Office Agent for the specified Resource..","requestType":null,"responseType":null},"saveCheckOptions":{"paramStatic":{"postoffice":"xs:string : template","resource":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/resources\/{resource}\/gwcheck\/save","action":"POST","doc":"Convert mailbox maintenance REST check options object into an options XML file suitable for use with GwCheck.","requestType":"checkOptions","responseType":null,"__isStatic":"orphan"},"setClientOptions":{"paramStatic":{"postoffice":"xs:string : template","resource":"xs:string : template","domain":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"domains\/{domain}\/postoffices\/{postoffice}\/resources\/{resource}\/clientoptions","action":"PUT","doc":"Update the Client Options for the specified Resource.","requestType":"clientOptions","responseType":null},"update":{"paramStatic":{"postoffice":"xs:string : template","resource":"xs:string : template","domain":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"domains\/{domain}\/postoffices\/{postoffice}\/resources\/{resource}","action":"PUT","doc":"Update the specified Resource with the given data.","requestType":"resource","responseType":null},"updateGroupMembership":{"paramStatic":{"postoffice":"xs:string : template","resource":"xs:string : template","domain":"xs:string : template","groupid":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/resources\/{resource}\/groupmemberships\/{groupid}","action":"PUT","doc":"Update a Group Membership for the specified Resource.","requestType":"membership","responseType":null,"__isStatic":"orphan"},"updateGroupMemberships":{"paramStatic":{"postoffice":"xs:string : template","resource":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/resources\/{resource}\/groupmemberships","action":"PUT","doc":"Update the list of Group Memberships for the specified Resource.","requestType":"groupMemberListUpdate","responseType":"listUpdateResult"}}');
	}
	/**
	 * Add a Group Membership for the specified Resource.
	 * @internal
	 *
	 * @param apiResult|xsd\membership $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/resources/{resource}/groupmemberships</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: resource => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _addGroupMembership ($data=null,$queryString=null) { 
		return $this->doRequest ('addGroupMembership',$data,$queryString);
	}
	/**
	 * Delete the directory link for this resource (disassociate).
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/postoffices/{postoffice}/resources/{resource}/directorylink</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: resource => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _clearDirectoryLink ($data=null,$queryString=null) { 
		return $this->doRequest ('clearDirectoryLink',$data,$queryString);
	}
	/**
	 * Create a Resource with the given data.
	 * @internal
	 *
	 * @param apiResult|xsd\resource $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/resources</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _create ($data=null,$queryString=null) { 
		return $this->doRequest ('create',$data,$queryString);
	}
	/**
	 * Delete a specified Resource given the name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/postoffices/{postoffice}/resources/{resource}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: resource => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _delete ($data=null,$queryString=null) { 
		return $this->doRequest ('delete',$data,$queryString);
	}
	/**
	 * Get the list of allowed email address for this Resource including nickname and gateway alias email addresses.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\emailAddresses
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/resources/{resource}/emailaddresses</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: resource => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _getAllEmailAddresses ($data=null,$queryString=null) { 
		return $this->doRequest ('getAllEmailAddresses',$data,$queryString);
	}
	/**
	 * Get the Client Options for the specified Resource.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/resources/{resource}/clientoptions</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: resource => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _getClientOptions ($data=null,$queryString=null) { 
		return $this->doRequest ('getClientOptions',$data,$queryString);
	}
	/**
	 * Get a list of Resources in a specific Post Office. Note: Attribute filtering is supported using this query (for example: <code> ...?attribute=value</code>)
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/resources</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _getList ($data=null,$queryString=null) { 
		return $this->doRequest ('getList',$data,$queryString);
	}
	/**
	 * Get the Restore Area for the specified Resource.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\restoreArea
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/resources/{resource}/restorearea</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: resource => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _getRestoreArea ($data=null,$queryString=null) { 
		return $this->doRequest ('getRestoreArea',$data,$queryString);
	}
	/**
	 * Get a list of Group Associations for the specified Resource.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\listResult
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/resources/{resource}/groupmemberships</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: resource => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _groupmemberships ($data=null,$queryString=null) { 
		return $this->doRequest ('groupmemberships',$data,$queryString);
	}
	/**
	 * Perform mailbox maintenance for this Resource.
	 * @internal
	 *
	 * @param apiResult|xsd\checkOptions $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/resources/{resource}/gwcheck</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: resource => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _gwcheck ($data=null,$queryString=null) { 
		return $this->doRequest ('gwcheck',$data,$queryString);
	}
	/**
	 * Retrieve statistical information about the specified Resource.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/resources/{resource}/info</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: resource => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _info ($data=null,$queryString=null) { 
		return $this->doRequest ('info',$data,$queryString);
	}
	/**
	 * Publish this resource's details back to the LDAP directory
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\syncResult
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/resources/{resource}/directorylink/publish</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: resource => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _ldapPublishUser ($data=null,$queryString=null) { 
		return $this->doRequest ('ldapPublishUser',$data,$queryString);
	}
	/**
	 * Convert mailbox maintenance options in XML file format into a REST check options object.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\checkOptions
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/resources/{resource}/gwcheck/load</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: resource => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _loadCheckOptions ($data=null,$queryString=null) { 
		return $this->doRequest ('loadCheckOptions',$data,$queryString);
	}
	/**
	 * Get a list of Nicknames for the specified Resource.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/resources/{resource}/nicknames</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: resource => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _nicknames ($data=null,$queryString=null) { 
		return $this->doRequest ('nicknames',$data,$queryString);
	}
	/**
	 * Get a specific Resource given the name
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/resources/{resource}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: resource => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Remove all group memberships for this resource.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/postoffices/{postoffice}/resources/{resource}/groupmemberships</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: resource => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _removeAllGroupMemberships ($data=null,$queryString=null) { 
		return $this->doRequest ('removeAllGroupMemberships',$data,$queryString);
	}
	/**
	 * Remove a Group Membership for the specified Resource.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/postoffices/{postoffice}/resources/{resource}/groupmemberships/{groupid}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: resource => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: groupid => xs:string : template</p>
	 */
	protected function _removeGroupMembership ($data=null,$queryString=null) { 
		return $this->doRequest ('removeGroupMembership',$data,$queryString);
	}
	/**
	 * Replicate this resource through the system.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/resources/{resource}/replicate</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: resource => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _replicate ($data=null,$queryString=null) { 
		return $this->doRequest ('replicate',$data,$queryString);
	}
	/**
	 * Send a restore management command to the Post Office Agent for the specified Resource..
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/resources/{resource}/restoremailbox</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: resource => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _restoreMailbox ($data=null,$queryString=null) { 
		return $this->doRequest ('restoreMailbox',$data,$queryString);
	}
	/**
	 * Convert mailbox maintenance REST check options object into an options XML file suitable for use with GwCheck.
	 * @internal
	 *
	 * @param apiResult|xsd\checkOptions $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/resources/{resource}/gwcheck/save</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: resource => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _saveCheckOptions ($data=null,$queryString=null) { 
		return $this->doRequest ('saveCheckOptions',$data,$queryString);
	}
	/**
	 * Update the Client Options for the specified Resource.
	 * @internal
	 *
	 * @param apiResult|xsd\clientOptions $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/resources/{resource}/clientoptions</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: resource => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _setClientOptions ($data=null,$queryString=null) { 
		return $this->doRequest ('setClientOptions',$data,$queryString);
	}
	/**
	 * Update the specified Resource with the given data.
	 * @internal
	 *
	 * @param apiResult|xsd\resource $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/resources/{resource}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: resource => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _update ($data=null,$queryString=null) { 
		return $this->doRequest ('update',$data,$queryString);
	}
	/**
	 * Update a Group Membership for the specified Resource.
	 * @internal
	 *
	 * @param apiResult|xsd\membership $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/resources/{resource}/groupmemberships/{groupid}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: resource => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: groupid => xs:string : template</p>
	 */
	protected function _updateGroupMembership ($data=null,$queryString=null) { 
		return $this->doRequest ('updateGroupMembership',$data,$queryString);
	}
	/**
	 * Update the list of Group Memberships for the specified Resource.
	 * @internal
	 *
	 * @param apiResult|xsd\groupMemberListUpdate $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\listUpdateResult
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/resources/{resource}/groupmemberships</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: resource => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _updateGroupMemberships ($data=null,$queryString=null) { 
		return $this->doRequest ('updateGroupMemberships',$data,$queryString);
	}
}