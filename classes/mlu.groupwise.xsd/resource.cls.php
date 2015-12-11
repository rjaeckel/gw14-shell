<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class resource extends restDeliverable{
	/**
	 * @var boolean $externalRecord
	 * minOccurs: 0
	 */
	public $externalRecord;
	/**
	 * @var boolean $externalSync
	 * minOccurs: 0
	 */
	public $externalSync;
	/**
	 * @var string $internetFreeBusyUrl
	 * minOccurs: 0
	 */
	public $internetFreeBusyUrl;
	/**
	 * @var string $owner
	 * minOccurs: 0
	 */
	public $owner;
	/**
	 * @var resourceType $resourceType
	 * minOccurs: 0
	 */
	public $resourceType;
	/**
	 * @var string $telephoneNumber
	 * minOccurs: 0
	 */
	public $telephoneNumber;
}
