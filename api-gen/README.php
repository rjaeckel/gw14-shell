<?php

/**
 * @ignore
 * 
 * Anscheinend sind viele PUT-Operationen batch-fähig;
 * Zu erkennen scheint dies am Attribut "maxOccurs"="unbounded" in der xsd-datei zu sein...
 *   class groupMemberListUpdate {
 *     public $add; //type="member" nillable="true" minOccurs="0" maxOccurs="unbounded"
 *     ...
 *   }
 * BEISPIEL, batch:
 * PUT https://localhost:9999/gwadmin-service/domains/testDom1/postoffices/testPO1/groups/testGroup1/members
 *   {
 *     "add":[
 *       {"id":"USER.testDom1.testPO1.testGroupMember4", "participation":"PRIMARY"},
 *       {"id":"USER.testDom1.testPO1.testGroupMember3", "participation":"CARBON_COPY"},
 *     ],
 *     "remove":[
 *       "USER.testDom1.testPO1.testGroupMember5",
 *       "USER.testDom1.testPO1.testGroupMember3"
 *     ],
 *     "update":[
 *       {"id":"USER.testDom1.testPO1.testGroupMember5", "participation":"BLIND_COPY"}
 *     ]
 * BEISPIEL, einfacher add:
 * PUT {"add":{"id":"USER.dom.po.user","participation":"PRIMARY"}}
 */