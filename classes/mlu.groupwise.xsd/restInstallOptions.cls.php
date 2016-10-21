<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restInstallOptions {
	/**
	 * @var string $adminName
	 * minOccurs: 0
	 */
	public $adminName;
	/**
	 * @var string $adminPassword
	 * minOccurs: 0
	 */
	public $adminPassword;
	/**
	 * @var boolean $createServices
	 * minOccurs: 0
	 */
	public $createServices;
	/**
	 * @var string $remoteAdminHost
	 * minOccurs: 0
	 */
	public $remoteAdminHost;
	/**
	 * @var int $remoteAdminPort
	 * minOccurs: 0
	 */
	public $remoteAdminPort;
	/**
	 * @var boolean $startServices
	 * minOccurs: 0
	 */
	public $startServices;
	/**
	 * @var boolean $synchronous
	 */
	public $synchronous;
}
