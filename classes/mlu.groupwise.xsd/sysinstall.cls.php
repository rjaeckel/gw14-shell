<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class sysinstall extends restInstallOptions{
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
	/**
	 * @var postOffice $postoffice
	 * minOccurs: 0
	 */
	public $postoffice;
	/**
	 * @var system $system
	 * minOccurs: 0
	 * ref: system
	 */
	public $system;
	/**
	 * @var user[] $users
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $users;
}
