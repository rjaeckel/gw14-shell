<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class customPreference extends restGwObject{
	/**
	 * @var string $adminName
	 * minOccurs: 0
	 */
	public $adminName;
	/**
	 * @var string $domainName
	 * minOccurs: 0
	 */
	public $domainName;
	/**
	 * @var string $group
	 * minOccurs: 0
	 */
	public $group;
	/**
	 * @var string $postOfficeName
	 * minOccurs: 0
	 */
	public $postOfficeName;
	/**
	 * @var string $value
	 * minOccurs: 0
	 */
	public $value;
}
