<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restTimeOfDay {
	/**
	 * @var int $hour
	 * minOccurs: 0
	 */
	public $hour;
	/**
	 * @var int $minute
	 * minOccurs: 0
	 */
	public $minute;
}
