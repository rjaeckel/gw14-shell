<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class user extends restDeliverable{
	/**
	 * @var string $accountId
	 * minOccurs: 0
	 */
	public $accountId;
	/**
	 * @var string $adminDefined1
	 * minOccurs: 0
	 */
	public $adminDefined1;
	/**
	 * @var string $adminDefined10
	 * minOccurs: 0
	 */
	public $adminDefined10;
	/**
	 * @var string $adminDefined11
	 * minOccurs: 0
	 */
	public $adminDefined11;
	/**
	 * @var string $adminDefined12
	 * minOccurs: 0
	 */
	public $adminDefined12;
	/**
	 * @var string $adminDefined13
	 * minOccurs: 0
	 */
	public $adminDefined13;
	/**
	 * @var string $adminDefined14
	 * minOccurs: 0
	 */
	public $adminDefined14;
	/**
	 * @var string $adminDefined15
	 * minOccurs: 0
	 */
	public $adminDefined15;
	/**
	 * @var string $adminDefined16
	 * minOccurs: 0
	 */
	public $adminDefined16;
	/**
	 * @var string $adminDefined17
	 * minOccurs: 0
	 */
	public $adminDefined17;
	/**
	 * @var string $adminDefined18
	 * minOccurs: 0
	 */
	public $adminDefined18;
	/**
	 * @var string $adminDefined19
	 * minOccurs: 0
	 */
	public $adminDefined19;
	/**
	 * @var string $adminDefined2
	 * minOccurs: 0
	 */
	public $adminDefined2;
	/**
	 * @var string $adminDefined20
	 * minOccurs: 0
	 */
	public $adminDefined20;
	/**
	 * @var string $adminDefined3
	 * minOccurs: 0
	 */
	public $adminDefined3;
	/**
	 * @var string $adminDefined4
	 * minOccurs: 0
	 */
	public $adminDefined4;
	/**
	 * @var string $adminDefined5
	 * minOccurs: 0
	 */
	public $adminDefined5;
	/**
	 * @var string $adminDefined6
	 * minOccurs: 0
	 */
	public $adminDefined6;
	/**
	 * @var string $adminDefined7
	 * minOccurs: 0
	 */
	public $adminDefined7;
	/**
	 * @var string $adminDefined8
	 * minOccurs: 0
	 */
	public $adminDefined8;
	/**
	 * @var string $adminDefined9
	 * minOccurs: 0
	 */
	public $adminDefined9;
	/**
	 * @var string $city
	 * minOccurs: 0
	 */
	public $city;
	/**
	 * @var string $company
	 * minOccurs: 0
	 */
	public $company;
	/**
	 * @var string $department
	 * minOccurs: 0
	 */
	public $department;
	/**
	 * @var boolean $externalEntity
	 * minOccurs: 0
	 */
	public $externalEntity;
	/**
	 * @var boolean $externalRecord
	 * minOccurs: 0
	 */
	public $externalRecord;
	/**
	 * @var boolean $externalSync
	 * minOccurs: 0
	 */
	public $externalSync;
	/**
	 * @var externalSync $externalSyncOverride
	 * minOccurs: 0
	 */
	public $externalSyncOverride;
	/**
	 * @var string $faxNumber
	 * minOccurs: 0
	 */
	public $faxNumber;
	/**
	 * @var string $gatewayAccess
	 * minOccurs: 0
	 */
	public $gatewayAccess;
	/**
	 * @var string $givenName
	 * minOccurs: 0
	 */
	public $givenName;
	/**
	 * @var string $homePhoneNumber
	 * minOccurs: 0
	 */
	public $homePhoneNumber;
	/**
	 * @var string $internetFreeBusyUrl
	 * minOccurs: 0
	 */
	public $internetFreeBusyUrl;
	/**
	 * @var int $lastClientLoginTime
	 * minOccurs: 0
	 */
	public $lastClientLoginTime;
	/**
	 * @var clientType $lastClientType
	 * minOccurs: 0
	 */
	public $lastClientType;
	/**
	 * @var string $ldapAuthentication
	 * minOccurs: 0
	 */
	public $ldapAuthentication;
	/**
	 * @var string $ldapAuthenticationDirectory
	 * minOccurs: 0
	 */
	public $ldapAuthenticationDirectory;
	/**
	 * @var string $location
	 * minOccurs: 0
	 */
	public $location;
	/**
	 * @var mailboxLicenseType $mailboxLicenseType
	 * minOccurs: 0
	 */
	public $mailboxLicenseType;
	/**
	 * @var int $mailboxSizeMb
	 * minOccurs: 0
	 */
	public $mailboxSizeMb;
	/**
	 * @var string $middleInitial
	 * minOccurs: 0
	 */
	public $middleInitial;
	/**
	 * @var string $mobilePhoneNumber
	 * minOccurs: 0
	 */
	public $mobilePhoneNumber;
	/**
	 * @var string $networkId
	 * minOccurs: 0
	 */
	public $networkId;
	/**
	 * @var string $otherPhoneNumber
	 * minOccurs: 0
	 */
	public $otherPhoneNumber;
	/**
	 * @var string $pagerNumber
	 * minOccurs: 0
	 */
	public $pagerNumber;
	/**
	 * @var string $postOfficeBox
	 * minOccurs: 0
	 */
	public $postOfficeBox;
	/**
	 * @var string $postalZipCode
	 * minOccurs: 0
	 */
	public $postalZipCode;
	/**
	 * @var string $prefix
	 * minOccurs: 0
	 */
	public $prefix;
	/**
	 * @var string $stateProvince
	 * minOccurs: 0
	 */
	public $stateProvince;
	/**
	 * @var string $streetAddress
	 * minOccurs: 0
	 */
	public $streetAddress;
	/**
	 * @var string $suffix
	 * minOccurs: 0
	 */
	public $suffix;
	/**
	 * @var string $surname
	 * minOccurs: 0
	 */
	public $surname;
	/**
	 * @var string $telephoneNumber
	 * minOccurs: 0
	 */
	public $telephoneNumber;
	/**
	 * @var string $title
	 * minOccurs: 0
	 */
	public $title;
}
