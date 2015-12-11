<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class nodeConfig {
	/**
	 * @var nodeConfigInstance[] $configInstance
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $configInstance;
	/**
	 * @var string $osType
	 * minOccurs: 0
	 */
	public $osType;
}
