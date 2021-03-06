<?php
namespace mlu\groupwise;

use mlu\common;
/**
 * generates list-abstractions for gw-basetypes and creates documentation if wanted
 * 
 * <p>define __devmode as true to generate dev-doc.</p>
 * 
 * @author Robert Jäckel <robert.jaeckel@itz.uni-halle.de>
 * @package gwApi
 * @subpackage api-gen
 * @category Rest-Api
 */


if(__devmode) {
	/**
	 * encode-function for result callbacks, most likely development purpose
	 * @param mixed $o data to create json-string from
	 * @param int $options JSON encode-options
	 * @return string
	 */
	function json_encode($o,$options=0) {
		return \json_encode($o, (phpversion()>='5.4'?JSON_PRETTY_PRINT:0)|$options);
	}
	
	/**
	 * decode-function for result callbacks, most likely development purpose
	 * @param string $s json-string to decode
	 * @return mixed
	 */
	function json_decode($s) {
		return \json_decode($s);
	}
	
	// lines for dynamic generated documentation
	$devData=array();
	
	/**
	 * @internal creates function doc for type abstraction functions
	 * @param string $type type that is abstracted
	 * @param string $function function-sourcecode
	 * @param string[] $devData the text-array the doc will be appended to
	 */
	function addTypeFunctionDoc($type,$function,&$devData) {
		$devData[]=<<<doc
/**
 * list all items of $type and optionally filer result by a query-string and container
 * 
 * request: get list/$type
 * additionally to the object\'s attributes you may provide the following parameters:<ul><li>count - set the number of results per page</li><li>attrs - set properties to display by comma-separated list</li><li>nextId - get the next page by providing the matching number in result-set</li><li>return=ids - do not render data but return matching internal ids</li><li>ids - get objects matching internal ids; comma-separated list</li></ul>
 * 
 * @param string \$filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string \$base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
doc;
		$devData[]=$function;
	}
}
/**
 * pluralize a string
 * 
 * underscores will be removed
 * @param string $str
 * @return string
 */
function pluralize($str) {
	$plural=$str;
	$lastTwo=substr($str,-2);
	if($lastTwo=='ry') $plural=substr($str,0,-1).'ies';
	elseif ('s'==substr($str,-1)) $plural.=$lastTwo=='ts'?'':'es';
	else $plural.='s';
	/*switch (substr($str,-2)) {
		case 'ry': $plural=substr($str,0,-1).'ies'; break;
		case 'ss': $plural.='es'; break;
		default: $plural.='s';
	}*/

	$plural=preg_replace_callback('/_(\w)/',function($matches){
		return ucfirst($matches[1]);
	},$plural);
	return ucfirst($plural);
}
/**
 * generates the list-abstraction functions for basic groupwise_domain_types
 * @param string $type
 * @return callable
 */
function generateListFunction($type) {
	$plural = pluralize($type);
	if(__devmode) trigger_error("Generating list function <$plural> for <$type>",E_USER_NOTICE);
	$fn = 'function '.$plural.'($filter=\'\',$base=null){return \mlu\common::gwApi($base?"list/'.$type.'/$base?$filter":"list/'.$type.'?$filter");}';
	eval($fn);
	return $fn;
}
/**
 * types toabstract a list-funciton from
 * @see domainObjectType
 * @return string[]
 */
function gwTypes() {
	$c = new \ReflectionClass('\mlu\groupwise\xsd\domainObjectType');
	return array_map(function(&$v){return strtolower($v);},$c->getConstants());
	/*
	return array(
		'base_object','nickname','user','domain','post_office','group',
		'group_member','mta','library','poa','resource','directory',
		'internet_domain'
	);
	*/
}

/**
 * initialize functions to abstract common list/{type} requests
 * function name will be pluralized
 */
foreach (gwTypes() as $type) {
	// create function abstraction-function
	$fn=generateListFunction($type);
	if(__devmode) { addTypeFunctionDoc($type, $fn,$devData); }
}

if(__devmode) {
	$header = <<<head
<?php
/**
 * dynamically created functions and classes
 * <p>DO NOT INCLUDE THIS FILE - it is just an ide-helper</p>
 * @author gwApi-common.php
 * @package gwApi
 * @subpackage api-gen
 * @category Rest-Api
 */
 
die(sprintf("File '%s' is not meant to be included.",__FILE__));
head;
	common::write2file(__devDocOutputDirectory.'gwapi-functions.php', $header ,implode(PHP_EOL,$devData));
	// write done
}

unset($type,$gwTypes);
