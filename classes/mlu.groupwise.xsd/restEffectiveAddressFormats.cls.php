<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restEffectiveAddressFormats extends restEffectiveValue{
	/**
	 * @var addressFormats[] $inheritedValue
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $inheritedValue;
	/**
	 * @var addressFormats[] $value
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $value;
}
