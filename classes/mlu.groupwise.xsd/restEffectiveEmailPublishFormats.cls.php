<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restEffectiveEmailPublishFormats extends restEffectiveValue{
	/**
	 * @var emailPublishFormats[] $inheritedValue
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $inheritedValue;
	/**
	 * @var emailPublishFormats[] $value
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $value;
}
