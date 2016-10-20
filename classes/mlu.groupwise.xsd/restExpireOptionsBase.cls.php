<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restExpireOptionsBase extends propertiesProxy{
	/**
	 * @var int $expireDays
	 * minOccurs: 0
	 */
	public $expireDays;
	/**
	 * @var int $expireDownloadedDays
	 * minOccurs: 0
	 */
	public $expireDownloadedDays;
	/**
	 * @var expireFlag[] $expireFlags
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $expireFlags;
	/**
	 * @var int $expireSize
	 * minOccurs: 0
	 */
	public $expireSize;
	/**
	 * @var int $expireUntil
	 * minOccurs: 0
	 */
	public $expireUntil;
}
