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
/**
 * list all items of unmapped and optionally filer result by a query-string and container
 * <p>request: get list/unmapped</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function Unmappeds($filter='',$base=null){return \mlu\common::gwApi($base?"list/unmapped/$base?$filter":"list/unmapped?$filter");}
/**
 * list all items of base_gateway and optionally filer result by a query-string and container
 * <p>request: get list/base_gateway</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function BaseGateways($filter='',$base=null){return \mlu\common::gwApi($base?"list/base_gateway/$base?$filter":"list/base_gateway?$filter");}
/**
 * list all items of base_ldap_server and optionally filer result by a query-string and container
 * <p>request: get list/base_ldap_server</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function BaseLdapServers($filter='',$base=null){return \mlu\common::gwApi($base?"list/base_ldap_server/$base?$filter":"list/base_ldap_server?$filter");}
/**
 * list all items of base_object and optionally filer result by a query-string and container
 * <p>request: get list/base_object</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function BaseObjects($filter='',$base=null){return \mlu\common::gwApi($base?"list/base_object/$base?$filter":"list/base_object?$filter");}
/**
 * list all items of access_control and optionally filer result by a query-string and container
 * <p>request: get list/access_control</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function AccessControls($filter='',$base=null){return \mlu\common::gwApi($base?"list/access_control/$base?$filter":"list/access_control?$filter");}
/**
 * list all items of action and optionally filer result by a query-string and container
 * <p>request: get list/action</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function Actions($filter='',$base=null){return \mlu\common::gwApi($base?"list/action/$base?$filter":"list/action?$filter");}
/**
 * list all items of administrator and optionally filer result by a query-string and container
 * <p>request: get list/administrator</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function Administrators($filter='',$base=null){return \mlu\common::gwApi($base?"list/administrator/$base?$filter":"list/administrator?$filter");}
/**
 * list all items of admin_app and optionally filer result by a query-string and container
 * <p>request: get list/admin_app</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function AdminApps($filter='',$base=null){return \mlu\common::gwApi($base?"list/admin_app/$base?$filter":"list/admin_app?$filter");}
/**
 * list all items of admin_notification and optionally filer result by a query-string and container
 * <p>request: get list/admin_notification</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function AdminNotifications($filter='',$base=null){return \mlu\common::gwApi($base?"list/admin_notification/$base?$filter":"list/admin_notification?$filter");}
/**
 * list all items of admin_preference and optionally filer result by a query-string and container
 * <p>request: get list/admin_preference</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function AdminPreferences($filter='',$base=null){return \mlu\common::gwApi($base?"list/admin_preference/$base?$filter":"list/admin_preference?$filter");}
/**
 * list all items of app_event_association and optionally filer result by a query-string and container
 * <p>request: get list/app_event_association</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function AppEventAssociations($filter='',$base=null){return \mlu\common::gwApi($base?"list/app_event_association/$base?$filter":"list/app_event_association?$filter");}
/**
 * list all items of area_access and optionally filer result by a query-string and container
 * <p>request: get list/area_access</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function AreaAccesses($filter='',$base=null){return \mlu\common::gwApi($base?"list/area_access/$base?$filter":"list/area_access?$filter");}
/**
 * list all items of custom_address and optionally filer result by a query-string and container
 * <p>request: get list/custom_address</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function CustomAddresses($filter='',$base=null){return \mlu\common::gwApi($base?"list/custom_address/$base?$filter":"list/custom_address?$filter");}
/**
 * list all items of custom_address_association and optionally filer result by a query-string and container
 * <p>request: get list/custom_address_association</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function CustomAddressAssociations($filter='',$base=null){return \mlu\common::gwApi($base?"list/custom_address_association/$base?$filter":"list/custom_address_association?$filter");}
/**
 * list all items of custom_preference and optionally filer result by a query-string and container
 * <p>request: get list/custom_preference</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function CustomPreferences($filter='',$base=null){return \mlu\common::gwApi($base?"list/custom_preference/$base?$filter":"list/custom_preference?$filter");}
/**
 * list all items of custom_record and optionally filer result by a query-string and container
 * <p>request: get list/custom_record</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function CustomRecords($filter='',$base=null){return \mlu\common::gwApi($base?"list/custom_record/$base?$filter":"list/custom_record?$filter");}
/**
 * list all items of directory and optionally filer result by a query-string and container
 * <p>request: get list/directory</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function Directories($filter='',$base=null){return \mlu\common::gwApi($base?"list/directory/$base?$filter":"list/directory?$filter");}
/**
 * list all items of domain and optionally filer result by a query-string and container
 * <p>request: get list/domain</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function Domains($filter='',$base=null){return \mlu\common::gwApi($base?"list/domain/$base?$filter":"list/domain?$filter");}
/**
 * list all items of domain_link and optionally filer result by a query-string and container
 * <p>request: get list/domain_link</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function DomainLinks($filter='',$base=null){return \mlu\common::gwApi($base?"list/domain_link/$base?$filter":"list/domain_link?$filter");}
/**
 * list all items of event_action_association and optionally filer result by a query-string and container
 * <p>request: get list/event_action_association</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function EventActionAssociations($filter='',$base=null){return \mlu\common::gwApi($base?"list/event_action_association/$base?$filter":"list/event_action_association?$filter");}
/**
 * list all items of external_system and optionally filer result by a query-string and container
 * <p>request: get list/external_system</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function ExternalSystems($filter='',$base=null){return \mlu\common::gwApi($base?"list/external_system/$base?$filter":"list/external_system?$filter");}
/**
 * list all items of gateway_alias and optionally filer result by a query-string and container
 * <p>request: get list/gateway_alias</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function GatewayAliases($filter='',$base=null){return \mlu\common::gwApi($base?"list/gateway_alias/$base?$filter":"list/gateway_alias?$filter");}
/**
 * list all items of gateway_host_alias and optionally filer result by a query-string and container
 * <p>request: get list/gateway_host_alias</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function GatewayHostAliases($filter='',$base=null){return \mlu\common::gwApi($base?"list/gateway_host_alias/$base?$filter":"list/gateway_host_alias?$filter");}
/**
 * list all items of gateway and optionally filer result by a query-string and container
 * <p>request: get list/gateway</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function Gateways($filter='',$base=null){return \mlu\common::gwApi($base?"list/gateway/$base?$filter":"list/gateway?$filter");}
/**
 * list all items of group and optionally filer result by a query-string and container
 * <p>request: get list/group</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function Groups($filter='',$base=null){return \mlu\common::gwApi($base?"list/group/$base?$filter":"list/group?$filter");}
/**
 * list all items of group_member and optionally filer result by a query-string and container
 * <p>request: get list/group_member</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function GroupMembers($filter='',$base=null){return \mlu\common::gwApi($base?"list/group_member/$base?$filter":"list/group_member?$filter");}
/**
 * list all items of cal_pub_host and optionally filer result by a query-string and container
 * <p>request: get list/cal_pub_host</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function CalPubHosts($filter='',$base=null){return \mlu\common::gwApi($base?"list/cal_pub_host/$base?$filter":"list/cal_pub_host?$filter");}
/**
 * list all items of dva and optionally filer result by a query-string and container
 * <p>request: get list/dva</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function Dvas($filter='',$base=null){return \mlu\common::gwApi($base?"list/dva/$base?$filter":"list/dva?$filter");}
/**
 * list all items of gwia and optionally filer result by a query-string and container
 * <p>request: get list/gwia</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function Gwias($filter='',$base=null){return \mlu\common::gwApi($base?"list/gwia/$base?$filter":"list/gwia?$filter");}
/**
 * list all items of internet_domain and optionally filer result by a query-string and container
 * <p>request: get list/internet_domain</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function InternetDomains($filter='',$base=null){return \mlu\common::gwApi($base?"list/internet_domain/$base?$filter":"list/internet_domain?$filter");}
/**
 * list all items of ldap_server and optionally filer result by a query-string and container
 * <p>request: get list/ldap_server</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function LdapServers($filter='',$base=null){return \mlu\common::gwApi($base?"list/ldap_server/$base?$filter":"list/ldap_server?$filter");}
/**
 * list all items of ldap_server_assc and optionally filer result by a query-string and container
 * <p>request: get list/ldap_server_assc</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function LdapServerAsscs($filter='',$base=null){return \mlu\common::gwApi($base?"list/ldap_server_assc/$base?$filter":"list/ldap_server_assc?$filter");}
/**
 * list all items of library and optionally filer result by a query-string and container
 * <p>request: get list/library</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function Libraries($filter='',$base=null){return \mlu\common::gwApi($base?"list/library/$base?$filter":"list/library?$filter");}
/**
 * list all items of library_access_rights and optionally filer result by a query-string and container
 * <p>request: get list/library_access_rights</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function LibraryAccessRights($filter='',$base=null){return \mlu\common::gwApi($base?"list/library_access_rights/$base?$filter":"list/library_access_rights?$filter");}
/**
 * list all items of library_area and optionally filer result by a query-string and container
 * <p>request: get list/library_area</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function LibraryAreas($filter='',$base=null){return \mlu\common::gwApi($base?"list/library_area/$base?$filter":"list/library_area?$filter");}
/**
 * list all items of mta and optionally filer result by a query-string and container
 * <p>request: get list/mta</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function Mtas($filter='',$base=null){return \mlu\common::gwApi($base?"list/mta/$base?$filter":"list/mta?$filter");}
/**
 * list all items of mta_profile and optionally filer result by a query-string and container
 * <p>request: get list/mta_profile</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function MtaProfiles($filter='',$base=null){return \mlu\common::gwApi($base?"list/mta_profile/$base?$filter":"list/mta_profile?$filter");}
/**
 * list all items of must_message and optionally filer result by a query-string and container
 * <p>request: get list/must_message</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function MustMessages($filter='',$base=null){return \mlu\common::gwApi($base?"list/must_message/$base?$filter":"list/must_message?$filter");}
/**
 * list all items of nds_ds_field_map and optionally filer result by a query-string and container
 * <p>request: get list/nds_ds_field_map</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function NdsDsFieldMaps($filter='',$base=null){return \mlu\common::gwApi($base?"list/nds_ds_field_map/$base?$filter":"list/nds_ds_field_map?$filter");}
/**
 * list all items of nickname and optionally filer result by a query-string and container
 * <p>request: get list/nickname</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function Nicknames($filter='',$base=null){return \mlu\common::gwApi($base?"list/nickname/$base?$filter":"list/nickname?$filter");}
/**
 * list all items of poa and optionally filer result by a query-string and container
 * <p>request: get list/poa</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function Poas($filter='',$base=null){return \mlu\common::gwApi($base?"list/poa/$base?$filter":"list/poa?$filter");}
/**
 * list all items of post_office and optionally filer result by a query-string and container
 * <p>request: get list/post_office</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function PostOffices($filter='',$base=null){return \mlu\common::gwApi($base?"list/post_office/$base?$filter":"list/post_office?$filter");}
/**
 * list all items of resource and optionally filer result by a query-string and container
 * <p>request: get list/resource</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function Resources($filter='',$base=null){return \mlu\common::gwApi($base?"list/resource/$base?$filter":"list/resource?$filter");}
/**
 * list all items of restore_area and optionally filer result by a query-string and container
 * <p>request: get list/restore_area</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function RestoreAreas($filter='',$base=null){return \mlu\common::gwApi($base?"list/restore_area/$base?$filter":"list/restore_area?$filter");}
/**
 * list all items of scheduled_event and optionally filer result by a query-string and container
 * <p>request: get list/scheduled_event</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function ScheduledEvents($filter='',$base=null){return \mlu\common::gwApi($base?"list/scheduled_event/$base?$filter":"list/scheduled_event?$filter");}
/**
 * list all items of software_area and optionally filer result by a query-string and container
 * <p>request: get list/software_area</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function SoftwareAreas($filter='',$base=null){return \mlu\common::gwApi($base?"list/software_area/$base?$filter":"list/software_area?$filter");}
/**
 * list all items of system_record and optionally filer result by a query-string and container
 * <p>request: get list/system_record</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function SystemRecords($filter='',$base=null){return \mlu\common::gwApi($base?"list/system_record/$base?$filter":"list/system_record?$filter");}
/**
 * list all items of timezone and optionally filer result by a query-string and container
 * <p>request: get list/timezone</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function Timezones($filter='',$base=null){return \mlu\common::gwApi($base?"list/timezone/$base?$filter":"list/timezone?$filter");}
/**
 * list all items of trusted_app and optionally filer result by a query-string and container
 * <p>request: get list/trusted_app</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function TrustedApps($filter='',$base=null){return \mlu\common::gwApi($base?"list/trusted_app/$base?$filter":"list/trusted_app?$filter");}
/**
 * list all items of user and optionally filer result by a query-string and container
 * <p>request: get list/user</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function Users($filter='',$base=null){return \mlu\common::gwApi($base?"list/user/$base?$filter":"list/user?$filter");}
/**
 * list all items of web_access_agent and optionally filer result by a query-string and container
 * <p>request: get list/web_access_agent</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function WebAccessAgents($filter='',$base=null){return \mlu\common::gwApi($base?"list/web_access_agent/$base?$filter":"list/web_access_agent?$filter");}
/**
 * list all items of x400_record and optionally filer result by a query-string and container
 * <p>request: get list/x400_record</p>
 * <p>additionally to the object\'s attributes you may provide the following parameters:<ul>
<li>count - set the number of results per page</li>
<li>attrs - set properties to display by comma-separated list</li>
<li>nextId - get the next page by providing the matching number in result-set</li>
<li>return=ids - do not render data but return matching internal ids</li>
<li>ids - get objects matching internal ids; comma-separated list</li>
</ul></p>
 * @param string $filter Querystring to put into the request-url where name=value meets property-name and object-value
 * @param string $base ID of containing object
 * @return mlu\groupwise\apiResult|mlu\groupwise\xsd\listResult
 */
function X400Records($filter='',$base=null){return \mlu\common::gwApi($base?"list/x400_record/$base?$filter":"list/x400_record?$filter");}