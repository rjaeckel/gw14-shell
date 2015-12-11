<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class batchResult {
	/**
	 * @var error[] $failed
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $failed;
	/**
	 * @var int $succeeded
	 */
	public $succeeded;
}
