<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class trustedapp extends restGwObject{
	/**
	 * @var boolean $allowArchiveService
	 * minOccurs: 0
	 */
	public $allowArchiveService;
	/**
	 * @var string $archiveServiceAddress
	 * minOccurs: 0
	 */
	public $archiveServiceAddress;
	/**
	 * @var int $archiveServicePort
	 * minOccurs: 0
	 */
	public $archiveServicePort;
	/**
	 * @var boolean $archiveServiceRequiresSsl
	 * minOccurs: 0
	 */
	public $archiveServiceRequiresSsl;
	/**
	 * @var string $archiveServiceTrustedApplicationID
	 * minOccurs: 0
	 */
	public $archiveServiceTrustedApplicationID;
	/**
	 * @var string $description
	 * minOccurs: 0
	 */
	public $description;
	/**
	 * @var boolean $enabled
	 * minOccurs: 0
	 */
	public $enabled;
	/**
	 * @var string $ipAddress
	 * minOccurs: 0
	 */
	public $ipAddress;
	/**
	 * @var int $ipPort
	 * minOccurs: 0
	 */
	public $ipPort;
	/**
	 * @var boolean $NMAPEnabled
	 * minOccurs: 0
	 */
	public $NMAPEnabled;
	/**
	 * @var boolean $providesRetentionService
	 * minOccurs: 0
	 */
	public $providesRetentionService;
	/**
	 * @var boolean $queuingDisabled
	 * minOccurs: 0
	 */
	public $queuingDisabled;
	/**
	 * @var boolean $requiresSsl
	 * minOccurs: 0
	 */
	public $requiresSsl;
}
