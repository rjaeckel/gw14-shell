<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class libraryAccessRightsListUpdate {
	/**
	 * @var libraryAccessRights[] $add
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $add;
	/**
	 * @var libraryAccessRights[] $update
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
