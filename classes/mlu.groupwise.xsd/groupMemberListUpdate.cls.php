<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class groupMemberListUpdate {
	/**
	 * @var member[] $add
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $add;
	/**
	 * @var member[] $update
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
