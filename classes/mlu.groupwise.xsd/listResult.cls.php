<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class listResult {
	/**
	 * @var string $ids
	 * minOccurs: 0
	 */
	public $ids;
	/**
	 * @var anyType[] $object
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 */
	public $object;
	/**
	 * @var listResultInfo $resultInfo
	 * minOccurs: 0
	 * ref: resultInfo
	 */
	public $resultInfo;
}
