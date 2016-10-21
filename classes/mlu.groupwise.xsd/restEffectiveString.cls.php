<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restEffectiveString extends restEffectiveValue{
	/**
	 * @var string $inheritedValue
	 * minOccurs: 0
	 */
	public $inheritedValue;
	/**
	 * @var string $value
	 * minOccurs: 0
	 */
	public $value;
}
