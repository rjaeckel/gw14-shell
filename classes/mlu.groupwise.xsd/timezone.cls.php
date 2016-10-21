<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class timezone extends restGwObject{
	/**
	 * @var string $abbreviation
	 * minOccurs: 0
	 */
	public $abbreviation;
	/**
	 * @var gwTimezoneDayOccurrence $daylightSavingsDayOccurrence
	 * minOccurs: 0
	 */
	public $daylightSavingsDayOccurrence;
	/**
	 * @var gwTimezoneDayOfWeek $daylightSavingsDayOfWeek
	 * minOccurs: 0
	 */
	public $daylightSavingsDayOfWeek;
	/**
	 * @var int $daylightSavingsHour
	 * minOccurs: 0
	 */
	public $daylightSavingsHour;
	/**
	 * @var int $daylightSavingsMinute
	 * minOccurs: 0
	 */
	public $daylightSavingsMinute;
	/**
	 * @var gwTimezoneMonth $daylightSavingsMonth
	 * minOccurs: 0
	 */
	public $daylightSavingsMonth;
	/**
	 * @var gwTimezoneOffset $daylightSavingsOffset
	 * minOccurs: 0
	 */
	public $daylightSavingsOffset;
	/**
	 * @var string $description
	 * minOccurs: 0
	 */
	public $description;
	/**
	 * @var gwTimezoneOffset $gmtOffset
	 * minOccurs: 0
	 */
	public $gmtOffset;
	/**
	 * @var gwTimezoneDayOccurrence $standardDayOccurrence
	 * minOccurs: 0
	 */
	public $standardDayOccurrence;
	/**
	 * @var gwTimezoneDayOfWeek $standardDayOfWeek
	 * minOccurs: 0
	 */
	public $standardDayOfWeek;
	/**
	 * @var int $standardHour
	 * minOccurs: 0
	 */
	public $standardHour;
	/**
	 * @var int $standardMinute
	 * minOccurs: 0
	 */
	public $standardMinute;
	/**
	 * @var gwTimezoneMonth $standardMonth
	 * minOccurs: 0
	 */
	public $standardMonth;
}
