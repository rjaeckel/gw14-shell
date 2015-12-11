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
 * dynamic abstraction for gw-class nickname
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|mixed create ( xsd\nickname $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/nicknames</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed delete ( mixed $data=null ,string $queryString=null ) <p>request: DELETE domains/{domain}/postoffices/{postoffice}/nicknames/{nickname}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: nickname => xs:string : template</p>
 * @method static apiResult|xsd\emailAddresses getAllEmailAddresses ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/nicknames/{nickname}/emailaddresses</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: nickname => xs:string : template</p>
 * @method static apiResult|mixed getList ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/nicknames</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p>
 * @method static apiResult|mixed info ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/nicknames/{nickname}/info</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: nickname => xs:string : template</p>
 * @method static apiResult|mixed object ( mixed $data=null ,string $queryString=null ) <p>request: GET domains/{domain}/postoffices/{postoffice}/nicknames/{nickname}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: nickname => xs:string : template</p>
 * @method static apiResult|mixed replicate ( mixed $data=null ,string $queryString=null ) <p>request: POST domains/{domain}/postoffices/{postoffice}/nicknames/{nickname}/replicate</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: nickname => xs:string : template</p>
 * @method static apiResult|mixed update ( xsd\nickname $data=null ,string $queryString=null ) <p>request: PUT domains/{domain}/postoffices/{postoffice}/nicknames/{nickname}</p><p>template-var: postoffice => xs:string : template</p><p>template-var: domain => xs:string : template</p><p>template-var: nickname => xs:string : template</p><p>query-String: attrs => xs:string : query</p>
 */
class nickname extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"nickname","__isObject":true,"create":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/nicknames","action":"POST","doc":"Create a Nickname with the specified data.","requestType":"nickname","responseType":null,"__isStatic":"object"},"delete":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","nickname":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/nicknames\/{nickname}","action":"DELETE","doc":"Delete a specific Nickname given the name.","requestType":null,"responseType":null},"getAllEmailAddresses":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","nickname":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/nicknames\/{nickname}\/emailaddresses","action":"GET","doc":"Get the list of allowed email address for this nickname including gateway alias  email addresses.","requestType":null,"responseType":"emailAddresses"},"getList":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/nicknames","action":"GET","doc":"Get a list of Nicknames for the specified Post Office. Note: Attribute filtering is supported using this query (for example: <code> ...?attribute=value<\/code>)","requestType":null,"responseType":null,"__isStatic":"object"},"info":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","nickname":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/nicknames\/{nickname}\/info","action":"GET","doc":"Retrieve statistical information about the specified Nickname.","requestType":null,"responseType":null},"object":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","nickname":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/nicknames\/{nickname}","action":"GET","doc":"Get a specific Nickname given the name.","requestType":null,"responseType":null},"replicate":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","nickname":"xs:string : template"},"paramQuery":{},"path":"domains\/{domain}\/postoffices\/{postoffice}\/nicknames\/{nickname}\/replicate","action":"POST","doc":"Replicate this nickname through the system.","requestType":null,"responseType":null},"update":{"paramStatic":{"postoffice":"xs:string : template","domain":"xs:string : template","nickname":"xs:string : template"},"paramQuery":{"attrs":"xs:string : query"},"path":"domains\/{domain}\/postoffices\/{postoffice}\/nicknames\/{nickname}","action":"PUT","doc":"Update the specified Nickname with the given data","requestType":"nickname","responseType":null}}');
	}
	/**
	 * Create a Nickname with the specified data.
	 * @internal
	 *
	 * @param apiResult|xsd\nickname $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/nicknames</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _create ($data=null,$queryString=null) { 
		return $this->doRequest ('create',$data,$queryString);
	}
	/**
	 * Delete a specific Nickname given the name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE domains/{domain}/postoffices/{postoffice}/nicknames/{nickname}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: nickname => xs:string : template</p>
	 */
	protected function _delete ($data=null,$queryString=null) { 
		return $this->doRequest ('delete',$data,$queryString);
	}
	/**
	 * Get the list of allowed email address for this nickname including gateway alias  email addresses.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\emailAddresses
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/nicknames/{nickname}/emailaddresses</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: nickname => xs:string : template</p>
	 */
	protected function _getAllEmailAddresses ($data=null,$queryString=null) { 
		return $this->doRequest ('getAllEmailAddresses',$data,$queryString);
	}
	/**
	 * Get a list of Nicknames for the specified Post Office. Note: Attribute filtering is supported using this query (for example: <code> ...?attribute=value</code>)
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/nicknames</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 */
	protected function _getList ($data=null,$queryString=null) { 
		return $this->doRequest ('getList',$data,$queryString);
	}
	/**
	 * Retrieve statistical information about the specified Nickname.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/nicknames/{nickname}/info</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: nickname => xs:string : template</p>
	 */
	protected function _info ($data=null,$queryString=null) { 
		return $this->doRequest ('info',$data,$queryString);
	}
	/**
	 * Get a specific Nickname given the name.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET domains/{domain}/postoffices/{postoffice}/nicknames/{nickname}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: nickname => xs:string : template</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Replicate this nickname through the system.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST domains/{domain}/postoffices/{postoffice}/nicknames/{nickname}/replicate</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: nickname => xs:string : template</p>
	 */
	protected function _replicate ($data=null,$queryString=null) { 
		return $this->doRequest ('replicate',$data,$queryString);
	}
	/**
	 * Update the specified Nickname with the given data
	 * @internal
	 *
	 * @param apiResult|xsd\nickname $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT domains/{domain}/postoffices/{postoffice}/nicknames/{nickname}</p>
	 * <p>template-var: postoffice => xs:string : template</p>
	 * <p>template-var: domain => xs:string : template</p>
	 * <p>template-var: nickname => xs:string : template</p>
	 * <p>query-String: attrs => xs:string : query</p>
	 */
	protected function _update ($data=null,$queryString=null) { 
		return $this->doRequest ('update',$data,$queryString);
	}
}