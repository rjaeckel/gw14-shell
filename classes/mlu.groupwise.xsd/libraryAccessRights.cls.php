<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class libraryAccessRights extends restObjectReference{
	/**
	 * @var accessRight[] $accessRights
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $accessRights;
	/**
	 * @var boolean $fixSerializationBug
	 * minOccurs: 0
	 */
	public $fixSerializationBug;
}
