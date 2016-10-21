<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class addressBookField {
	/**
	 * @var field $name
	 * minOccurs: 0
	 */
	public $name;
	/**
	 * @var int $id
	 * minOccurs: 0
	 */
	public $id;
	/**
	 * @var string $label
	 * minOccurs: 0
	 */
	public $label;
}
