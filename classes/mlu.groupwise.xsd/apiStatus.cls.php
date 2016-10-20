<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class apiStatus {
	/**
	 * @var boolean $error
	 */
	public $error;
	/**
	 * @var status $httpStatus
	 * minOccurs: 0
	 */
	public $httpStatus;
	/**
	 * @var int $httpStatusCode
	 * minOccurs: 0
	 */
	public $httpStatusCode;
	/**
	 * @var stringMapEntry[] $params
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $params;
	/**
	 * @var int $statusCode
	 * minOccurs: 0
	 */
	public $statusCode;
	/**
	 * @var string $statusMsg
	 * minOccurs: 0
	 */
	public $statusMsg;
}
