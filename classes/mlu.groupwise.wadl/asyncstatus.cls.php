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
 * dynamic abstraction for gw-class asyncstatus
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed clearAllComplete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE async</p>
 * @method static apiResult|mixed delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE async/{id}</p><p>template-var: id => xs:string : template</p>
 * @method static apiResult|mixed file ( mixed $data=null ,string $queryString=null ) <p>request: GET async/{id}/file</p><p>template-var: id => xs:string : template</p>
 * @method static apiResult|xsd\asyncStatus get ( mixed $data=null ,string $queryString=null ) <p>request: GET async/{id}</p><p>template-var: id => xs:string : template</p>
 * @method static apiResult|xsd\listResult getList ( mixed $data=null ,string $queryString=null ) <p>request: GET async</p><p>query-String: state => xs:string : query</p>
 */
class asyncstatus extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"asyncstatus","__isObject":true,"clearAllComplete":{"paramStatic":{},"paramQuery":{},"path":"async","action":"DELETE","doc":"Clear all complete statii","requestType":null,"responseType":null,"__isStatic":"object"},"delete":{"paramStatic":{"id":"xs:string : template"},"paramQuery":{},"path":"async\/{id}","action":"DELETE","doc":"Delete a job. If the job is done, then it is removed. If the job is not yet done then  a request will be sent to the thread executing the job to cancel it. Once the job is  canceled it will remove itself from the job list.","requestType":null,"responseType":null},"file":{"paramStatic":{"id":"xs:string : template"},"paramQuery":{},"path":"async\/{id}\/file","action":"GET","doc":"Get the file result of the specified asynchronous job or 404 not found if the job does not have  a file result.","requestType":null,"responseType":null},"get":{"paramStatic":{"id":"xs:string : template"},"paramQuery":{},"path":"async\/{id}","action":"GET","doc":"Get a particular asynchronous job status","requestType":null,"responseType":"asyncStatus"},"getList":{"paramStatic":{},"paramQuery":{"state":"xs:string : query"},"path":"async","action":"GET","doc":"Return the list of asynchronous jobs currently being run. Note that this list  is filtered to only show jobs submitted by the admin that is making this request.","requestType":null,"responseType":"listResult","__isStatic":"object"}}');
	}
	/**
	 * Clear all complete statii
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE async</p>
	 */
	protected function _clearAllComplete ($data=null,$queryString=null) { 
		return $this->doRequest ('clearAllComplete',$data,$queryString);
	}
	/**
	 * Delete a job. If the job is done, then it is removed. If the job is not yet done then  a request will be sent to the thread executing the job to cancel it. Once the job is  canceled it will remove itself from the job list.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE async/{id}</p>
	 * <p>template-var: id => xs:string : template</p>
	 */
	protected function _delete ($data=null,$queryString=null) { 
		return $this->doRequest ('delete',$data,$queryString);
	}
	/**
	 * Get the file result of the specified asynchronous job or 404 not found if the job does not have  a file result.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET async/{id}/file</p>
	 * <p>template-var: id => xs:string : template</p>
	 */
	protected function _file ($data=null,$queryString=null) { 
		return $this->doRequest ('file',$data,$queryString);
	}
	/**
	 * Get a particular asynchronous job status
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\asyncStatus
	 *
	 * <p>request: GET async/{id}</p>
	 * <p>template-var: id => xs:string : template</p>
	 */
	protected function _get ($data=null,$queryString=null) { 
		return $this->doRequest ('get',$data,$queryString);
	}
	/**
	 * Return the list of asynchronous jobs currently being run. Note that this list  is filtered to only show jobs submitted by the admin that is making this request.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\listResult
	 *
	 * <p>request: GET async</p>
	 * <p>query-String: state => xs:string : query</p>
	 */
	protected function _getList ($data=null,$queryString=null) { 
		return $this->doRequest ('getList',$data,$queryString);
	}
}