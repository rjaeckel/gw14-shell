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
 * dynamic abstraction for gw-class node
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|xsd\restFile browse ( mixed $data=null ,string $queryString=null ) <p>request: GET node/files{folders: (/.*)?}</p><p>template-var: folders => xs:string : template</p><p>query-String: queryFolders => xs:boolean : query</p><p>query-String: queryFiles => xs:boolean : query</p><p>query-String: queryFilter => xs:string : query</p><p>query-String: filterType => xs:string : query</p>
 * @method static apiResult|xsd\restFile certificates ( mixed $data=null ,string $queryString=null ) <p>request: GET node/certificates</p><p>query-String: queryFilter => xs:string : query</p>
 * @method static apiResult|xsd\nodeConfig config ( mixed $data=null ,string $queryString=null ) <p>request: GET node/config</p>
 * @method static apiResult|mixed deleteAgent ( mixed $data=null ,string $queryString=null ) <p>request: DELETE node/{systemGuid}/agents/{agent}</p><p>template-var: agent => xs:string : template</p><p>template-var: systemGuid => xs:string : template</p><p>query-String: deleteFiles => xs:boolean : query</p><p>query-String: gwiaSubDir => xs:string : query</p>
 * @method static apiResult|mixed deleteCert ( mixed $data=null ,string $queryString=null ) <p>request: DELETE node/certificates/{filename}</p><p>template-var: filename => xs:string : template</p>
 * @method static apiResult|mixed downloadCert ( mixed $data=null ,string $queryString=null ) <p>request: GET node/certificates/{filename}</p><p>template-var: filename => xs:string : template</p>
 * @method static apiResult|xsd\sslfiles generateAgentCert ( xsd\csrParams $data=null ,string $queryString=null ) <p>request: POST node/{systemGuid}/agents/{agent}/sslcerts</p><p>template-var: agent => xs:string : template</p><p>template-var: systemGuid => xs:string : template</p>
 * @method static apiResult|mixed getDatabaseFile ( mixed $data=null ,string $queryString=null ) <p>request: GET node/databases/{id}/file</p><p>template-var: id => xs:string : template</p>
 * @method static apiResult|xsd\nodeDbInfo getDatabaseInfo ( mixed $data=null ,string $queryString=null ) <p>request: GET node/databases/{id}</p><p>template-var: id => xs:string : template</p><p>query-String: checklock => xs:boolean : query</p>
 * @method static apiResult|xsd\asyncStatus getMaintenanceJob ( mixed $data=null ,string $queryString=null ) <p>request: GET node/maintenance/{id}</p><p>template-var: id => xs:string : template</p>
 * @method static apiResult|xsd\listResult listDatabases ( mixed $data=null ,string $queryString=null ) <p>request: GET node/databases</p>
 * @method static apiResult|xsd\listResult listMaintenanceJobs ( mixed $data=null ,string $queryString=null ) <p>request: GET node/maintenance</p>
 * @method static apiResult|mixed manageService ( mixed $data=null ,string $queryString=null ) <p>request: POST node/manageservice</p>
 * @method static apiResult|mixed putDatabaseFile ( mixed $data=null ,string $queryString=null ) <p>request: PUT node/databases/{id}/file</p><p>template-var: id => xs:string : template</p>
 * @method static apiResult|mixed removeMaintenanceJob ( mixed $data=null ,string $queryString=null ) <p>request: DELETE node/maintenance/{id}</p><p>template-var: id => xs:string : template</p>
 * @method static apiResult|mixed runMaintenance ( xsd\maintenanceOptions $data=null ,string $queryString=null ) <p>request: POST node/maintenance</p>
 * @method static apiResult|mixed storeCert ( mixed $data=null ,string $queryString=null ) <p>request: PUT node/certificates/{filename}</p><p>template-var: filename => xs:string : template</p>
 */
