<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class signingAlgorithmWrapper extends clientOptionWrapper{
	/**
	 * @var signingAlgorithm $value
	 * minOccurs: 0
	 */
	public $value;
}
