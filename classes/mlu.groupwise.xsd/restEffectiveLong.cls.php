<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restEffectiveLong extends restEffectiveValue{
	/**
	 * @var int $inheritedValue
	 * minOccurs: 0
	 */
	public $inheritedValue;
	/**
	 * @var int $value
	 * minOccurs: 0
	 */
	public $value;
}
