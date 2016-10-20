<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class simpleAssociationListUpdate {
	/**
	 * @var string[] $add
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $add;
	/**
	 * @var string[] $remove
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $remove;
}
