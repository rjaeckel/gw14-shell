<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class gwTimeStamp {
	/**
	 * @var boolean $clear
	 * minOccurs: 0
	 */
	public $clear;
	/**
	 * @var string $objName
	 * minOccurs: 0
	 */
	public $objName;
	/**
	 * @var int $timeInSeconds
	 * minOccurs: 0
	 */
	public $timeInSeconds;
	/**
	 * @var int $type
	 * minOccurs: 0
	 */
	public $type;
}
