<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class domainLink extends restGwObject{
	/**
	 * @var string $domainName
	 * minOccurs: 0
	 */
	public $domainName;
	/**
	 * @var string $gatewayAccessString
	 * minOccurs: 0
	 */
	public $gatewayAccessString;
	/**
	 * @var string $gatewayName
	 * minOccurs: 0
	 */
	public $gatewayName;
	/**
	 * @var string $ipAddress
	 * minOccurs: 0
	 */
	public $ipAddress;
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
	 * @var string $linkAri
	 * minOccurs: 0
	 */
	public $linkAri;
	/**
	 * @var string $linkDestDomainName
	 * minOccurs: 0
	 */
	public $linkDestDomainName;
	/**
	 * @var string $linkHopDomainName
	 * minOccurs: 0
	 */
	public $linkHopDomainName;
	/**
	 * @var boolean $linkOverride
	 * minOccurs: 0
	 */
	public $linkOverride;
	/**
	 * @var string $linkReturnDomain
	 * minOccurs: 0
	 */
	public $linkReturnDomain;
	/**
	 * @var linkType $linkType
	 * minOccurs: 0
	 */
	public $linkType;
	/**
	 * @var int $msgDelayLimit
	 * minOccurs: 0
	 */
	public $msgDelayLimit;
	/**
	 * @var int $msgSendLimit
	 * minOccurs: 0
	 */
	public $msgSendLimit;
	/**
	 * @var int $mtpPort
	 * minOccurs: 0
	 */
	public $mtpPort;
	/**
	 * @var string $networkReattachString
	 * minOccurs: 0
	 */
	public $networkReattachString;
	/**
	 * @var string $path
	 * minOccurs: 0
	 */
	public $path;
	/**
	 * @var int $transferPullCycle
	 * minOccurs: 0
	 */
	public $transferPullCycle;
	/**
	 * @var string $transferPullDirectory
	 * minOccurs: 0
	 */
	public $transferPullDirectory;
	/**
	 * @var boolean $uncOverride
	 * minOccurs: 0
	 */
	public $uncOverride;
	/**
	 * @var string $uncPullDir
	 * minOccurs: 0
	 */
	public $uncPullDir;
}
