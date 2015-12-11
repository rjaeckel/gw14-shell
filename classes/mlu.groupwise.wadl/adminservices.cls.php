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
 * dynamic abstraction for gw-class adminservices
 * 
 * <p>this class is auto-generated and may change with wadl-change.</p>
 * 
 * @author wadl-abstract.php
 * @package gwProxy
 * @subpackage api-gen
 * @category Rest-Api
 *
 * @method static apiResult|xsd\restFile browse ( mixed $data=null ,string $queryString=null ) <p>request: GET system/adminservices/{objectId}/files{folders: (/.*)?}</p><p>template-var: folders => xs:string : template</p><p>template-var: objectId => xs:string : template</p><p>query-String: queryFolders => xs:boolean : query</p><p>query-String: queryFiles => xs:boolean : query</p><p>query-String: queryFilter => xs:string : query</p><p>query-String: filterType => xs:string : query</p>
 * @method static apiResult|xsd\restFile certificateFiles ( mixed $data=null ,string $queryString=null ) <p>request: GET system/adminservices/{objectId}/certificates</p><p>template-var: objectId => xs:string : template</p><p>query-String: queryFilter => xs:string : query</p>
 * @method static apiResult|mixed deleteCertificateFile ( mixed $data=null ,string $queryString=null ) <p>request: DELETE system/adminservices/{objectId}/certificates/{filename}</p><p>template-var: filename => xs:string : template</p><p>template-var: objectId => xs:string : template</p>
 * @method static apiResult|mixed getList ( mixed $data=null ,string $queryString=null ) <p>request: GET system/adminservices</p>
 * @method static apiResult|xsd\nodeConfig localConfig ( mixed $data=null ,string $queryString=null ) <p>request: GET system/adminservices/{objectId}/config</p><p>template-var: objectId => xs:string : template</p>
 * @method static apiResult|mixed object ( mixed $data=null ,string $queryString=null ) <p>request: GET system/adminservices/{objectid}</p><p>template-var: objectid => xs:string : template</p>
 * @method static apiResult|mixed storeCertificateFile ( mixed $data=null ,string $queryString=null ) <p>request: PUT system/adminservices/{objectId}/certificates/{filename}</p><p>template-var: filename => xs:string : template</p><p>template-var: objectId => xs:string : template</p>
 * @method static apiResult|mixed uploadCertificateFile ( mixed $data=null ,string $queryString=null ) <p>request: POST system/adminservices/{objectId}/certificates</p><p>template-var: objectId => xs:string : template</p>
 */
