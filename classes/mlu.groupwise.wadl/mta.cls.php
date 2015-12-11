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
 * dynamic abstraction for gw-class mta
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed addScheduledEvent ( mixed $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/mta/refevents/{eventName}</p><p>template-var: domain => xs:string : template</p><p>template-var: eventName => xs:string : template</p>
 * @method static apiResult|xsd\restFile browse ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/mta/files{folders: (/.*)?}</p><p>template-var: folders => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>query-String: queryFolders => xs:boolean : query</p><p>query-String: queryFiles => xs:boolean : query</p><p>query-String: queryFilter => xs:string : query</p><p>query-String: filterType => xs:string : query</p>
 * @method static apiResult|xsd\warnings delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/mta</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|xsd\sslfiles generateCert ( xsd\csrParams $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/mta/sslcerts</p><p>template-var: domain => xs:string : template</p><p>query-String: commit => xs:boolean : query</p>
 * @method static apiResult|mixed listScheduledEvents ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/mta/refevents</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed manageAgent ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/mta/manage</p><p>template-var: domain => xs:string : template</p><p>query-String: command => xs:string : query</p>
 * @method static apiResult|mixed object ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/mta</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed removeScheduledEvent ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/mta/refevents/{eventName}</p><p>template-var: domain => xs:string : template</p><p>template-var: eventName => xs:string : template</p>
 * @method static apiResult|mixed status ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/mta/status</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed update ( xsd\mta $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/mta</p><p>template-var: domain => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 * @method static apiResult|mixed updateScheduledEvents ( xsd\batchupdate $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/mta/refevents</p><p>template-var: domain => xs:string : template</p>
 */
class mta extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"mta","__isObject":true,"addScheduledEvent":{"paramStatic":{"domain":"xs:string : template","eventName":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/mta\/refevents\/{eventName}","action":"PUT","doc":"Add an association for the specified Scheduled Event to this MTA.","requestType":null,"responseType":null,"__isStatic":"orphan"},"browse":{"paramStatic":{"folders":"xs:string : template","domain":"xs:string : template"},"paramQuery":{"queryFolders":"xs:boolean : query","queryFiles":"xs:boolean : query","queryFilter":"xs:string : query","filterType":"xs:string : query"},"path":"domains\/{domain}\/mta\/files{folders: (\/.*)?}","action":"GET","doc":"Get a list of folders and files that exist in the specified folder","requestType":null,"responseType":"restFile"},"delete":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/mta","action":"DELETE","doc":"Delete s specific MTA given the name.","requestType":null,"responseType":"warnings"},"generateCert":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{"commit":"xs:boolean : query"},"path":"domains\/{domain}\/mta\/sslcerts","action":"POST","doc":"Generate new SSL cert for this MTA using the admin service certificate authority.","requestType":"csrParams","responseType":"sslfiles"},"listScheduledEvents":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/mta\/refevents","action":"GET","doc":"Get a list of Scheduled Events for the specified MTA.","requestType":null,"responseType":null},"manageAgent":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{"command":"xs:string : query"},"path":"domains\/{domain}\/mta\/manage","action":"GET","doc":"Send a management command to a specific MTA.","requestType":null,"responseType":null},"object":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/mta","action":"GET","doc":"Get the MTA for a Domain given the name.","requestType":null,"responseType":null},"removeScheduledEvent":{"paramStatic":{"domain":"xs:string : template","eventName":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/mta\/refevents\/{eventName}","action":"DELETE","doc":"Remove the association for the specified Scheduled Event from this MTA.","requestType":null,"responseType":null,"__isStatic":"orphan"},"status":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/mta\/status","action":"GET","doc":"Get the HTTP Status of this MTA","requestType":null,"responseType":null},"update":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"domains\/{domain}\/mta","action":"PUT","doc":"Update the specified MTA with the given the data. An MTA will be created if one does not exist.","requestType":"mta","responseType":null},"updateScheduledEvents":{"paramStatic":{"domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/mta\/refevents","action":"PUT","doc":"Update a list of Scheduled Event associations to this MTA","requestType":"batchupdate","responseType":null}}');
	}
	/**
	 * Add an association for the specified Scheduled Event to this MTA.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/mta/refevents/{eventName}</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: eventName => xs:string : template</p>
	 */
	protected function _addScheduledEvent ($data=null,$queryString=null) { 
		return $this->doRequest ('addScheduledEvent',$data,$queryString);
	}
	/**
	 * Get a list of folders and files that exist in the specified folder
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\restFile
	 *
	 * <p>request: GET domains/{domain}/mta/files{folders: (/.*)?}</p>
	 * <p>template-var: folders => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>query-String: queryFolders => xs:boolean : query</p>
	 * <p>query-String: queryFiles => xs:boolean : query</p>
	 * <p>query-String: queryFilter => xs:string : query</p>
	 * <p>query-String: filterType => xs:string : query</p>
	 */
	protected function _browse ($data=null,$queryString=null) { 
		return $this->doRequest ('browse',$data,$queryString);
	}
	/**
	 * Delete s specific MTA given the name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\warnings
	 *
	 * <p>request: DELETE domains/{domain}/mta</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _delete ($data=null,$queryString=null) { 
		return $this->doRequest ('delete',$data,$queryString);
	}
	/**
	 * Generate new SSL cert for this MTA using the admin service certificate authority.
	 * @internal
	 *
	 * @param apiResult|xsd\csrParams $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\sslfiles
	 *
	 * <p>request: POST domains/{domain}/mta/sslcerts</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>query-String: commit => xs:boolean : query</p>
	 */
	protected function _generateCert ($data=null,$queryString=null) { 
		return $this->doRequest ('generateCert',$data,$queryString);
	}
	/**
	 * Get a list of Scheduled Events for the specified MTA.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/mta/refevents</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _listScheduledEvents ($data=null,$queryString=null) { 
		return $this->doRequest ('listScheduledEvents',$data,$queryString);
	}
	/**
	 * Send a management command to a specific MTA.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/mta/manage</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>query-String: command => xs:string : query</p>
	 */
	protected function _manageAgent ($data=null,$queryString=null) { 
		return $this->doRequest ('manageAgent',$data,$queryString);
	}
	/**
	 * Get the MTA for a Domain given the name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/mta</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Remove the association for the specified Scheduled Event from this MTA.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/mta/refevents/{eventName}</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: eventName => xs:string : template</p>
	 */
	protected function _removeScheduledEvent ($data=null,$queryString=null) { 
		return $this->doRequest ('removeScheduledEvent',$data,$queryString);
	}
	/**
	 * Get the HTTP Status of this MTA
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/mta/status</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _status ($data=null,$queryString=null) { 
		return $this->doRequest ('status',$data,$queryString);
	}
	/**
	 * Update the specified MTA with the given the data. An MTA will be created if one does not exist.
	 * @internal
	 *
	 * @param apiResult|xsd\mta $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/mta</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _update ($data=null,$queryString=null) { 
		return $this->doRequest ('update',$data,$queryString);
	}
	/**
	 * Update a list of Scheduled Event associations to this MTA
	 * @internal
	 *
	 * @param apiResult|xsd\batchupdate $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/mta/refevents</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _updateScheduledEvents ($data=null,$queryString=null) { 
		return $this->doRequest ('updateScheduledEvents',$data,$queryString);
	}
}