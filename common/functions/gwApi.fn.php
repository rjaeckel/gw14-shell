<?php
namespace mlu\common\functions;
use \mlu\groupwise\api,\mlu\groupwise\apiResult;
/**
 * gwapi-function file
 * 
 * @author Robert Jäckel <robert.jaeckel@itz.uni-halle.de>
 * @package gwApi
 * @subpackage core
 * @category Rest-Api
 * 
 */

/**
 * instantiate the api and optionally perform requests at once
 * @param string $url url to make request on
 * @param string $method get|post|delete|put
 * @param mixed $data,... data to be sent, will be merged to one object
 * @return apiResult|api result if url passed, else api-instance
 */
function gwApi($url='',$method='get',$data=null) {
    $api = new api();
    $api->resultCallback=__devmode?'mlu\\groupwise\\json':'\json';
    return func_num_args()?call_user_func_array($api,func_get_args()):$api;
}