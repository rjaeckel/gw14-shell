<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class accessControl extends restObjectReference{
	/**
	 * @var accessRights $rights
	 * minOccurs: 0
	 */
	public $rights;
}
