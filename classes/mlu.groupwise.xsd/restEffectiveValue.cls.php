<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restEffectiveValue {
	/**
	 * @var boolean $inherited
	 * minOccurs: 0
	 */
	public $inherited;
	/**
	 * @var string $inheritedFrom
	 * minOccurs: 0
	 */
	public $inheritedFrom;
}
