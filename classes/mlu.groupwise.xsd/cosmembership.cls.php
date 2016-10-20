<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class cosmembership extends restObjectReference{
	/**
	 * @var gwiaClassofServiceMemberType $memberType
	 * minOccurs: 0
	 */
	public $memberType;
}
