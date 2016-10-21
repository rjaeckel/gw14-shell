<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class internetDomain extends restGwObject{
	/**
	 * @var string $description
	 * minOccurs: 0
	 */
	public $description;
	/**
	 * @var boolean $externalSync
	 * minOccurs: 0
	 */
	public $externalSync;
}
