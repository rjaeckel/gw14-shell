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
 * dynamic abstraction for gw-class scheduledeventaction
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed create ( xsd\scheduledEventAction $data=null ,string $queryString=null ) <p>request: POST system/scheduledeventactions</p>
 * @method static apiResult|mixed delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE system/scheduledeventactions/{actionName}</p><p>template-var: actionName => xs:string : template</p>
 * @method static apiResult|mixed getList ( mixed $data=null ,string $queryString=null ) <p>request: GET system/scheduledeventactions</p>
 * @method static apiResult|mixed object ( mixed $data=null ,string $queryString=null ) <p>request: GET system/scheduledeventactions/{actionName}</p><p>template-var: actionName => xs:string : template</p>
 * @method static apiResult|mixed update ( xsd\scheduledEventAction $data=null ,string $queryString=null ) <p>request: PUT system/scheduledeventactions/{actionName}</p><p>template-var: actionName => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 */
class scheduledeventaction extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"scheduledeventaction","__isObject":true,"create":{"paramStatic":{},"paramQuery":{},"path":"system\/scheduledeventactions","action":"POST","doc":"Create a new Scheduled Event Action object with the given data.","requestType":"scheduledEventAction","responseType":null,"__isStatic":"object"},"delete":{"paramStatic":{"actionName":"xs:string : template"},"paramQuery":{},"path":"system\/scheduledeventactions\/{actionName}","action":"DELETE","doc":"Delete the specified Scheduled Event Action given the name.","requestType":null,"responseType":null},"getList":{"paramStatic":{},"paramQuery":{},"path":"system\/scheduledeventactions","action":"GET","doc":"Get a list of Scheduled Event Actions defined in this system. The list can be filtered by passing attribute\/value pairs in the query parameter (i.e. <code>?action=REDUCE<\/code>)","requestType":null,"responseType":null,"__isStatic":"object"},"object":{"paramStatic":{"actionName":"xs:string : template"},"paramQuery":{},"path":"system\/scheduledeventactions\/{actionName}","action":"GET","doc":"Get a specific ScheduledEventAction given the name.","requestType":null,"responseType":null},"update":{"paramStatic":{"actionName":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"system\/scheduledeventactions\/{actionName}","action":"PUT","doc":"Update the specified Scheduled Event Action with the given data.","requestType":"scheduledEventAction","responseType":null}}');
	}
	/**
	 * Create a new Scheduled Event Action object with the given data.
	 * @internal
	 *
	 * @param apiResult|xsd\scheduledEventAction $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/scheduledeventactions</p>
	 */
	protected function _create ($data=null,$queryString=null) { 
		return $this->doRequest ('create',$data,$queryString);
	}
	/**
	 * Delete the specified Scheduled Event Action given the name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE system/scheduledeventactions/{actionName}</p>
	 * <p>template-var: actionName => xs:string : template</p>
	 */
	protected function _delete ($data=null,$queryString=null) { 
		return $this->doRequest ('delete',$data,$queryString);
	}
	/**
	 * Get a list of Scheduled Event Actions defined in this system. The list can be filtered by passing attribute/value pairs in the query parameter (i.e. <code>?action=REDUCE</code>)
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/scheduledeventactions</p>
	 */
	protected function _getList ($data=null,$queryString=null) { 
		return $this->doRequest ('getList',$data,$queryString);
	}
	/**
	 * Get a specific ScheduledEventAction given the name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/scheduledeventactions/{actionName}</p>
	 * <p>template-var: actionName => xs:string : template</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Update the specified Scheduled Event Action with the given data.
	 * @internal
	 *
	 * @param apiResult|xsd\scheduledEventAction $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT system/scheduledeventactions/{actionName}</p>
	 * <p>template-var: actionName => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _update ($data=null,$queryString=null) { 
		return $this->doRequest ('update',$data,$queryString);
	}
}