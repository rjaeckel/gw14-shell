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
 * dynamic abstraction for gw-class install
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed browse ( mixed $data=null ,string $queryString=null ) <p>request: GET install/files{folders: (/.*)?}</p><p>template-var: folders => xs:string : template</p><p>query-String: queryFolders => xs:boolean : query</p><p>query-String: queryFiles => xs:boolean : query</p><p>query-String: queryFilter => xs:string : query</p><p>query-String: filterType => xs:string : query</p>
 * @method static apiResult|xsd\installToken claimToken ( mixed $data=null ,string $queryString=null ) <p>request: GET install/tokens/{id}</p><p>template-var: id => xs:string : template</p>
 * @method static apiResult|mixed config ( mixed $data=null ,string $queryString=null ) <p>request: GET install/config</p>
 * @method static apiResult|mixed configure ( xsd\sysconfigure $data=null ,string $queryString=null ) <p>request: POST install/configure</p>
 * @method static apiResult|mixed domain ( xsd\dominstall $data=null ,string $queryString=null ) <p>request: POST install/domain</p>
 * @method static apiResult|mixed getDefaultTimezones ( mixed $data=null ,string $queryString=null ) <p>request: GET install/defaulttimezones</p>
 * @method static apiResult|xsd\asyncStatus getInstallJob ( mixed $data=null ,string $queryString=null ) <p>request: GET install/async/{id}</p><p>template-var: id => xs:string : template</p>
 * @method static apiResult|mixed getLanguages ( mixed $data=null ,string $queryString=null ) <p>request: GET install/languages</p>
 * @method static apiResult|mixed getLocaleDefaultTimezoneDescription ( mixed $data=null ,string $queryString=null ) <p>request: GET install/localedefaulttimezone</p>
 * @method static apiResult|xsd\listResult getServices ( mixed $data=null ,string $queryString=null ) <p>request: GET install/services</p>
 * @method static apiResult|xsd\batchResult install ( mixed $data=null ,string $queryString=null ) <p>request: POST install/batch</p>
 * @method static apiResult|mixed issueToken ( mixed $data=null ,string $queryString=null ) <p>request: POST install/tokens</p>
 * @method static apiResult|xsd\listResult listInstallJobs ( mixed $data=null ,string $queryString=null ) <p>request: GET install/async</p>
 * @method static apiResult|mixed lookupDb ( mixed $data=null ,string $queryString=null ) <p>request: GET install/dbinfo</p><p>query-String: path => xs:string : query</p><p>query-String: name => xs:string : query</p>
 * @method static apiResult|mixed postoffice ( xsd\poinstall $data=null ,string $queryString=null ) <p>request: POST install/postoffice</p>
 * @method static apiResult|mixed removeInstallJob ( mixed $data=null ,string $queryString=null ) <p>request: DELETE install/async/{id}</p><p>template-var: id => xs:string : template</p>
 * @method static apiResult|mixed system ( xsd\sysinstall $data=null ,string $queryString=null ) <p>request: POST install/system</p>
 */
