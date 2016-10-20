<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class nickname extends restAddressable{
	/**
	 * @var int $expirationDate
	 * minOccurs: 0
	 */
	public $expirationDate;
	/**
	 * @var externalSync $externalSyncOverride
	 * minOccurs: 0
	 */
	public $externalSyncOverride;
	/**
	 * @var string $givenName
	 * minOccurs: 0
	 */
	public $givenName;
	/**
	 * @var memberType $realMemberType
	 * minOccurs: 0
	 */
	public $realMemberType;
	/**
	 * @var string $surname
	 * minOccurs: 0
	 */
	public $surname;
	/**
	 * @var string $userDomainName
	 * minOccurs: 0
	 */
	public $userDomainName;
	/**
	 * @var string $userName
	 * minOccurs: 0
	 */
	public $userName;
	/**
	 * @var string $userPostOfficeName
	 * minOccurs: 0
	 */
	public $userPostOfficeName;
}
