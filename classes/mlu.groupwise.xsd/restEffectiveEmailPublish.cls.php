<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restEffectiveEmailPublish extends restEffectiveValue{
	/**
	 * @var emailPublish[] $inheritedValue
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $inheritedValue;
	/**
	 * @var emailPublish[] $value
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $value;
}