class install extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"install","browse":{"paramStatic":{"folders":"xs:string : template"},"paramQuery":{"queryFolders":"xs:boolean : query","queryFiles":"xs:boolean : query","queryFilter":"xs:string : query","filterType":"xs:string : query"},"path":"install\/files{folders: (\/.*)?}","action":"GET","doc":"Get a list of folders and files that exist in the specified folder","requestType":null,"responseType":null,"__isStatic":"orphan"},"claimToken":{"paramStatic":{"id":"xs:string : template"},"paramQuery":{},"path":"install\/tokens\/{id}","action":"GET","doc":"Claim a token or poll it\'s status. <p>    The token must be in the \'authorized\' state    in order to claim. If a token has yet not been authorized then this method will    return 200 OK but return a token that is still in the \'issued\' state. The client    must further poll until the token is authorized and it returned as claimed (i.e.    the \'claimed\' date\/time stamp is set to non-null and the \'secret\' value is set. <\/p> <p>    Once a token is claimed the token id can be used as the basic auth username for    the install API and the \'secret\' can be used as the basic auth password. The    token will be valid for authentication for 1 hour. <\/p>","requestType":null,"responseType":"installToken","__isStatic":"orphan"},"config":{"paramStatic":{},"paramQuery":{},"path":"install\/config","action":"GET","doc":"Get the current install configuration","requestType":null,"responseType":null,"__isStatic":"orphan"},"configure":{"paramStatic":{},"paramQuery":{},"path":"install\/configure","action":"POST","requestType":"sysconfigure","responseType":null,"__isStatic":"orphan"},"domain":{"paramStatic":{},"paramQuery":{},"path":"install\/domain","action":"POST","requestType":"dominstall","responseType":null,"__isStatic":"orphan"},"getDefaultTimezones":{"paramStatic":{},"paramQuery":{},"path":"install\/defaulttimezones","action":"GET","doc":"Returns the default system Time Zone records for this system.","requestType":null,"responseType":null,"__isStatic":"orphan"},"getInstallJob":{"paramStatic":{"id":"xs:string : template"},"paramQuery":{},"path":"install\/async\/{id}","action":"GET","doc":"Get info about a running or completed install job","requestType":null,"responseType":"asyncStatus","__isStatic":"orphan"},"getLanguages":{"paramStatic":{},"paramQuery":{},"path":"install\/languages","action":"GET","doc":"Get the available database languages for this System.","requestType":null,"responseType":null,"__isStatic":"orphan"},"getLocaleDefaultTimezoneDescription":{"paramStatic":{},"paramQuery":{},"path":"install\/localedefaulttimezone","action":"GET","doc":"Returns the locale default timezone","requestType":null,"responseType":null,"__isStatic":"orphan"},"getServices":{"paramStatic":{},"paramQuery":{},"path":"install\/services","action":"GET","doc":"Get a list of the install GroupWise services. Note that this list  may not match up with what the admin service is configured with if  some of the services have not yet been configured with an admin  port or have explicitly disabled the admin service.","requestType":null,"responseType":"listResult","__isStatic":"orphan"},"install":{"paramStatic":{},"paramQuery":{},"path":"install\/batch","action":"POST","doc":"Handle installation task of creating a new system, secondary domain, or post office.  Also support upgrading domains or post offices. Creation or upgrade information are defined in the array of SystemConfigInfo objects.","requestType":null,"responseType":"batchResult","__isStatic":"orphan"},"issueToken":{"paramStatic":{},"paramQuery":{},"path":"install\/tokens","action":"POST","doc":"<p>Request a new install token from the admin service.<\/p> <p>The token returned from this method will be in an \'issued\' state. It will  need to be authorized and claimed before it can be used for installation.  To authorize the token you need to run the following command on the host  running the admin service:<\/p>  <p><code>gwadmin-ipc authorize [token]<\/code><\/p>  <p>Once the token has been authorized it can be claimed. To claim the token  issue an HTTP GET on the \/install\/tokens\/[token] endpoint. The claimed token  will contain a \'secret\' that can be used in conjunction with the token id to  form Basic AUTH credentials for the install API.<\/p>  <p>An issued token must be claimed within 5 minutes or it will expire.<\/p>","requestType":null,"responseType":null,"__isStatic":"orphan"},"listInstallJobs":{"paramStatic":{},"paramQuery":{},"path":"install\/async","action":"GET","doc":"List the install jobs that are running (or have run) asynchronously. Note that  this view is restricted to the current install session.","requestType":null,"responseType":"listResult","__isStatic":"orphan"},"lookupDb":{"paramStatic":{},"paramQuery":{"path":"xs:string : query","name":"xs:string : query"},"path":"install\/dbinfo","action":"GET","doc":"Retrieve information about the database at the given path","requestType":null,"responseType":null,"__isStatic":"orphan"},"postoffice":{"paramStatic":{},"paramQuery":{},"path":"install\/postoffice","action":"POST","requestType":"poinstall","responseType":null,"__isStatic":"orphan"},"removeInstallJob":{"paramStatic":{"id":"xs:string : template"},"paramQuery":{},"path":"install\/async\/{id}","action":"DELETE","doc":"Cancel a running install job or remove a completed install job","requestType":null,"responseType":null,"__isStatic":"orphan"},"system":{"paramStatic":{},"paramQuery":{},"path":"install\/system","action":"POST","requestType":"sysinstall","responseType":null,"__isStatic":"orphan"}}');
	}
	/**
	 * Get a list of folders and files that exist in the specified folder
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET install/files{folders: (/.*)?}</p>
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
	 * Claim a token or poll it's status. <p>    The token must be in the 'authorized' state    in order to claim. If a token has yet not been authorized then this method will    return 200 OK but return a token that is still in the 'issued' state. The client    must further poll until the token is authorized and it returned as claimed (i.e.    the 'claimed' date/time stamp is set to non-null and the 'secret' value is set. </p> <p>    Once a token is claimed the token id can be used as the basic auth username for    the install API and the 'secret' can be used as the basic auth password. The    token will be valid for authentication for 1 hour. </p>
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\installToken
	 *
	 * <p>request: GET install/tokens/{id}</p>
	 * <p>template-var: id => xs:string : template</p>
	 */
	protected function _claimToken ($data=null,$queryString=null) { 
		return $this->doRequest ('claimToken',$data,$queryString);
	}
	/**
	 * Get the current install configuration
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET install/config</p>
	 */
	protected function _config ($data=null,$queryString=null) { 
		return $this->doRequest ('config',$data,$queryString);
	}
	/**
	 * @internal
	 *
	 * @param apiResult|xsd\sysconfigure $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST install/configure</p>
	 */
	protected function _configure ($data=null,$queryString=null) { 
		return $this->doRequest ('configure',$data,$queryString);
	}
	/**
	 * @internal
	 *
	 * @param apiResult|xsd\dominstall $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST install/domain</p>
	 */
	protected function _domain ($data=null,$queryString=null) { 
		return $this->doRequest ('domain',$data,$queryString);
	}
	/**
	 * Returns the default system Time Zone records for this system.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET install/defaulttimezones</p>
	 */
	protected function _getDefaultTimezones ($data=null,$queryString=null) { 
		return $this->doRequest ('getDefaultTimezones',$data,$queryString);
	}
	/**
	 * Get info about a running or completed install job
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\asyncStatus
	 *
	 * <p>request: GET install/async/{id}</p>
	 * <p>template-var: id => xs:string : template</p>
	 */
	protected function _getInstallJob ($data=null,$queryString=null) { 
		return $this->doRequest ('getInstallJob',$data,$queryString);
	}
	/**
	 * Get the available database languages for this System.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET install/languages</p>
	 */
	protected function _getLanguages ($data=null,$queryString=null) { 
		return $this->doRequest ('getLanguages',$data,$queryString);
	}
	/**
	 * Returns the locale default timezone
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET install/localedefaulttimezone</p>
	 */
	protected function _getLocaleDefaultTimezoneDescription ($data=null,$queryString=null) { 
		return $this->doRequest ('getLocaleDefaultTimezoneDescription',$data,$queryString);
	}
	/**
	 * Get a list of the install GroupWise services. Note that this list  may not match up with what the admin service is configured with if  some of the services have not yet been configured with an admin  port or have explicitly disabled the admin service.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\listResult
	 *
	 * <p>request: GET install/services</p>
	 */
	protected function _getServices ($data=null,$queryString=null) { 
		return $this->doRequest ('getServices',$data,$queryString);
	}
	/**
	 * Handle installation task of creating a new system, secondary domain, or post office.  Also support upgrading domains or post offices. Creation or upgrade information are defined in the array of SystemConfigInfo objects.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\batchResult
	 *
	 * <p>request: POST install/batch</p>
	 */
	protected function _install ($data=null,$queryString=null) { 
		return $this->doRequest ('install',$data,$queryString);
	}
	/**
	 * <p>Request a new install token from the admin service.</p> <p>The token returned from this method will be in an 'issued' state. It will  need to be authorized and claimed before it can be used for installation.  To authorize the token you need to run the following command on the host  running the admin service:</p>  <p><code>gwadmin-ipc authorize [token]</code></p>  <p>Once the token has been authorized it can be claimed. To claim the token  issue an HTTP GET on the /install/tokens/[token] endpoint. The claimed token  will contain a 'secret' that can be used in conjunction with the token id to  form Basic AUTH credentials for the install API.</p>  <p>An issued token must be claimed within 5 minutes or it will expire.</p>
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST install/tokens</p>
	 */
	protected function _issueToken ($data=null,$queryString=null) { 
		return $this->doRequest ('issueToken',$data,$queryString);
	}
	/**
	 * List the install jobs that are running (or have run) asynchronously. Note that  this view is restricted to the current install session.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\listResult
	 *
	 * <p>request: GET install/async</p>
	 */
	protected function _listInstallJobs ($data=null,$queryString=null) { 
		return $this->doRequest ('listInstallJobs',$data,$queryString);
	}
	/**
	 * Retrieve information about the database at the given path
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET install/dbinfo</p>
	 * <p>query-String: path => xs:string : query</p>
	 * <p>query-String: name => xs:string : query</p>
	 */
	protected function _lookupDb ($data=null,$queryString=null) { 
		return $this->doRequest ('lookupDb',$data,$queryString);
	}
	/**
	 * @internal
	 *
	 * @param apiResult|xsd\poinstall $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST install/postoffice</p>
	 */
	protected function _postoffice ($data=null,$queryString=null) { 
		return $this->doRequest ('postoffice',$data,$queryString);
	}
	/**
	 * Cancel a running install job or remove a completed install job
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE install/async/{id}</p>
	 * <p>template-var: id => xs:string : template</p>
	 */
	protected function _removeInstallJob ($data=null,$queryString=null) { 
		return $this->doRequest ('removeInstallJob',$data,$queryString);
	}
	/**
	 * @internal
	 *
	 * @param apiResult|xsd\sysinstall $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST install/system</p>
	 */
	protected function _system ($data=null,$queryString=null) { 
		return $this->doRequest ('system',$data,$queryString);
	}
}