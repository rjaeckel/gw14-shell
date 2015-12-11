<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class exchangeCoexistenceProfile {
	/**
	 * @var activeDirectoryDisplayNameFormat $activeDirectoryDisplayNameFormat
	 * minOccurs: 0
	 */
	public $activeDirectoryDisplayNameFormat;
	/**
	 * @var string $activeDirectoryGroupWiseBaseContext
	 * minOccurs: 0
	 */
	public $activeDirectoryGroupWiseBaseContext;
	/**
	 * @var string $activeDirectoryLdapAddress
	 * minOccurs: 0
	 */
	public $activeDirectoryLdapAddress;
	/**
	 * @var string $activeDirectoryLdapPassword
	 * minOccurs: 0
	 */
	public $activeDirectoryLdapPassword;
	/**
	 * @var int $activeDirectoryLdapPort
	 * minOccurs: 0
	 */
	public $activeDirectoryLdapPort;
	/**
	 * @var string $activeDirectoryLdapSslKeyFile
	 * minOccurs: 0
	 */
	public $activeDirectoryLdapSslKeyFile;
	/**
	 * @var boolean $activeDirectoryLdapUseSsl
	 * minOccurs: 0
	 */
	public $activeDirectoryLdapUseSsl;
	/**
	 * @var string $activeDirectoryLdapUser
	 * minOccurs: 0
	 */
	public $activeDirectoryLdapUser;
	/**
	 * @var string $defaultInternetAgentDomain
	 * minOccurs: 0
	 */
	public $defaultInternetAgentDomain;
	/**
	 * @var string $defaultInternetAgentName
	 * minOccurs: 0
	 */
	public $defaultInternetAgentName;
	/**
	 * @var string $exchangeClientAccessUrl
	 * minOccurs: 0
	 */
	public $exchangeClientAccessUrl;
	/**
	 * @var exchangeContext[] $exchangeContexts
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $exchangeContexts;
	/**
	 * @var string $exchangeGalDn
	 * minOccurs: 0
	 */
	public $exchangeGalDn;
	/**
	 * @var string $groupWiseExternalDomainName
	 * minOccurs: 0
	 */
	public $groupWiseExternalDomainName;
	/**
	 * @var boolean $profileEnabled
	 * minOccurs: 0
	 */
	public $profileEnabled;
	/**
	 * @var string $profileName
	 * minOccurs: 0
	 */
	public $profileName;
	/**
	 * @var string $syncExchangeGroup
	 * minOccurs: 0
	 */
	public $syncExchangeGroup;
	/**
	 * @var boolean $syncExchangeMailContacts
	 * minOccurs: 0
	 */
	public $syncExchangeMailContacts;
	/**
	 * @var boolean $syncGroupWiseExternalObjects
	 * minOccurs: 0
	 */
	public $syncGroupWiseExternalObjects;
	/**
	 * @var string $syncGroupWiseGroup
	 * minOccurs: 0
	 */
	public $syncGroupWiseGroup;
}
