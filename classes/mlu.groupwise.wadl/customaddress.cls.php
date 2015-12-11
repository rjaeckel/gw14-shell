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
 * dynamic abstraction for gw-class customaddress
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed associateCustomAddresses ( mixed $data=null ,string $queryString=null ) <p>request: POST system/customaddresses/{customAddress}/associate/{domain}</p><p>template-var: domain => xs:string : template</p><p>template-var: customAddress => xs:string : template</p>
 * @method static apiResult|mixed create ( xsd\customAddress $data=null ,string $queryString=null ) <p>request: POST system/customaddresses</p>
 * @method static apiResult|mixed delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE system/customaddresses/{customAddress}</p><p>template-var: customAddress => xs:string : template</p>
 * @method static apiResult|mixed getList ( mixed $data=null ,string $queryString=null ) <p>request: GET system/customaddresses</p>
 * @method static apiResult|mixed object ( mixed $data=null ,string $queryString=null ) <p>request: GET system/customaddresses/{customAddress}</p><p>template-var: customAddress => xs:string : template</p>
 * @method static apiResult|mixed removeCustomAddressesAssociation ( mixed $data=null ,string $queryString=null ) <p>request: DELETE system/customaddresses/{customAddress}/associate/{domain}</p><p>template-var: domain => xs:string : template</p><p>template-var: customAddress => xs:string : template</p>
 * @method static apiResult|mixed testAddress ( mixed $data=null ,string $queryString=null ) <p>request: GET system/customaddresses/{customAddress}/test</p><p>query-String: testAddress => xs:string : query</p><p>query-String: searchString => xs:string : query</p><p>query-String: replaceString => xs:string : query</p>
 * @method static apiResult|mixed update ( xsd\customAddress $data=null ,string $queryString=null ) <p>request: PUT system/customaddresses/{customAddress}</p><p>template-var: customAddress => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 */
class customaddress extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"customaddress","__isObject":true,"associateCustomAddresses":{"paramStatic":{"domain":"xs:string : template","customAddress":"xs:string : template"},"paramQuery":{},"path":"system\/customaddresses\/{customAddress}\/associate\/{domain}","action":"POST","doc":"Associate the specified Custom Addressing Rule and Domain.","requestType":null,"responseType":null},"create":{"paramStatic":{},"paramQuery":{},"path":"system\/customaddresses","action":"POST","doc":"Create a Custom Addressing Rule with the specified data.","requestType":"customAddress","responseType":null,"__isStatic":"object"},"delete":{"paramStatic":{"customAddress":"xs:string : template"},"paramQuery":{},"path":"system\/customaddresses\/{customAddress}","action":"DELETE","doc":"Delete a Custom Addressing Rule specified by name.","requestType":null,"responseType":null},"getList":{"paramStatic":{},"paramQuery":{},"path":"system\/customaddresses","action":"GET","doc":"Get a list of Custom Addressing Rules in the system.  Note: Attribute filtering is supported using this query (for example: <code> ...?attribute=value<\/code>)","requestType":null,"responseType":null,"__isStatic":"object"},"object":{"paramStatic":{"customAddress":"xs:string : template"},"paramQuery":{},"path":"system\/customaddresses\/{customAddress}","action":"GET","doc":"Get a specific Custom Addressing Rule given the name.","requestType":null,"responseType":null},"removeCustomAddressesAssociation":{"paramStatic":{"domain":"xs:string : template","customAddress":"xs:string : template"},"paramQuery":{},"path":"system\/customaddresses\/{customAddress}\/associate\/{domain}","action":"DELETE","doc":"Remove the association between the specified Custom Addressing Rule and Domain.","requestType":null,"responseType":null},"testAddress":{"paramStatic":{},"paramQuery":{"testAddress":"xs:string : query","searchString":"xs:string : query","replaceString":"xs:string : query"},"path":"system\/customaddresses\/{customAddress}\/test","action":"GET","doc":"Test a single Custom Addressing Rule using the specified test address, search string, and replace string values.","requestType":null,"responseType":null},"update":{"paramStatic":{"customAddress":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"system\/customaddresses\/{customAddress}","action":"PUT","doc":"Update a Custom Addressing Rule with the given data.","requestType":"customAddress","responseType":null}}');
	}
	/**
	 * Associate the specified Custom Addressing Rule and Domain.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/customaddresses/{customAddress}/associate/{domain}</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: customAddress => xs:string : template</p>
	 */
	protected function _associateCustomAddresses ($data=null,$queryString=null) { 
		return $this->doRequest ('associateCustomAddresses',$data,$queryString);
	}
	/**
	 * Create a Custom Addressing Rule with the specified data.
	 * @internal
	 *
	 * @param apiResult|xsd\customAddress $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/customaddresses</p>
	 */
	protected function _create ($data=null,$queryString=null) { 
		return $this->doRequest ('create',$data,$queryString);
	}
	/**
	 * Delete a Custom Addressing Rule specified by name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE system/customaddresses/{customAddress}</p>
	 * <p>template-var: customAddress => xs:string : template</p>
	 */
	protected function _delete ($data=null,$queryString=null) { 
		return $this->doRequest ('delete',$data,$queryString);
	}
	/**
	 * Get a list of Custom Addressing Rules in the system.  Note: Attribute filtering is supported using this query (for example: <code> ...?attribute=value</code>)
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/customaddresses</p>
	 */
	protected function _getList ($data=null,$queryString=null) { 
		return $this->doRequest ('getList',$data,$queryString);
	}
	/**
	 * Get a specific Custom Addressing Rule given the name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/customaddresses/{customAddress}</p>
	 * <p>template-var: customAddress => xs:string : template</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Remove the association between the specified Custom Addressing Rule and Domain.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE system/customaddresses/{customAddress}/associate/{domain}</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: customAddress => xs:string : template</p>
	 */
	protected function _removeCustomAddressesAssociation ($data=null,$queryString=null) { 
		return $this->doRequest ('removeCustomAddressesAssociation',$data,$queryString);
	}
	/**
	 * Test a single Custom Addressing Rule using the specified test address, search string, and replace string values.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/customaddresses/{customAddress}/test</p>
	 * <p>query-String: testAddress => xs:string : query</p>
	 * <p>query-String: searchString => xs:string : query</p>
	 * <p>query-String: replaceString => xs:string : query</p>
	 */
	protected function _testAddress ($data=null,$queryString=null) { 
		return $this->doRequest ('testAddress',$data,$queryString);
	}
	/**
	 * Update a Custom Addressing Rule with the given data.
	 * @internal
	 *
	 * @param apiResult|xsd\customAddress $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT system/customaddresses/{customAddress}</p>
	 * <p>template-var: customAddress => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _update ($data=null,$queryString=null) { 
		return $this->doRequest ('update',$data,$queryString);
	}
}