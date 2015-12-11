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
 * dynamic abstraction for gw-class scheduledevent
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed addAction ( mixed $data=null ,string $queryString=null ) <p>request: PUT system/scheduledevents/{eventName}/actions/{actionName}</p><p>template-var: eventName => xs:string : template</p><p>template-var: actionName => xs:string : template</p>
 * @method static apiResult|mixed create ( xsd\scheduledEvent $data=null ,string $queryString=null ) <p>request: POST system/scheduledevents</p>
 * @method static apiResult|mixed delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE system/scheduledevents/{eventName}</p><p>template-var: eventName => xs:string : template</p>
 * @method static apiResult|mixed getList ( mixed $data=null ,string $queryString=null ) <p>request: GET system/scheduledevents</p>
 * @method static apiResult|xsd\listResult listActions ( mixed $data=null ,string $queryString=null ) <p>request: GET system/scheduledevents/{eventName}/actions</p><p>template-var: eventName => xs:string : template</p>
 * @method static apiResult|mixed object ( mixed $data=null ,string $queryString=null ) <p>request: GET system/scheduledevents/{eventName}</p><p>template-var: eventName => xs:string : template</p>
 * @method static apiResult|mixed removeAction ( mixed $data=null ,string $queryString=null ) <p>request: DELETE system/scheduledevents/{eventName}/actions/{actionName}</p><p>template-var: eventName => xs:string : template</p><p>template-var: actionName => xs:string : template</p>
 * @method static apiResult|mixed update ( xsd\scheduledEvent $data=null ,string $queryString=null ) <p>request: PUT system/scheduledevents/{eventName}</p><p>template-var: eventName => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 * @method static apiResult|mixed updateActions ( xsd\batchupdate $data=null ,string $queryString=null ) <p>request: PUT system/scheduledevents/{eventName}/actions</p><p>template-var: eventName => xs:string : template</p>
 */
class scheduledevent extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"scheduledevent","__isObject":true,"addAction":{"paramStatic":{"eventName":"xs:string : template","actionName":"xs:string : template"},"paramQuery":{},"path":"system\/scheduledevents\/{eventName}\/actions\/{actionName}","action":"PUT","doc":"Create an association between the specified Scheduled Event and Scheduled Event Action.","requestType":null,"responseType":null,"__isStatic":"orphan"},"create":{"paramStatic":{},"paramQuery":{},"path":"system\/scheduledevents","action":"POST","doc":"Create a Scheduled Event object with the given data.","requestType":"scheduledEvent","responseType":null,"__isStatic":"object"},"delete":{"paramStatic":{"eventName":"xs:string : template"},"paramQuery":{},"path":"system\/scheduledevents\/{eventName}","action":"DELETE","doc":"Delete the specified Scheduled Event given the name.","requestType":null,"responseType":null},"getList":{"paramStatic":{},"paramQuery":{},"path":"system\/scheduledevents","action":"GET","doc":"Get a list of Scheduled Events defined in this system. The list can be filtered by passing attribute\/value pairs in the query parameter (i.e. <code>?eventType=MAINTENANCE<\/code>)","requestType":null,"responseType":null,"__isStatic":"object"},"listActions":{"paramStatic":{"eventName":"xs:string : template"},"paramQuery":{},"path":"system\/scheduledevents\/{eventName}\/actions","action":"GET","doc":"Get a list of Scheduled Event Actions associated with this Scheduled Event","requestType":null,"responseType":"listResult"},"object":{"paramStatic":{"eventName":"xs:string : template"},"paramQuery":{},"path":"system\/scheduledevents\/{eventName}","action":"GET","doc":"Get a specific Scheduled Event given the name.","requestType":null,"responseType":null},"removeAction":{"paramStatic":{"eventName":"xs:string : template","actionName":"xs:string : template"},"paramQuery":{},"path":"system\/scheduledevents\/{eventName}\/actions\/{actionName}","action":"DELETE","doc":"Remove the association between a Scheduled Event and a Scheduled Event Action.","requestType":null,"responseType":null,"__isStatic":"orphan"},"update":{"paramStatic":{"eventName":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"system\/scheduledevents\/{eventName}","action":"PUT","doc":"Update the specified Scheduled Event with the given data","requestType":"scheduledEvent","responseType":null},"updateActions":{"paramStatic":{"eventName":"xs:string : template"},"paramQuery":{},"path":"system\/scheduledevents\/{eventName}\/actions","action":"PUT","doc":"Update a list of Scheduled Event Actions associated with the specified Scheduled Event.","requestType":"batchupdate","responseType":null}}');
	}
	/**
	 * Create an association between the specified Scheduled Event and Scheduled Event Action.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT system/scheduledevents/{eventName}/actions/{actionName}</p>
	 * <p>template-var: eventName => xs:string : template</p>
	 * <p>template-var: actionName => xs:string : template</p>
	 */
	protected function _addAction ($data=null,$queryString=null) { 
		return $this->doRequest ('addAction',$data,$queryString);
	}
	/**
	 * Create a Scheduled Event object with the given data.
	 * @internal
	 *
	 * @param apiResult|xsd\scheduledEvent $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/scheduledevents</p>
	 */
	protected function _create ($data=null,$queryString=null) { 
		return $this->doRequest ('create',$data,$queryString);
	}
	/**
	 * Delete the specified Scheduled Event given the name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE system/scheduledevents/{eventName}</p>
	 * <p>template-var: eventName => xs:string : template</p>
	 */
	protected function _delete ($data=null,$queryString=null) { 
		return $this->doRequest ('delete',$data,$queryString);
	}
	/**
	 * Get a list of Scheduled Events defined in this system. The list can be filtered by passing attribute/value pairs in the query parameter (i.e. <code>?eventType=MAINTENANCE</code>)
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/scheduledevents</p>
	 */
	protected function _getList ($data=null,$queryString=null) { 
		return $this->doRequest ('getList',$data,$queryString);
	}
	/**
	 * Get a list of Scheduled Event Actions associated with this Scheduled Event
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\listResult
	 *
	 * <p>request: GET system/scheduledevents/{eventName}/actions</p>
	 * <p>template-var: eventName => xs:string : template</p>
	 */
	protected function _listActions ($data=null,$queryString=null) { 
		return $this->doRequest ('listActions',$data,$queryString);
	}
	/**
	 * Get a specific Scheduled Event given the name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/scheduledevents/{eventName}</p>
	 * <p>template-var: eventName => xs:string : template</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Remove the association between a Scheduled Event and a Scheduled Event Action.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE system/scheduledevents/{eventName}/actions/{actionName}</p>
	 * <p>template-var: eventName => xs:string : template</p>
	 * <p>template-var: actionName => xs:string : template</p>
	 */
	protected function _removeAction ($data=null,$queryString=null) { 
		return $this->doRequest ('removeAction',$data,$queryString);
	}
	/**
	 * Update the specified Scheduled Event with the given data
	 * @internal
	 *
	 * @param apiResult|xsd\scheduledEvent $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT system/scheduledevents/{eventName}</p>
	 * <p>template-var: eventName => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _update ($data=null,$queryString=null) { 
		return $this->doRequest ('update',$data,$queryString);
	}
	/**
	 * Update a list of Scheduled Event Actions associated with the specified Scheduled Event.
	 * @internal
	 *
	 * @param apiResult|xsd\batchupdate $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT system/scheduledevents/{eventName}/actions</p>
	 * <p>template-var: eventName => xs:string : template</p>
	 */
	protected function _updateActions ($data=null,$queryString=null) { 
		return $this->doRequest ('updateActions',$data,$queryString);
	}
}