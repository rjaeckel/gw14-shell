<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class stringArrayWrapper extends clientOptionWrapper{
	/**
	 * @var string[] $value
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $value;
}
