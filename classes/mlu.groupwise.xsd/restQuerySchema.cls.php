<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restQuerySchema {
	/**
	 * @var queryAttribute[] $attr
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 */
	public $attr;
}
