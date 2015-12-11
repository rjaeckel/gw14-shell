<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restStatsOptions extends restExpireOptionsBase{
	/**
	 * @var int $boxLimit
	 * minOccurs: 0
	 */
	public $boxLimit;
	/**
	 * @var statsType $statsType
	 * minOccurs: 0
	 */
	public $statsType;
}
