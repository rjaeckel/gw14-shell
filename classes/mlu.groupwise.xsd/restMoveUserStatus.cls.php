<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restMoveUserStatus extends propertiesProxy{
	/**
	 * @var moveUserAction $action
	 * minOccurs: 0
	 */
	public $action;
	/**
	 * @var int $attempt
	 * minOccurs: 0
	 */
	public $attempt;
	/**
	 * @var int $beginTime
	 * minOccurs: 0
	 */
	public $beginTime;
	/**
	 * @var int $count
	 * minOccurs: 0
	 */
	public $count;
	/**
	 * @var string $description
	 * minOccurs: 0
	 */
	public $description;
	/**
	 * @var string $domainName
	 * minOccurs: 0
	 */
	public $domainName;
	/**
	 * @var int $endTime
	 * minOccurs: 0
	 */
	public $endTime;
	/**
	 * @var int $errno
	 * minOccurs: 0
	 */
	public $errno;
	/**
	 * @var int $grandTotal
	 * minOccurs: 0
	 */
	public $grandTotal;
	/**
	 * @var moveUserAction $lastAction
	 * minOccurs: 0
	 */
	public $lastAction;
	/**
	 * @var string $originalDomainName
	 * minOccurs: 0
	 */
	public $originalDomainName;
	/**
	 * @var string $originalFileId
	 * minOccurs: 0
	 */
	public $originalFileId;
	/**
	 * @var string $originalGuid
	 * minOccurs: 0
	 */
	public $originalGuid;
	/**
	 * @var string $originalName
	 * minOccurs: 0
	 */
	public $originalName;
	/**
	 * @var string $originalPostOfficeName
	 * minOccurs: 0
	 */
	public $originalPostOfficeName;
	/**
	 * @var string $postOfficeName
	 * minOccurs: 0
	 */
	public $postOfficeName;
	/**
	 * @var int $subTotal
	 * minOccurs: 0
	 */
	public $subTotal;
}
