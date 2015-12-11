<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class queryAttribute {
	/**
	 * @var string[] $values
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $values;
}
