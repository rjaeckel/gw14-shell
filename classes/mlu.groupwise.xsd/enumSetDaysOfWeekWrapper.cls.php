<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class enumSetDaysOfWeekWrapper extends clientOptionWrapper{
	/**
	 * @var daysOfWeek[] $value
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $value;
}
