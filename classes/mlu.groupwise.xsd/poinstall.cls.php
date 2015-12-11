<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class poinstall extends restInstallOptions{
	/**
	 * @var postOffice $po
	 * minOccurs: 0
	 */
	public $po;
}
