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
 * dynamic abstraction for gw-class diagnostics
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|xsd\attributeMap listAttributes ( mixed $data=null ,string $queryString=null ) <p>request: GET diagnostics/attributes</p><p>query-String: locale => xs:string : query</p>
 * @method static apiResult|xsd\listResult listIndices ( mixed $data=null ,string $queryString=null ) <p>request: GET diagnostics/index</p>
 * @method static apiResult|xsd\objectAttributes object ( mixed $data=null ,string $queryString=null ) <p>request: GET diagnostics/object/{id}</p><p>template-var: id => xs:string : template</p>
 * @method static apiResult|xsd\listResult readIndex ( mixed $data=null ,string $queryString=null ) <p>request: GET diagnostics/index/{index}</p><p>template-var: index => xs:string : template</p>
 */
class diagnostics extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"diagnostics","__isObject":true,"listAttributes":{"paramStatic":{},"paramQuery":{"locale":"xs:string : query"},"path":"diagnostics\/attributes","action":"GET","doc":"Returns a mapping of attributes and names.","requestType":null,"responseType":"attributeMap","__isStatic":"object"},"listIndices":{"paramStatic":{},"paramQuery":{},"path":"diagnostics\/index","action":"GET","doc":"Returns a list of available indices to query","requestType":null,"responseType":"listResult","__isStatic":"object"},"object":{"paramStatic":{"id":"xs:string : template"},"paramQuery":{},"path":"diagnostics\/object\/{id}","action":"GET","doc":"Return a raw dump of an object specified by record type and DRN.","requestType":null,"responseType":"objectAttributes"},"readIndex":{"paramStatic":{"index":"xs:string : template"},"paramQuery":{},"path":"diagnostics\/index\/{index}","action":"GET","doc":"Get a list of objects from the specified index.","requestType":null,"responseType":"listResult","__isStatic":"object"}}');
	}
	/**
	 * Returns a mapping of attributes and names.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\attributeMap
	 *
	 * <p>request: GET diagnostics/attributes</p>
	 * <p>query-String: locale => xs:string : query</p>
	 */
	protected function _listAttributes ($data=null,$queryString=null) { 
		return $this->doRequest ('listAttributes',$data,$queryString);
	}
	/**
	 * Returns a list of available indices to query
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\listResult
	 *
	 * <p>request: GET diagnostics/index</p>
	 */
	protected function _listIndices ($data=null,$queryString=null) { 
		return $this->doRequest ('listIndices',$data,$queryString);
	}
	/**
	 * Return a raw dump of an object specified by record type and DRN.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\objectAttributes
	 *
	 * <p>request: GET diagnostics/object/{id}</p>
	 * <p>template-var: id => xs:string : template</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Get a list of objects from the specified index.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\listResult
	 *
	 * <p>request: GET diagnostics/index/{index}</p>
	 * <p>template-var: index => xs:string : template</p>
	 */
	protected function _readIndex ($data=null,$queryString=null) { 
		return $this->doRequest ('readIndex',$data,$queryString);
	}
}