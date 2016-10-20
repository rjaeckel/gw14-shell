<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class addressBookView {
	/**
	 * @var addressBookField[] $fields
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $fields;
}
