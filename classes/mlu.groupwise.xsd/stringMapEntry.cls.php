<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class stringMapEntry {
	/**
	 * @var string $key
	 * minOccurs: 0
	 */
	public $key;
	/**
	 * @var string $value
	 * minOccurs: 0
	 */
	public $value;
}
