<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class dominstall extends restInstallOptions{
	/**
	 * @var domain $domain
	 * minOccurs: 0
	 * ref: domain
	 */
	public $domain;
	/**
	 * @var internetAgent $gwia
	 * minOccurs: 0
	 */
	public $gwia;
}
