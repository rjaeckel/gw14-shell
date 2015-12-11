<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class moveRequest {
	/**
	 * @var string $postOfficeId
	 * minOccurs: 0
	 */
	public $postOfficeId;
	/**
	 * @var moveSource[] $sources
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $sources;
}
