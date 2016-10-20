<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restAgent extends restGwObject{
	/**
	 * @var int $adminPort
	 * minOccurs: 0
	 */
	public $adminPort;
	/**
	 * @var agentType $agentType
	 * minOccurs: 0
	 */
	public $agentType;
	/**
	 * @var boolean $autoDBRecovery
	 * minOccurs: 0
	 */
	public $autoDBRecovery;
	/**
	 * @var boolean $bindExclusive
	 * minOccurs: 0
	 */
	public $bindExclusive;
	/**
	 * @var string $description
	 * minOccurs: 0
	 */
	public $description;
	/**
	 * @var string $domainName
	 * minOccurs: 0
	 */
	public $domainName;
	/**
	 * @var boolean $hasHttpPassword
	 * minOccurs: 0
	 */
	public $hasHttpPassword;
	/**
	 * @var boolean $hasSslKeyPassword
	 * minOccurs: 0
	 */
	public $hasSslKeyPassword;
	/**
	 * @var string $httpPassword
	 * minOccurs: 0
	 */
	public $httpPassword;
	/**
	 * @var int $httpPort
	 * minOccurs: 0
	 */
	public $httpPort;
	/**
	 * @var string $httpUser
	 * minOccurs: 0
	 */
	public $httpUser;
	/**
	 * @var sslStatus $httpUsesSsl
	 * minOccurs: 0
	 */
	public $httpUsesSsl;
	/**
	 * @var string $ipAddress
	 * minOccurs: 0
	 */
	public $ipAddress;
	/**
	 * @var string $legacyDn
	 * minOccurs: 0
	 */
	public $legacyDn;
	/**
	 * @var string $logFilePath
	 * minOccurs: 0
	 */
	public $logFilePath;
	/**
	 * @var logLevel $logLevel
	 * minOccurs: 0
	 */
	public $logLevel;
	/**
	 * @var int $mtpPort
	 * minOccurs: 0
	 */
	public $mtpPort;
	/**
	 * @var sslStatus $mtpUsesSsl
	 * minOccurs: 0
	 */
	public $mtpUsesSsl;
	/**
	 * @var platform $platform
	 * minOccurs: 0
	 */
	public $platform;
	/**
	 * @var string $snmpCommunityGetString
	 * minOccurs: 0
	 */
	public $snmpCommunityGetString;
	/**
	 * @var string $sslCertificateFile
	 * minOccurs: 0
	 */
	public $sslCertificateFile;
	/**
	 * @var string $sslKeyFile
	 * minOccurs: 0
	 */
	public $sslKeyFile;
	/**
	 * @var string $sslKeyPassword
	 * minOccurs: 0
	 */
	public $sslKeyPassword;
}
