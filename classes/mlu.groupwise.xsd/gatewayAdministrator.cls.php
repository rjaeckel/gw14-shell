<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class gatewayAdministrator extends restObjectReference{
	/**
	 * @var adminType[] $adminType
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $adminType;
}
