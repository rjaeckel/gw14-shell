<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class library extends restGwObject{
	/**
	 * @var string $description
	 * minOccurs: 0
	 */
	public $description;
	/**
	 * @var string $displayName
	 * minOccurs: 0
	 */
	public $displayName;
	/**
	 * @var string $domainName
	 * minOccurs: 0
	 */
	public $domainName;
	/**
	 * @var int $maxArchiveSize
	 * minOccurs: 0
	 */
	public $maxArchiveSize;
	/**
	 * @var string $postOfficeName
	 * minOccurs: 0
	 */
	public $postOfficeName;
	/**
	 * @var accessRight[] $publicRights
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $publicRights;
	/**
	 * @var int $startVersionNumber
	 * minOccurs: 0
	 */
	public $startVersionNumber;
}
