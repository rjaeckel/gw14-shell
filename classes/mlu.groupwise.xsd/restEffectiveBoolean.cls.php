<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restEffectiveBoolean extends restEffectiveValue{
	/**
	 * @var boolean $inheritedValue
	 * minOccurs: 0
	 */
	public $inheritedValue;
	/**
	 * @var boolean $value
	 * minOccurs: 0
	 */
	public $value;
}
