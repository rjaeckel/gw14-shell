<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class field extends \mlu\rest\xsd_restriction { 
	const DOMAIN='DOMAIN';
	const POST_OFFICE='POST_OFFICE';
	const USER_ID='USER_ID';
	const FILE_ID='FILE_ID';
	const ACCOUNT_ID='ACCOUNT_ID';
	const DN='DN';
	const NETWORK_ID='NETWORK_ID';
	const PERSONAL_TITLE='PERSONAL_TITLE';
	const GIVEN_NAME='GIVEN_NAME';
	const MIDDLE_NAME='MIDDLE_NAME';
	const LAST_NAME='LAST_NAME';
	const GENERATION='GENERATION';
	const COMPANY='COMPANY';
	const DEPARTMENT='DEPARTMENT';
	const TITLE='TITLE';
	const STREET_ADDRESS='STREET_ADDRESS';
	const PO_BOX='PO_BOX';
	const CITY='CITY';
	const STATE_OR_PROVINCE='STATE_OR_PROVINCE';
	const POSTAL_CODE='POSTAL_CODE';
	const LOCATION='LOCATION';
	const PHONE='PHONE';
	const MOBILE='MOBILE';
	const HOME_PHONE='HOME_PHONE';
	const OTHER_PHONE='OTHER_PHONE';
	const FAX='FAX';
	const PAGER='PAGER';
	const INTERNET_FREE_BUSY_URL='INTERNET_FREE_BUSY_URL';
	const DESCRIPTION='DESCRIPTION';
	const ADMIN_DEFINED_1='ADMIN_DEFINED_1';
	const ADMIN_DEFINED_2='ADMIN_DEFINED_2';
	const ADMIN_DEFINED_3='ADMIN_DEFINED_3';
	const ADMIN_DEFINED_4='ADMIN_DEFINED_4';
	const ADMIN_DEFINED_5='ADMIN_DEFINED_5';
	const ADMIN_DEFINED_6='ADMIN_DEFINED_6';
	const ADMIN_DEFINED_7='ADMIN_DEFINED_7';
	const ADMIN_DEFINED_8='ADMIN_DEFINED_8';
	const ADMIN_DEFINED_9='ADMIN_DEFINED_9';
	const ADMIN_DEFINED_10='ADMIN_DEFINED_10';
	const ADMIN_DEFINED_11='ADMIN_DEFINED_11';
	const ADMIN_DEFINED_12='ADMIN_DEFINED_12';
	const ADMIN_DEFINED_13='ADMIN_DEFINED_13';
	const ADMIN_DEFINED_14='ADMIN_DEFINED_14';
	const ADMIN_DEFINED_15='ADMIN_DEFINED_15';
	const ADMIN_DEFINED_16='ADMIN_DEFINED_16';
	const ADMIN_DEFINED_17='ADMIN_DEFINED_17';
	const ADMIN_DEFINED_18='ADMIN_DEFINED_18';
	const ADMIN_DEFINED_19='ADMIN_DEFINED_19';
	const ADMIN_DEFINED_20='ADMIN_DEFINED_20';
}