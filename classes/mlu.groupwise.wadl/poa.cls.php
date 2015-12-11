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
 * dynamic abstraction for gw-class poa
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed addScheduledEvent ( mixed $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/poas/{poa}/refevents/{eventName}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: poa => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: eventName => xs:string : template</p>
 * @method static apiResult|xsd\restFile browse ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/poas/{poa}/files{folders: (/.*)?}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: poa => xs:string : template</p><p>template-var: folders => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>query-String: queryFolders => xs:boolean : query</p><p>query-String: queryFiles => xs:boolean : query</p><p>query-String: queryFilter => xs:string : query</p><p>query-String: filterType => xs:string : query</p>
 * @method static apiResult|mixed create ( xsd\poa $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/poas</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|xsd\warnings delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/postoffices/{postoffice}/poas/{poa}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: poa => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|xsd\sslfiles generateCert ( xsd\csrParams $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/poas/{poa}/sslcerts</p><p>template-var: postoffice => xs:string : template</p><p>template-var: poa => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>query-String: commit => xs:boolean : query</p>
 * @method static apiResult|mixed getList ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/poas</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed listScheduledEvents ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/poas/{poa}/refevents</p><p>template-var: postoffice => xs:string : template</p><p>template-var: poa => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed manageAgent ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/poas/{poa}/manage</p><p>template-var: postoffice => xs:string : template</p><p>template-var: poa => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>query-String: command => xs:string : query</p>
 * @method static apiResult|mixed object ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/poas/{poa}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: poa => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed removeScheduledEvent ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/postoffices/{postoffice}/poas/{poa}/refevents/{eventName}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: poa => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: eventName => xs:string : template</p>
 * @method static apiResult|mixed status ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/poas/{poa}/status</p><p>template-var: postoffice => xs:string : template</p><p>template-var: poa => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed update ( xsd\poa $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/poas/{poa}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: poa => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 * @method static apiResult|mixed updateScheduledEvents ( xsd\batchupdate $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/poas/{poa}/refevents</p><p>template-var: postoffice => xs:string : template</p><p>template-var: poa => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 */
class poa extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"poa","__isObject":true,"addScheduledEvent":{"paramStatic":{"postoffice":"xs:string : template","poa":"xs:string : template","domain":"xs:string : template","eventName":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/poas\/{poa}\/refevents\/{eventName}","action":"PUT","doc":"Add an association for the specified Scheduled Event to this Post Office Agent","requestType":null,"responseType":null,"__isStatic":"orphan"},"browse":{"paramStatic":{"postoffice":"xs:string : template","poa":"xs:string : template","folders":"xs:string : template","domain":"xs:string : template"},"paramQuery":{"queryFolders":"xs:boolean : query","queryFiles":"xs:boolean : query","queryFilter":"xs:string : query","filterType":"xs:string : query"},"path":"domains\/{domain}\/postoffices\/{postoffice}\/poas\/{poa}\/files{folders: (\/.*)?}","action":"GET","doc":"Get a list of folders and files that exist in the specified folder","requestType":null,"responseType":"restFile"},"create":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/poas","action":"POST","doc":"Create a Post Office Agent with the specified data.","requestType":"poa","responseType":null,"__isStatic":"object"},"delete":{"paramStatic":{"postoffice":"xs:string : template","poa":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/poas\/{poa}","action":"DELETE","doc":"Delete a specific Post Office Agent given the name","requestType":null,"responseType":"warnings"},"generateCert":{"paramStatic":{"postoffice":"xs:string : template","poa":"xs:string : template","domain":"xs:string : template"},"paramQuery":{"commit":"xs:boolean : query"},"path":"domains\/{domain}\/postoffices\/{postoffice}\/poas\/{poa}\/sslcerts","action":"POST","doc":"Generate new SSL cert for this POA using the admin service certificate authority.","requestType":"csrParams","responseType":"sslfiles"},"getList":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/poas","action":"GET","doc":"Get a list of Post Office Agents in a specific Post Office. Note: Attribute filtering is supported using this query (for example: <code> ...?attribute=value<\/code>)","requestType":null,"responseType":null,"__isStatic":"object"},"listScheduledEvents":{"paramStatic":{"postoffice":"xs:string : template","poa":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/poas\/{poa}\/refevents","action":"GET","doc":"Get a list of Scheduled Events for the specified Post Office Agent.","requestType":null,"responseType":null},"manageAgent":{"paramStatic":{"postoffice":"xs:string : template","poa":"xs:string : template","domain":"xs:string : template"},"paramQuery":{"command":"xs:string : query"},"path":"domains\/{domain}\/postoffices\/{postoffice}\/poas\/{poa}\/manage","action":"GET","doc":"Send a management command to a specific Post Office Agent.","requestType":null,"responseType":null},"object":{"paramStatic":{"postoffice":"xs:string : template","poa":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/poas\/{poa}","action":"GET","doc":"Get a specific Post Office Agent given the name.","requestType":null,"responseType":null},"removeScheduledEvent":{"paramStatic":{"postoffice":"xs:string : template","poa":"xs:string : template","domain":"xs:string : template","eventName":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/poas\/{poa}\/refevents\/{eventName}","action":"DELETE","doc":"Remove the association for the specified Scheduled Event from this Post Office Agent.","requestType":null,"responseType":null,"__isStatic":"orphan"},"status":{"paramStatic":{"postoffice":"xs:string : template","poa":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/poas\/{poa}\/status","action":"GET","doc":"Get the HTTP Status for this POA","requestType":null,"responseType":null},"update":{"paramStatic":{"postoffice":"xs:string : template","poa":"xs:string : template","domain":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"domains\/{domain}\/postoffices\/{postoffice}\/poas\/{poa}","action":"PUT","doc":"Update the specified Post Office Agent with the given data.","requestType":"poa","responseType":null},"updateScheduledEvents":{"paramStatic":{"postoffice":"xs:string : template","poa":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/poas\/{poa}\/refevents","action":"PUT","doc":"Update a list of Scheduled Event associations to this Post Office Agent.","requestType":"batchupdate","responseType":null}}');
	}
	/**
	 * Add an association for the specified Scheduled Event to this Post Office Agent
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/poas/{poa}/refevents/{eventName}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: poa => xs:string : template</p>
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
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/poas/{poa}/files{folders: (/.*)?}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: poa => xs:string : template</p>
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
	 * Create a Post Office Agent with the specified data.
	 * @internal
	 *
	 * @param apiResult|xsd\poa $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/poas</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _create ($data=null,$queryString=null) { 
		return $this->doRequest ('create',$data,$queryString);
	}
	/**
	 * Delete a specific Post Office Agent given the name
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\warnings
	 *
	 * <p>request: DELETE domains/{domain}/postoffices/{postoffice}/poas/{poa}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: poa => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _delete ($data=null,$queryString=null) { 
		return $this->doRequest ('delete',$data,$queryString);
	}
	/**
	 * Generate new SSL cert for this POA using the admin service certificate authority.
	 * @internal
	 *
	 * @param apiResult|xsd\csrParams $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\sslfiles
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/poas/{poa}/sslcerts</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: poa => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>query-String: commit => xs:boolean : query</p>
	 */
	protected function _generateCert ($data=null,$queryString=null) { 
		return $this->doRequest ('generateCert',$data,$queryString);
	}
	/**
	 * Get a list of Post Office Agents in a specific Post Office. Note: Attribute filtering is supported using this query (for example: <code> ...?attribute=value</code>)
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/poas</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _getList ($data=null,$queryString=null) { 
		return $this->doRequest ('getList',$data,$queryString);
	}
	/**
	 * Get a list of Scheduled Events for the specified Post Office Agent.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/poas/{poa}/refevents</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: poa => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _listScheduledEvents ($data=null,$queryString=null) { 
		return $this->doRequest ('listScheduledEvents',$data,$queryString);
	}
	/**
	 * Send a management command to a specific Post Office Agent.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/poas/{poa}/manage</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: poa => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>query-String: command => xs:string : query</p>
	 */
	protected function _manageAgent ($data=null,$queryString=null) { 
		return $this->doRequest ('manageAgent',$data,$queryString);
	}
	/**
	 * Get a specific Post Office Agent given the name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/poas/{poa}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: poa => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Remove the association for the specified Scheduled Event from this Post Office Agent.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/postoffices/{postoffice}/poas/{poa}/refevents/{eventName}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: poa => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: eventName => xs:string : template</p>
	 */
	protected function _removeScheduledEvent ($data=null,$queryString=null) { 
		return $this->doRequest ('removeScheduledEvent',$data,$queryString);
	}
	/**
	 * Get the HTTP Status for this POA
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/poas/{poa}/status</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: poa => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _status ($data=null,$queryString=null) { 
		return $this->doRequest ('status',$data,$queryString);
	}
	/**
	 * Update the specified Post Office Agent with the given data.
	 * @internal
	 *
	 * @param apiResult|xsd\poa $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/poas/{poa}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: poa => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _update ($data=null,$queryString=null) { 
		return $this->doRequest ('update',$data,$queryString);
	}
	/**
	 * Update a list of Scheduled Event associations to this Post Office Agent.
	 * @internal
	 *
	 * @param apiResult|xsd\batchupdate $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/poas/{poa}/refevents</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: poa => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _updateScheduledEvents ($data=null,$queryString=null) { 
		return $this->doRequest ('updateScheduledEvents',$data,$queryString);
	}
}