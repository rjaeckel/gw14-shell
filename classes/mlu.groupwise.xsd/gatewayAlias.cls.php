<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class gatewayAlias extends restObjectReference{
	/**
	 * @var string $alias
	 * minOccurs: 0
	 */
	public $alias;
	/**
	 * @var string $aliasType
	 * minOccurs: 0
	 */
	public $aliasType;
}
