<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class domain extends restInternetAddressingProps{
	/**
	 * @var string $alternateInternetAgentName
	 * minOccurs: 0
	 */
	public $alternateInternetAgentName;
	/**
	 * @var boolean $connected
	 * minOccurs: 0
	 */
	public $connected;
	/**
	 * @var restEffectiveString $defaultInternetAgentName
	 * minOccurs: 0
	 */
	public $defaultInternetAgentName;
	/**
	 * @var string $description
	 * minOccurs: 0
	 */
	public $description;
	/**
	 * @var string $directoryName
	 * minOccurs: 0
	 */
	public $directoryName;
	/**
	 * @var string $directorySyncDomainName
	 * minOccurs: 0
	 */
	public $directorySyncDomainName;
	/**
	 * @var int $domainRebuildCount
	 * minOccurs: 0
	 */
	public $domainRebuildCount;
	/**
	 * @var domainType $domainType
	 * minOccurs: 0
	 */
	public $domainType;
	/**
	 * @var int $domainVersion
	 * minOccurs: 0
	 */
	public $domainVersion;
	/**
	 * @var restEffectiveBoolean $enableICalBrowse
	 * minOccurs: 0
	 */
	public $enableICalBrowse;
	/**
	 * @var boolean $externalSync
	 * minOccurs: 0
	 */
	public $externalSync;
	/**
	 * @var string $fileId
	 * minOccurs: 0
	 */
	public $fileId;
	/**
	 * @var boolean $hideUserComments
	 * minOccurs: 0
	 */
	public $hideUserComments;
	/**
	 * @var string $language
	 * minOccurs: 0
	 */
	public $language;
	/**
	 * @var int $languageId
	 * minOccurs: 0
	 */
	public $languageId;
	/**
	 * @var string $linkedDomainName
	 * minOccurs: 0
	 */
	public $linkedDomainName;
	/**
	 * @var restEffectiveBoolean $lockoutOldAdmin
	 * minOccurs: 0
	 */
	public $lockoutOldAdmin;
	/**
	 * @var restEffectiveLong $minimumAdminReleaseDate
	 * minOccurs: 0
	 */
	public $minimumAdminReleaseDate;
	/**
	 * @var restEffectiveString $minimumAdminVersion
	 * minOccurs: 0
	 */
	public $minimumAdminVersion;
	/**
	 * @var mta $mta
	 * minOccurs: 0
	 * ref: mta
	 */
	public $mta;
	/**
	 * @var string $path
	 * minOccurs: 0
	 */
	public $path;
	/**
	 * @var boolean $remoteCreation
	 * minOccurs: 0
	 */
	public $remoteCreation;
	/**
	 * @var string $timezone
	 * minOccurs: 0
	 */
	public $timezone;
	/**
	 * @var string $timezoneId
	 * minOccurs: 0
	 */
	public $timezoneId;
}
