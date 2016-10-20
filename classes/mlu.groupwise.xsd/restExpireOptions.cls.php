<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restExpireOptions extends restExpireOptionsBase{
	/**
	 * @var int $expireActive
	 * minOccurs: 0
	 */
	public $expireActive;
	/**
	 * @var int $expireTrashDays
	 * minOccurs: 0
	 */
	public $expireTrashDays;
	/**
	 * @var expireType $expireType
	 * minOccurs: 0
	 */
	public $expireType;
}