class node extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"node","browse":{"paramStatic":{"folders":"xs:string : template"},"paramQuery":{"queryFolders":"xs:boolean : query","queryFiles":"xs:boolean : query","queryFilter":"xs:string : query","filterType":"xs:string : query"},"path":"node\/files{folders: (\/.*)?}","action":"GET","doc":"Get a list of folders and files that exist in the specified folder","requestType":null,"responseType":"restFile","__isStatic":"orphan"},"certificates":{"paramStatic":{},"paramQuery":{"queryFilter":"xs:string : query"},"path":"node\/certificates","action":"GET","doc":"List the certificate files accessible from this node","requestType":null,"responseType":"restFile","__isStatic":"orphan"},"config":{"paramStatic":{},"paramQuery":{},"path":"node\/config","action":"GET","doc":"Get the current installed configuration.","requestType":null,"responseType":"nodeConfig","__isStatic":"orphan"},"deleteAgent":{"paramStatic":{"agent":"xs:string : template","systemGuid":"xs:string : template"},"paramQuery":{"deleteFiles":"xs:boolean : query","gwiaSubDir":"xs:string : query"},"path":"node\/{systemGuid}\/agents\/{agent}","action":"DELETE","doc":"Function to delete an agent and its associated resources (Windows\/Linux Service, Database Files,    Configuration Entry [for Domains])","requestType":null,"responseType":null,"__isStatic":"orphan"},"deleteCert":{"paramStatic":{"filename":"xs:string : template"},"paramQuery":{},"path":"node\/certificates\/{filename}","action":"DELETE","doc":"Delete a certificate file stored on this node.","requestType":null,"responseType":null,"__isStatic":"orphan"},"downloadCert":{"paramStatic":{"filename":"xs:string : template"},"paramQuery":{},"path":"node\/certificates\/{filename}","action":"GET","doc":"Download a certificate file","requestType":null,"responseType":null,"__isStatic":"orphan"},"generateAgentCert":{"paramStatic":{"agent":"xs:string : template","systemGuid":"xs:string : template"},"paramQuery":{},"path":"node\/{systemGuid}\/agents\/{agent}\/sslcerts","action":"POST","requestType":"csrParams","responseType":"sslfiles","__isStatic":"orphan"},"getDatabaseFile":{"paramStatic":{"id":"xs:string : template"},"paramQuery":{},"path":"node\/databases\/{id}\/file","action":"GET","doc":"Download the existing database.","requestType":null,"responseType":null,"__isStatic":"orphan"},"getDatabaseInfo":{"paramStatic":{"id":"xs:string : template"},"paramQuery":{"checklock":"xs:boolean : query"},"path":"node\/databases\/{id}","action":"GET","doc":"Get the info including the path for the specified database.","requestType":null,"responseType":"nodeDbInfo","__isStatic":"orphan"},"getMaintenanceJob":{"paramStatic":{"id":"xs:string : template"},"paramQuery":{},"path":"node\/maintenance\/{id}","action":"GET","doc":"Retrieve the async status for a maintenance job","requestType":null,"responseType":"asyncStatus","__isStatic":"orphan"},"listDatabases":{"paramStatic":{},"paramQuery":{},"path":"node\/databases","action":"GET","doc":"List all of the databases accessible from this node","requestType":null,"responseType":"listResult","__isStatic":"orphan"},"listMaintenanceJobs":{"paramStatic":{},"paramQuery":{},"path":"node\/maintenance","action":"GET","doc":"Return the list of maintenance jobs currently running on this node","requestType":null,"responseType":"listResult","__isStatic":"orphan"},"manageService":{"paramStatic":{},"paramQuery":{},"path":"node\/manageservice","action":"POST","doc":"Send Manage Service Command  NOTE: This is a service utility method that only gets invoked by the system. Services for managing the remote nodes configuration, files, and calls are available other places in the API. See PoasApi, MtasApi.","requestType":null,"responseType":null,"__isStatic":"orphan"},"putDatabaseFile":{"paramStatic":{"id":"xs:string : template"},"paramQuery":{},"path":"node\/databases\/{id}\/file","action":"PUT","doc":"Update an existing database in place. This requires exclusive access to the database to ensure  that no processes are accessing the database while it is being updated. The new database  will be streamed to a temporary location, validated, and then copied into place. The existing  database will be renamed to [filename].backup.[timestamp].","requestType":null,"responseType":null,"__isStatic":"orphan"},"removeMaintenanceJob":{"paramStatic":{"id":"xs:string : template"},"paramQuery":{},"path":"node\/maintenance\/{id}","action":"DELETE","doc":"Cancel the maintenance job or remove it\'s lingering status object.","requestType":null,"responseType":null,"__isStatic":"orphan"},"runMaintenance":{"paramStatic":{},"paramQuery":{},"path":"node\/maintenance","action":"POST","doc":"Start a new maintenance job on this node. Note that the node api will only  perform jobs local to the node.","requestType":"maintenanceOptions","responseType":null,"__isStatic":"orphan"},"storeCert":{"paramStatic":{"filename":"xs:string : template"},"paramQuery":{},"path":"node\/certificates\/{filename}","action":"PUT","doc":"Store a certificate file to this node possibly overwriting an existing certificate","requestType":null,"responseType":null,"__isStatic":"orphan"}}');
	}
	/**
	 * Get a list of folders and files that exist in the specified folder
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\restFile
	 *
	 * <p>request: GET node/files{folders: (/.*)?}</p>
	 * <p>template-var: folders => xs:string : template</p>
	 * <p>query-String: queryFolders => xs:boolean : query</p>
	 * <p>query-String: queryFiles => xs:boolean : query</p>
	 * <p>query-String: queryFilter => xs:string : query</p>
	 * <p>query-String: filterType => xs:string : query</p>
	 */
	protected function _browse ($data=null,$queryString=null) { 
		return $this->doRequest ('browse',$data,$queryString);
	}
	/**
	 * List the certificate files accessible from this node
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\restFile
	 *
	 * <p>request: GET node/certificates</p>
	 * <p>query-String: queryFilter => xs:string : query</p>
	 */
	protected function _certificates ($data=null,$queryString=null) { 
		return $this->doRequest ('certificates',$data,$queryString);
	}
	/**
	 * Get the current installed configuration.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\nodeConfig
	 *
	 * <p>request: GET node/config</p>
	 */
	protected function _config ($data=null,$queryString=null) { 
		return $this->doRequest ('config',$data,$queryString);
	}
	/**
	 * Function to delete an agent and its associated resources (Windows/Linux Service, Database Files,    Configuration Entry [for Domains])
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE node/{systemGuid}/agents/{agent}</p>
	 * <p>template-var: agent => xs:string : template</p>
	 * <p>template-var: systemGuid => xs:string : template</p>
	 * <p>query-String: deleteFiles => xs:boolean : query</p>
	 * <p>query-String: gwiaSubDir => xs:string : query</p>
	 */
	protected function _deleteAgent ($data=null,$queryString=null) { 
		return $this->doRequest ('deleteAgent',$data,$queryString);
	}
	/**
	 * Delete a certificate file stored on this node.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE node/certificates/{filename}</p>
	 * <p>template-var: filename => xs:string : template</p>
	 */
	protected function _deleteCert ($data=null,$queryString=null) { 
		return $this->doRequest ('deleteCert',$data,$queryString);
	}
	/**
	 * Download a certificate file
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET node/certificates/{filename}</p>
	 * <p>template-var: filename => xs:string : template</p>
	 */
	protected function _downloadCert ($data=null,$queryString=null) { 
		return $this->doRequest ('downloadCert',$data,$queryString);
	}
	/**
	 * @internal
	 *
	 * @param apiResult|xsd\csrParams $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\sslfiles
	 *
	 * <p>request: POST node/{systemGuid}/agents/{agent}/sslcerts</p>
	 * <p>template-var: agent => xs:string : template</p>
	 * <p>template-var: systemGuid => xs:string : template</p>
	 */
	protected function _generateAgentCert ($data=null,$queryString=null) { 
		return $this->doRequest ('generateAgentCert',$data,$queryString);
	}
	/**
	 * Download the existing database.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET node/databases/{id}/file</p>
	 * <p>template-var: id => xs:string : template</p>
	 */
	protected function _getDatabaseFile ($data=null,$queryString=null) { 
		return $this->doRequest ('getDatabaseFile',$data,$queryString);
	}
	/**
	 * Get the info including the path for the specified database.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\nodeDbInfo
	 *
	 * <p>request: GET node/databases/{id}</p>
	 * <p>template-var: id => xs:string : template</p>
	 * <p>query-String: checklock => xs:boolean : query</p>
	 */
	protected function _getDatabaseInfo ($data=null,$queryString=null) { 
		return $this->doRequest ('getDatabaseInfo',$data,$queryString);
	}
	/**
	 * Retrieve the async status for a maintenance job
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\asyncStatus
	 *
	 * <p>request: GET node/maintenance/{id}</p>
	 * <p>template-var: id => xs:string : template</p>
	 */
	protected function _getMaintenanceJob ($data=null,$queryString=null) { 
		return $this->doRequest ('getMaintenanceJob',$data,$queryString);
	}
	/**
	 * List all of the databases accessible from this node
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\listResult
	 *
	 * <p>request: GET node/databases</p>
	 */
	protected function _listDatabases ($data=null,$queryString=null) { 
		return $this->doRequest ('listDatabases',$data,$queryString);
	}
	/**
	 * Return the list of maintenance jobs currently running on this node
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\listResult
	 *
	 * <p>request: GET node/maintenance</p>
	 */
	protected function _listMaintenanceJobs ($data=null,$queryString=null) { 
		return $this->doRequest ('listMaintenanceJobs',$data,$queryString);
	}
	/**
	 * Send Manage Service Command  NOTE: This is a service utility method that only gets invoked by the system. Services for managing the remote nodes configuration, files, and calls are available other places in the API. See PoasApi, MtasApi.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST node/manageservice</p>
	 */
	protected function _manageService ($data=null,$queryString=null) { 
		return $this->doRequest ('manageService',$data,$queryString);
	}
	/**
	 * Update an existing database in place. This requires exclusive access to the database to ensure  that no processes are accessing the database while it is being updated. The new database  will be streamed to a temporary location, validated, and then copied into place. The existing  database will be renamed to [filename].backup.[timestamp].
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT node/databases/{id}/file</p>
	 * <p>template-var: id => xs:string : template</p>
	 */
	protected function _putDatabaseFile ($data=null,$queryString=null) { 
		return $this->doRequest ('putDatabaseFile',$data,$queryString);
	}
	/**
	 * Cancel the maintenance job or remove it's lingering status object.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE node/maintenance/{id}</p>
	 * <p>template-var: id => xs:string : template</p>
	 */
	protected function _removeMaintenanceJob ($data=null,$queryString=null) { 
		return $this->doRequest ('removeMaintenanceJob',$data,$queryString);
	}
	/**
	 * Start a new maintenance job on this node. Note that the node api will only  perform jobs local to the node.
	 * @internal
	 *
	 * @param apiResult|xsd\maintenanceOptions $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST node/maintenance</p>
	 */
	protected function _runMaintenance ($data=null,$queryString=null) { 
		return $this->doRequest ('runMaintenance',$data,$queryString);
	}
	/**
	 * Store a certificate file to this node possibly overwriting an existing certificate
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT node/certificates/{filename}</p>
	 * <p>template-var: filename => xs:string : template</p>
	 */
	protected function _storeCert ($data=null,$queryString=null) { 
		return $this->doRequest ('storeCert',$data,$queryString);
	}
}