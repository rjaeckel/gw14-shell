<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class sysconfigure extends restInstallOptions{
	/**
	 * @var dbinfo[] $databases
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $databases;
}
