<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restDeliverable extends restAddressable{
	/**
	 * @var restEffectiveBoolean $enableICalBrowse
	 * minOccurs: 0
	 */
	public $enableICalBrowse;
	/**
	 * @var int $expirationDate
	 * minOccurs: 0
	 */
	public $expirationDate;
	/**
	 * @var string $fileId
	 * minOccurs: 0
	 */
	public $fileId;
	/**
	 * @var boolean $loginDisabled
	 * minOccurs: 0
	 */
	public $loginDisabled;
	/**
	 * @var string $password
	 * minOccurs: 0
	 */
	public $password;
	/**
	 * @var int $transferSharedItems
	 * minOccurs: 0
	 */
	public $transferSharedItems;
	/**
	 * @var int $transferSharedItemsStart
	 * minOccurs: 0
	 */
	public $transferSharedItemsStart;
}