class adminservices extends wadlProxy { 
	/**
	 * @internal
	 */
	public function __construct() {
		$this->methods=json_decode('{"__className":"adminservices","__isObject":true,"browse":{"paramStatic":{"folders":"xs:string : template","objectId":"xs:string : template"},"paramQuery":{"queryFolders":"xs:boolean : query","queryFiles":"xs:boolean : query","queryFilter":"xs:string : query","filterType":"xs:string : query"},"path":"system\/adminservices\/{objectId}\/files{folders: (\/.*)?}","action":"GET","doc":"Get a list of folders and files that exist in the specified folder","requestType":null,"responseType":"restFile"},"certificateFiles":{"paramStatic":{"objectId":"xs:string : template"},"paramQuery":{"queryFilter":"xs:string : query"},"path":"system\/adminservices\/{objectId}\/certificates","action":"GET","doc":"Get the list of certificates from the specified AdminService. These are the files located under in the \"certificates\" folder where the rest service is running or the folder specified by the com.novell.gw.admin.certificatesOverride. Get a list of certificate files from the specified Admin Service. These are the files located under in the \"certificates\" folder where the Admin Service is running or the folder specified by the com.novell.gw.admin.certificatesOverride.","requestType":null,"responseType":"restFile"},"deleteCertificateFile":{"paramStatic":{"filename":"xs:string : template","objectId":"xs:string : template"},"paramQuery":{},"path":"system\/adminservices\/{objectId}\/certificates\/{filename}","action":"DELETE","doc":"Delete a certificate file from the specified Admin Service. These are the files located under in the \"certificates\" folder where the Admin Service is running or the folder specified by the com.novell.gw.admin.certificatesOverride.","requestType":null,"responseType":null},"getList":{"paramStatic":{},"paramQuery":{},"path":"system\/adminservices","action":"GET","doc":"Get a list of Admin Services in the system.  Note: Attribute filtering is supported using this query (for example: <code> ...?attribute=value<\/code>)","requestType":null,"responseType":null,"__isStatic":"object"},"localConfig":{"paramStatic":{"objectId":"xs:string : template"},"paramQuery":{},"path":"system\/adminservices\/{objectId}\/config","action":"GET","doc":"Get the configuration of the Admin Service specified by name","requestType":null,"responseType":"nodeConfig"},"object":{"paramStatic":{"objectid":"xs:string : template"},"paramQuery":{},"path":"system\/adminservices\/{objectid}","action":"GET","doc":"Get a specific Admin Service given the name","requestType":null,"responseType":null},"storeCertificateFile":{"paramStatic":{"filename":"xs:string : template","objectId":"xs:string : template"},"paramQuery":{},"path":"system\/adminservices\/{objectId}\/certificates\/{filename}","action":"PUT","doc":"Stores a certificate file to the specified Admin Service. These are the files located under in the \"certificates\" folder where the Admin Service is running.","requestType":null,"responseType":null},"uploadCertificateFile":{"paramStatic":{"objectId":"xs:string : template"},"paramQuery":{},"path":"system\/adminservices\/{objectId}\/certificates","action":"POST","doc":"Upload a certificate file to the specified Admin Service. These are the files located under in the \"certificates\" folder where the Admin Service is running or the folder specified by the com.novell.gw.admin.certificatesOverride.","requestType":null,"responseType":null}}');
	}
	/**
	 * Get a list of folders and files that exist in the specified folder
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\restFile
	 *
	 * <p>request: GET system/adminservices/{objectId}/files{folders: (/.*)?}</p>
	 * <p>template-var: folders => xs:string : template</p>
	 * <p>template-var: objectId => xs:string : template</p>
	 * <p>query-String: queryFolders => xs:boolean : query</p>
	 * <p>query-String: queryFiles => xs:boolean : query</p>
	 * <p>query-String: queryFilter => xs:string : query</p>
	 * <p>query-String: filterType => xs:string : query</p>
	 */
	protected function _browse ($data=null,$queryString=null) { 
		return $this->doRequest ('browse',$data,$queryString);
	}
	/**
	 * Get the list of certificates from the specified AdminService. These are the files located under in the "certificates" folder where the rest service is running or the folder specified by the com.novell.gw.admin.certificatesOverride. Get a list of certificate files from the specified Admin Service. These are the files located under in the "certificates" folder where the Admin Service is running or the folder specified by the com.novell.gw.admin.certificatesOverride.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\restFile
	 *
	 * <p>request: GET system/adminservices/{objectId}/certificates</p>
	 * <p>template-var: objectId => xs:string : template</p>
	 * <p>query-String: queryFilter => xs:string : query</p>
	 */
	protected function _certificateFiles ($data=null,$queryString=null) { 
		return $this->doRequest ('certificateFiles',$data,$queryString);
	}
	/**
	 * Delete a certificate file from the specified Admin Service. These are the files located under in the "certificates" folder where the Admin Service is running or the folder specified by the com.novell.gw.admin.certificatesOverride.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: DELETE system/adminservices/{objectId}/certificates/{filename}</p>
	 * <p>template-var: filename => xs:string : template</p>
	 * <p>template-var: objectId => xs:string : template</p>
	 */
	protected function _deleteCertificateFile ($data=null,$queryString=null) { 
		return $this->doRequest ('deleteCertificateFile',$data,$queryString);
	}
	/**
	 * Get a list of Admin Services in the system.  Note: Attribute filtering is supported using this query (for example: <code> ...?attribute=value</code>)
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/adminservices</p>
	 */
	protected function _getList ($data=null,$queryString=null) { 
		return $this->doRequest ('getList',$data,$queryString);
	}
	/**
	 * Get the configuration of the Admin Service specified by name
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|xsd\nodeConfig
	 *
	 * <p>request: GET system/adminservices/{objectId}/config</p>
	 * <p>template-var: objectId => xs:string : template</p>
	 */
	protected function _localConfig ($data=null,$queryString=null) { 
		return $this->doRequest ('localConfig',$data,$queryString);
	}
	/**
	 * Get a specific Admin Service given the name
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: GET system/adminservices/{objectid}</p>
	 * <p>template-var: objectid => xs:string : template</p>
	 */
	protected function _object ($data=null,$queryString=null) { 
		return $this->doRequest ('object',$data,$queryString);
	}
	/**
	 * Stores a certificate file to the specified Admin Service. These are the files located under in the "certificates" folder where the Admin Service is running.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: PUT system/adminservices/{objectId}/certificates/{filename}</p>
	 * <p>template-var: filename => xs:string : template</p>
	 * <p>template-var: objectId => xs:string : template</p>
	 */
	protected function _storeCertificateFile ($data=null,$queryString=null) { 
		return $this->doRequest ('storeCertificateFile',$data,$queryString);
	}
	/**
	 * Upload a certificate file to the specified Admin Service. These are the files located under in the "certificates" folder where the Admin Service is running or the folder specified by the com.novell.gw.admin.certificatesOverride.
	 * @internal
	 *
	 * @param apiResult|mixed $data user data; may repeat which will result in a merge
	 * @param string $queryString a whole query-string or one part like var=value; may repeat
	 * @return apiResult|mixed
	 *
	 * <p>request: POST system/adminservices/{objectId}/certificates</p>
	 * <p>template-var: objectId => xs:string : template</p>
	 */
	protected function _uploadCertificateFile ($data=null,$queryString=null) { 
		return $this->doRequest ('uploadCertificateFile',$data,$queryString);
	}
}