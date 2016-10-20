<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restAddressable extends restInternetAddressingProps{
	/**
	 * @var string $description
	 * minOccurs: 0
	 */
	public $description;
	/**
	 * @var string $directoryId
	 * minOccurs: 0
	 */
	public $directoryId;
	/**
	 * @var string $domainName
	 * minOccurs: 0
	 */
	public $domainName;
	/**
	 * @var string[] $emailAddresses
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $emailAddresses;
	/**
	 * @var boolean $forceInactive
	 * minOccurs: 0
	 */
	public $forceInactive;
	/**
	 * @var int $forceInactiveTime
	 * minOccurs: 0
	 */
	public $forceInactiveTime;
	/**
	 * @var string $ldapDn
	 * minOccurs: 0
	 */
	public $ldapDn;
	/**
	 * @var string $ldapId
	 * minOccurs: 0
	 */
	public $ldapId;
	/**
	 * @var string $legacyDn
	 * minOccurs: 0
	 */
	public $legacyDn;
	/**
	 * @var restMoveUserStatus $moveStatus
	 * minOccurs: 0
	 */
	public $moveStatus;
	/**
	 * @var string $postOfficeName
	 * minOccurs: 0
	 */
	public $postOfficeName;
	/**
	 * @var string $preferredEmailAddress
	 * minOccurs: 0
	 */
	public $preferredEmailAddress;
	/**
	 * @var string $preferredEmailId
	 * minOccurs: 0
	 */
	public $preferredEmailId;
	/**
	 * @var int $syncNotFoundTime
	 * minOccurs: 0
	 */
	public $syncNotFoundTime;
	/**
	 * @var visibility $visibility
	 * minOccurs: 0
	 */
	public $visibility;
}
