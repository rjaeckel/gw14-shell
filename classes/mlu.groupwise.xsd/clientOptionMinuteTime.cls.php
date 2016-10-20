<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class clientOptionMinuteTime {
	/**
	 * @var int $minutes
	 */
	public $minutes;
	/**
	 * @var int $seconds
	 */
	public $seconds;
	/**
	 * @var int $timeInSeconds
	 */
	public $timeInSeconds;
}
