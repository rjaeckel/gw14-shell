<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class csrParams {
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
	 * @var string[] $altDnsNames
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $altDnsNames;
	/**
	 * @var string[] $altIpAddresses
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $altIpAddresses;
	/**
	 * @var int $caAdminPort
	 * minOccurs: 0
	 */
	public $caAdminPort;
	/**
	 * @var string $caIpAddress
	 * minOccurs: 0
	 */
	public $caIpAddress;
	/**
	 * @var string $cn
	 * minOccurs: 0
	 */
	public $cn;
	/**
	 * @var string $country
	 * minOccurs: 0
	 */
	public $country;
	/**
	 * @var string $email
	 * minOccurs: 0
	 */
	public $email;
	/**
	 * @var int $keySize
	 */
	public $keySize;
	/**
	 * @var string $locality
	 * minOccurs: 0
	 */
	public $locality;
	/**
	 * @var string $password
	 * minOccurs: 0
	 */
	public $password;
	/**
	 * @var string $stateOrProvince
	 * minOccurs: 0
	 */
	public $stateOrProvince;
}
