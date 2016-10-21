<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restEffectivePreferredAddressFormat extends restEffectiveValue{
	/**
	 * @var preferredAddressFormat $inheritedValue
	 * minOccurs: 0
	 */
	public $inheritedValue;
	/**
	 * @var preferredAddressFormat $value
	 * minOccurs: 0
	 */
	public $value;
}
