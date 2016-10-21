<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class gwTimezoneOffset {
	/**
	 * @var int $hours
	 * minOccurs: 0
	 */
	public $hours;
	/**
	 * @var int $minutes
	 * minOccurs: 0
	 */
	public $minutes;
}
