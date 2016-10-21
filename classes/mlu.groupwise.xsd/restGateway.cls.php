<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restGateway extends restGwObject{
	/**
	 * @var boolean $bindExclusive
	 * minOccurs: 0
	 */
	public $bindExclusive;
	/**
	 * @var string $domainName
	 * minOccurs: 0
	 */
	public $domainName;
	/**
	 * @var string $fileId
	 * minOccurs: 0
	 */
	public $fileId;
	/**
	 * @var string $gatewaySubDirectory
	 * minOccurs: 0
	 */
	public $gatewaySubDirectory;
	/**
	 * @var gatewayType $gatewayType
	 * minOccurs: 0
	 */
	public $gatewayType;
	/**
	 * @var int $gatewayVersion
	 * minOccurs: 0
	 */
	public $gatewayVersion;
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
	 * @var string $path
	 * minOccurs: 0
	 */
	public $path;
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
