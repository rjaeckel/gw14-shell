<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class scheduledEvent extends restGwObject{
	/**
	 * @var syncDayOfWeek $dayOfWeek
	 * minOccurs: 0
	 */
	public $dayOfWeek;
	/**
	 * @var string $description
	 * minOccurs: 0
	 */
	public $description;
	/**
	 * @var int $diskCheckLimit
	 * minOccurs: 0
	 */
	public $diskCheckLimit;
	/**
	 * @var int $diskCheckThresholdHighMb
	 * minOccurs: 0
	 */
	public $diskCheckThresholdHighMb;
	/**
	 * @var int $diskCheckThresholdHighPercent
	 * minOccurs: 0
	 */
	public $diskCheckThresholdHighPercent;
	/**
	 * @var int $diskCheckThresholdLowMb
	 * minOccurs: 0
	 */
	public $diskCheckThresholdLowMb;
	/**
	 * @var int $diskCheckThresholdLowPercent
	 * minOccurs: 0
	 */
	public $diskCheckThresholdLowPercent;
	/**
	 * @var diskCheckThresholdType $diskCheckThresholdType
	 * minOccurs: 0
	 */
	public $diskCheckThresholdType;
	/**
	 * @var eventType $eventType
	 * minOccurs: 0
	 */
	public $eventType;
	/**
	 * @var int $interval
	 * minOccurs: 0
	 */
	public $interval;
	/**
	 * @var intervalUnit $intervalUnit
	 * minOccurs: 0
	 */
	public $intervalUnit;
	/**
	 * @var boolean $isDefault
	 */
	public $isDefault;
	/**
	 * @var eventLife $life
	 * minOccurs: 0
	 */
	public $life;
	/**
	 * @var eventRecurs $recurs
	 * minOccurs: 0
	 */
	public $recurs;
	/**
	 * @var restTimeOfDay $timeOfDay
	 * minOccurs: 0
	 */
	public $timeOfDay;
}
