<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restService extends restGwObject{
	/**
	 * @var string $description
	 * minOccurs: 0
	 */
	public $description;
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
	 * @var boolean $sslEnabled
	 * minOccurs: 0
	 */
	public $sslEnabled;
}
