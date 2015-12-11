<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class administrator extends restObjectReference{
	/**
	 * @var adminType $adminType
	 * minOccurs: 0
	 */
	public $adminType;
}
