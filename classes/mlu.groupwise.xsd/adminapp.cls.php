<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class adminapp extends restGwObject{
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
	 * @var string $password
	 * minOccurs: 0
	 */
	public $password;
	/**
	 * @var boolean $requiresSsl
	 * minOccurs: 0
	 */
	public $requiresSsl;
}
