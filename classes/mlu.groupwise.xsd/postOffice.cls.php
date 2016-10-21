<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class postOffice extends restInternetAddressingProps{
	/**
	 * @var accessMode $accessMode
	 * minOccurs: 0
	 */
	public $accessMode;
	/**
	 * @var string $archiveServiceTrustedAppName
	 * minOccurs: 0
	 */
	public $archiveServiceTrustedAppName;
	/**
	 * @var int $clientLastUpdateTime
	 * minOccurs: 0
	 */
	public $clientLastUpdateTime;
	/**
	 * @var clientLockout $clientLockout
	 * minOccurs: 0
	 */
	public $clientLockout;
	/**
	 * @var int $clientLockoutDate
	 * minOccurs: 0
	 */
	public $clientLockoutDate;
	/**
	 * @var string $clientLockoutVersion
	 * minOccurs: 0
	 */
	public $clientLockoutVersion;
	/**
	 * @var int $clientUpdateBumpNumber
	 * minOccurs: 0
	 */
	public $clientUpdateBumpNumber;
	/**
	 * @var deliveryMode $deliveryMode
	 * minOccurs: 0
	 */
	public $deliveryMode;
	/**
	 * @var int $deltaRecordsMaxAge
	 * minOccurs: 0
	 */
	public $deltaRecordsMaxAge;
	/**
	 * @var string $description
	 * minOccurs: 0
	 */
	public $description;
	/**
	 * @var boolean $disableDeltaRecords
	 * minOccurs: 0
	 */
	public $disableDeltaRecords;
	/**
	 * @var boolean $disableLdapPasswordChange
	 * minOccurs: 0
	 */
	public $disableLdapPasswordChange;
	/**
	 * @var boolean $disableLiveMove
	 * minOccurs: 0
	 */
	public $disableLiveMove;
	/**
	 * @var boolean $disableLogins
	 * minOccurs: 0
	 */
	public $disableLogins;
	/**
	 * @var string $domainName
	 * minOccurs: 0
	 */
	public $domainName;
	/**
	 * @var restEffectiveBoolean $enableICalBrowse
	 * minOccurs: 0
	 */
	public $enableICalBrowse;
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
	 * @var string $fileId
	 * minOccurs: 0
	 */
	public $fileId;
	/**
	 * @var boolean $intruderDetection
	 * minOccurs: 0
	 */
	public $intruderDetection;
	/**
	 * @var int $intruderLockoutAttempts
	 * minOccurs: 0
	 */
	public $intruderLockoutAttempts;
	/**
	 * @var int $intruderLockoutAttemptsInterval
	 * minOccurs: 0
	 */
	public $intruderLockoutAttemptsInterval;
	/**
	 * @var int $intruderLockoutResetInterval
	 * minOccurs: 0
	 */
	public $intruderLockoutResetInterval;
	/**
	 * @var string $language
	 * minOccurs: 0
	 */
	public $language;
	/**
	 * @var int $languageId
	 * minOccurs: 0
	 */
	public $languageId;
	/**
	 * @var int $ldapInactiveConnectionTimeout
	 * minOccurs: 0
	 */
	public $ldapInactiveConnectionTimeout;
	/**
	 * @var string $ldapPassword
	 * minOccurs: 0
	 */
	public $ldapPassword;
	/**
	 * @var int $ldapPoolServerResetTimeout
	 * minOccurs: 0
	 */
	public $ldapPoolServerResetTimeout;
	/**
	 * @var int $ldapQuarantineThreshold
	 * minOccurs: 0
	 */
	public $ldapQuarantineThreshold;
	/**
	 * @var string $ldapUser
	 * minOccurs: 0
	 */
	public $ldapUser;
	/**
	 * @var string $linkAddress
	 * minOccurs: 0
	 */
	public $linkAddress;
	/**
	 * @var linkAddressType $linkAddressType
	 * minOccurs: 0
	 */
	public $linkAddressType;
	/**
	 * @var string $mtpAppName
	 * minOccurs: 0
	 */
	public $mtpAppName;
	/**
	 * @var int $mtpMaxSendSize
	 * minOccurs: 0
	 */
	public $mtpMaxSendSize;
	/**
	 * @var string $path
	 * minOccurs: 0
	 */
	public $path;
	/**
	 * @var poa $poa
	 * minOccurs: 0
	 * ref: poa
	 */
	public $poa;
	/**
	 * @var int $postOfficeVersion
	 * minOccurs: 0
	 */
	public $postOfficeVersion;
	/**
	 * @var boolean $remoteCreation
	 * minOccurs: 0
	 */
	public $remoteCreation;
	/**
	 * @var string $remotePassword
	 * minOccurs: 0
	 */
	public $remotePassword;
	/**
	 * @var string $remoteUser
	 * minOccurs: 0
	 */
	public $remoteUser;
	/**
	 * @var string $restoreAreaName
	 * minOccurs: 0
	 */
	public $restoreAreaName;
	/**
	 * @var securitySettings[] $securitySettings
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $securitySettings;
	/**
	 * @var string $softwareAreaGuid
	 * minOccurs: 0
	 */
	public $softwareAreaGuid;
	/**
	 * @var string $timezone
	 * minOccurs: 0
	 */
	public $timezone;
	/**
	 * @var string $timezoneId
	 * minOccurs: 0
	 */
	public $timezoneId;
}
