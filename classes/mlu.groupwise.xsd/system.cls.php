<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class system extends restGwObject{
	/**
	 * @var boolean $allowExternalBusySearch
	 * minOccurs: 0
	 */
	public $allowExternalBusySearch;
	/**
	 * @var boolean $allowExternalStatusTracking
	 * minOccurs: 0
	 */
	public $allowExternalStatusTracking;
	/**
	 * @var boolean $allowSendDirect
	 * minOccurs: 0
	 */
	public $allowSendDirect;
	/**
	 * @var addressFormats[] $allowedAddressFormats
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $allowedAddressFormats;
	/**
	 * @var string $archiveServiceApp
	 * minOccurs: 0
	 */
	public $archiveServiceApp;
	/**
	 * @var autoCreateNickname $autoCreateNickname
	 * minOccurs: 0
	 */
	public $autoCreateNickname;
	/**
	 * @var boolean $autoSetUserRights
	 * minOccurs: 0
	 */
	public $autoSetUserRights;
	/**
	 * @var string $defaultGlobalSignatureName
	 * minOccurs: 0
	 */
	public $defaultGlobalSignatureName;
	/**
	 * @var string $defaultInternetAgentName
	 * minOccurs: 0
	 */
	public $defaultInternetAgentName;
	/**
	 * @var string $defaultNewUserPassword
	 * minOccurs: 0
	 */
	public $defaultNewUserPassword;
	/**
	 * @var string $defaultRoutingDomain
	 * minOccurs: 0
	 */
	public $defaultRoutingDomain;
	/**
	 * @var string $description
	 * minOccurs: 0
	 */
	public $description;
	/**
	 * @var emailPublish[] $emailPublish
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $emailPublish;
	/**
	 * @var emailPublishFormats[] $emailPublishFormats
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $emailPublishFormats;
	/**
	 * @var boolean $enableICalBrowse
	 * minOccurs: 0
	 */
	public $enableICalBrowse;
	/**
	 * @var boolean $exclusiveInternetDomain
	 * minOccurs: 0
	 */
	public $exclusiveInternetDomain;
	/**
	 * @var boolean $firstInitialLastNameMatch
	 * minOccurs: 0
	 */
	public $firstInitialLastNameMatch;
	/**
	 * @var boolean $forceMessages
	 * minOccurs: 0
	 */
	public $forceMessages;
	/**
	 * @var string $internetAgentForOutboundMsgs
	 * minOccurs: 0
	 */
	public $internetAgentForOutboundMsgs;
	/**
	 * @var string $internetDomainName
	 * minOccurs: 0
	 */
	public $internetDomainName;
	/**
	 * @var string $legacyDn
	 * minOccurs: 0
	 */
	public $legacyDn;
	/**
	 * @var boolean $lockoutOldAdmin
	 * minOccurs: 0
	 */
	public $lockoutOldAdmin;
	/**
	 * @var int $minimumAdminReleaseDate
	 * minOccurs: 0
	 */
	public $minimumAdminReleaseDate;
	/**
	 * @var string $minimumAdminVersion
	 * minOccurs: 0
	 */
	public $minimumAdminVersion;
	/**
	 * @var string $monitorUrl
	 * minOccurs: 0
	 */
	public $monitorUrl;
	/**
	 * @var int $nicknameExpireDays
	 * minOccurs: 0
	 */
	public $nicknameExpireDays;
	/**
	 * @var preferredAddressFormat $preferredAddressFormat
	 * minOccurs: 0
	 */
	public $preferredAddressFormat;
	/**
	 * @var boolean $restrictOpsToPrimaryDom
	 * minOccurs: 0
	 */
	public $restrictOpsToPrimaryDom;
	/**
	 * @var boolean $showDirXMLWarnings
	 * minOccurs: 0
	 */
	public $showDirXMLWarnings;
	/**
	 * @var string $systemAdminName
	 * minOccurs: 0
	 */
	public $systemAdminName;
	/**
	 * @var systemType $systemType
	 * minOccurs: 0
	 */
	public $systemType;
	/**
	 * @var boolean $useFullDN
	 * minOccurs: 0
	 */
	public $useFullDN;
}
