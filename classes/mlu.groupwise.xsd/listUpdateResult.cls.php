<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class listUpdateResult {
	/**
	 * @var apiStatus[] $created
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $created;
	/**
	 * @var apiStatus[] $updated
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $updated;
	/**
	 * @var apiStatus[] $deleted
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $deleted;
}
