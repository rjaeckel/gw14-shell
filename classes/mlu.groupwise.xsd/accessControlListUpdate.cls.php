<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class accessControlListUpdate {
	/**
	 * @var accessControl[] $add
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $add;
	/**
	 * @var accessControl[] $update
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $update;
	/**
	 * @var string[] $remove
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $remove;
}
