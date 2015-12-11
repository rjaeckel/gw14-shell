<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class emailAddresses {
	/**
	 * @var string $preferred
	 * minOccurs: 0
	 */
	public $preferred;
	/**
	 * @var string[] $allowed
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $allowed;
	/**
	 * @var string[] $nickname
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $nickname;
	/**
	 * @var string[] $alias
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $alias;
}
