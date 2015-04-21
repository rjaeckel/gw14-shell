<?php
/**
 * dynamically created functions and classes
 * <p>DO NOT INCLUDE THIS FILE - it is just an ide-helper</p>
 * @author gwApi-common.php
 * @package gwApi
 * @subpackage api-gen
 * @category Rest-Api
 */

/**
 * list all items of base_object and optionally filer result by a query-string and container
 * <p>request: get list/base_object</p>
 * <p>additionally to the object's attributes you may provide the following parameters:<ul><li>count - set the number of results per page</li><li>attrs - set properties to display by comma-separated list</li><li>nextId - get the next page by providing the matching number in result-set</li><li>return=ids - do not render data but return matching internal ids</li><li>ids - get objects matching internal ids; comma-separated list</li></ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function Baseobjects($filter='',$base=null){return \mlu\common::gwApi($base?"list/base_object/$base?$filter":"list/base_object?$filter");}
/**
 * list all items of nickname and optionally filer result by a query-string and container
 * <p>request: get list/nickname</p>
 * <p>additionally to the object's attributes you may provide the following parameters:<ul><li>count - set the number of results per page</li><li>attrs - set properties to display by comma-separated list</li><li>nextId - get the next page by providing the matching number in result-set</li><li>return=ids - do not render data but return matching internal ids</li><li>ids - get objects matching internal ids; comma-separated list</li></ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function Nicknames($filter='',$base=null){return \mlu\common::gwApi($base?"list/nickname/$base?$filter":"list/nickname?$filter");}
/**
 * list all items of user and optionally filer result by a query-string and container
 * <p>request: get list/user</p>
 * <p>additionally to the object's attributes you may provide the following parameters:<ul><li>count - set the number of results per page</li><li>attrs - set properties to display by comma-separated list</li><li>nextId - get the next page by providing the matching number in result-set</li><li>return=ids - do not render data but return matching internal ids</li><li>ids - get objects matching internal ids; comma-separated list</li></ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function Users($filter='',$base=null){return \mlu\common::gwApi($base?"list/user/$base?$filter":"list/user?$filter");}
/**
 * list all items of domain and optionally filer result by a query-string and container
 * <p>request: get list/domain</p>
 * <p>additionally to the object's attributes you may provide the following parameters:<ul><li>count - set the number of results per page</li><li>attrs - set properties to display by comma-separated list</li><li>nextId - get the next page by providing the matching number in result-set</li><li>return=ids - do not render data but return matching internal ids</li><li>ids - get objects matching internal ids; comma-separated list</li></ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function Domains($filter='',$base=null){return \mlu\common::gwApi($base?"list/domain/$base?$filter":"list/domain?$filter");}
/**
 * list all items of post_office and optionally filer result by a query-string and container
 * <p>request: get list/post_office</p>
 * <p>additionally to the object's attributes you may provide the following parameters:<ul><li>count - set the number of results per page</li><li>attrs - set properties to display by comma-separated list</li><li>nextId - get the next page by providing the matching number in result-set</li><li>return=ids - do not render data but return matching internal ids</li><li>ids - get objects matching internal ids; comma-separated list</li></ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function Postoffices($filter='',$base=null){return \mlu\common::gwApi($base?"list/post_office/$base?$filter":"list/post_office?$filter");}
/**
 * list all items of group and optionally filer result by a query-string and container
 * <p>request: get list/group</p>
 * <p>additionally to the object's attributes you may provide the following parameters:<ul><li>count - set the number of results per page</li><li>attrs - set properties to display by comma-separated list</li><li>nextId - get the next page by providing the matching number in result-set</li><li>return=ids - do not render data but return matching internal ids</li><li>ids - get objects matching internal ids; comma-separated list</li></ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function Groups($filter='',$base=null){return \mlu\common::gwApi($base?"list/group/$base?$filter":"list/group?$filter");}
/**
 * list all items of group_member and optionally filer result by a query-string and container
 * <p>request: get list/group_member</p>
 * <p>additionally to the object's attributes you may provide the following parameters:<ul><li>count - set the number of results per page</li><li>attrs - set properties to display by comma-separated list</li><li>nextId - get the next page by providing the matching number in result-set</li><li>return=ids - do not render data but return matching internal ids</li><li>ids - get objects matching internal ids; comma-separated list</li></ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function Groupmembers($filter='',$base=null){return \mlu\common::gwApi($base?"list/group_member/$base?$filter":"list/group_member?$filter");}
/**
 * list all items of mta and optionally filer result by a query-string and container
 * <p>request: get list/mta</p>
 * <p>additionally to the object's attributes you may provide the following parameters:<ul><li>count - set the number of results per page</li><li>attrs - set properties to display by comma-separated list</li><li>nextId - get the next page by providing the matching number in result-set</li><li>return=ids - do not render data but return matching internal ids</li><li>ids - get objects matching internal ids; comma-separated list</li></ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function Mtas($filter='',$base=null){return \mlu\common::gwApi($base?"list/mta/$base?$filter":"list/mta?$filter");}
/**
 * list all items of library and optionally filer result by a query-string and container
 * <p>request: get list/library</p>
 * <p>additionally to the object's attributes you may provide the following parameters:<ul><li>count - set the number of results per page</li><li>attrs - set properties to display by comma-separated list</li><li>nextId - get the next page by providing the matching number in result-set</li><li>return=ids - do not render data but return matching internal ids</li><li>ids - get objects matching internal ids; comma-separated list</li></ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function Libraries($filter='',$base=null){return \mlu\common::gwApi($base?"list/library/$base?$filter":"list/library?$filter");}
/**
 * list all items of poa and optionally filer result by a query-string and container
 * <p>request: get list/poa</p>
 * <p>additionally to the object's attributes you may provide the following parameters:<ul><li>count - set the number of results per page</li><li>attrs - set properties to display by comma-separated list</li><li>nextId - get the next page by providing the matching number in result-set</li><li>return=ids - do not render data but return matching internal ids</li><li>ids - get objects matching internal ids; comma-separated list</li></ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function Poas($filter='',$base=null){return \mlu\common::gwApi($base?"list/poa/$base?$filter":"list/poa?$filter");}
/**
 * list all items of resource and optionally filer result by a query-string and container
 * <p>request: get list/resource</p>
 * <p>additionally to the object's attributes you may provide the following parameters:<ul><li>count - set the number of results per page</li><li>attrs - set properties to display by comma-separated list</li><li>nextId - get the next page by providing the matching number in result-set</li><li>return=ids - do not render data but return matching internal ids</li><li>ids - get objects matching internal ids; comma-separated list</li></ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function Resources($filter='',$base=null){return \mlu\common::gwApi($base?"list/resource/$base?$filter":"list/resource?$filter");}
/**
 * list all items of directory and optionally filer result by a query-string and container
 * <p>request: get list/directory</p>
 * <p>additionally to the object's attributes you may provide the following parameters:<ul><li>count - set the number of results per page</li><li>attrs - set properties to display by comma-separated list</li><li>nextId - get the next page by providing the matching number in result-set</li><li>return=ids - do not render data but return matching internal ids</li><li>ids - get objects matching internal ids; comma-separated list</li></ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function Directories($filter='',$base=null){return \mlu\common::gwApi($base?"list/directory/$base?$filter":"list/directory?$filter");}
/**
 * list all items of internet_domain and optionally filer result by a query-string and container
 * <p>request: get list/internet_domain</p>
 * <p>additionally to the object's attributes you may provide the following parameters:<ul><li>count - set the number of results per page</li><li>attrs - set properties to display by comma-separated list</li><li>nextId - get the next page by providing the matching number in result-set</li><li>return=ids - do not render data but return matching internal ids</li><li>ids - get objects matching internal ids; comma-separated list</li></ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function Internetdomains($filter='',$base=null){return \mlu\common::gwApi($base?"list/internet_domain/$base?$filter":"list/internet_domain?$filter");}