<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class dbinfo {
	/**
	 * @var int $adminPort
	 * minOccurs: 0
	 */
	public $adminPort;
	/**
	 * @var string $appName
	 * minOccurs: 0
	 */
	public $appName;
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
	 * @var domainType $domainType
	 * minOccurs: 0
	 */
	public $domainType;
	/**
	 * @var boolean $hasCertificate
	 * minOccurs: 0
	 */
	public $hasCertificate;
	/**
	 * @var string $ipAddress
	 * minOccurs: 0
	 */
	public $ipAddress;
	/**
	 * @var string $path
	 * minOccurs: 0
	 */
	public $path;
	/**
	 * @var string $postOfficeName
	 * minOccurs: 0
	 */
	public $postOfficeName;
	/**
	 * @var string $systemGuid
	 * minOccurs: 0
	 */
	public $systemGuid;
	/**
	 * @var string $systemName
	 * minOccurs: 0
	 */
	public $systemName;
	/**
	 * @var int $version
	 * minOccurs: 0
	 */
	public $version;
}
