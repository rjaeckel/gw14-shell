<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class objectAttributes {
	/**
	 * @var restAttribute[] $attr
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $attr;
}
