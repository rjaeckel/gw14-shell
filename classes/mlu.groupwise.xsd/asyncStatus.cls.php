<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class asyncStatus {
	/**
	 * @var anyType $detail
	 * minOccurs: 0
	 */
	public $detail;
	/**
	 * @var boolean $done
	 */
	public $done;
	/**
	 * @var apiStatus $error
	 * minOccurs: 0
	 */
	public $error;
	/**
	 * @var string $jobId
	 * minOccurs: 0
	 */
	public $jobId;
	/**
	 * @var anyType $result
	 * minOccurs: 0
	 */
	public $result;
	/**
	 * @var int $startTime
	 * minOccurs: 0
	 */
	public $startTime;
	/**
	 * @var asyncState $state
	 * minOccurs: 0
	 */
	public $state;
	/**
	 * @var int $stopTime
	 * minOccurs: 0
	 */
	public $stopTime;
}
