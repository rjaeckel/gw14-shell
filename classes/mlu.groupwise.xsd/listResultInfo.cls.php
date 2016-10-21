<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class listResultInfo {
	/**
	 * @var int $nextId
	 * minOccurs: 0
	 */
	public $nextId;
	/**
	 * @var int $outOf
	 * minOccurs: 0
	 */
	public $outOf;
}
