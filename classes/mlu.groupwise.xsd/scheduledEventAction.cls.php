<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class scheduledEventAction extends restGwObject{
	/**
	 * @var menuAction $action
	 * minOccurs: 0
	 */
	public $action;
	/**
	 * @var restAnalyzeOptions $analyzeOptions
	 * minOccurs: 0
	 */
	public $analyzeOptions;
	/**
	 * @var restAuditReportOptions $auditOptions
	 * minOccurs: 0
	 */
	public $auditOptions;
	/**
	 * @var string $description
	 * minOccurs: 0
	 */
	public $description;
	/**
	 * @var distributeFlag[] $distribute
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $distribute;
	/**
	 * @var restDmsContentsOptions $dmsContentsOptions
	 * minOccurs: 0
	 */
	public $dmsContentsOptions;
	/**
	 * @var restDmsLogCleanupOptions $dmsLogCleanupOptions
	 * minOccurs: 0
	 */
	public $dmsLogCleanupOptions;
	/**
	 * @var eventType $eventType
	 * minOccurs: 0
	 */
	public $eventType;
	/**
	 * @var string[] $exclude
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $exclude;
	/**
	 * @var restExpireOptions $expireOptions
	 * minOccurs: 0
	 */
	public $expireOptions;
	/**
	 * @var fileFlag[] $files
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $files;
	/**
	 * @var boolean $isDefault
	 */
	public $isDefault;
	/**
	 * @var string $logFilePath
	 * minOccurs: 0
	 */
	public $logFilePath;
	/**
	 * @var string $message
	 * minOccurs: 0
	 */
	public $message;
	/**
	 * @var int $minAgeDays
	 * minOccurs: 0
	 */
	public $minAgeDays;
	/**
	 * @var boolean $notifyOnBegin
	 * minOccurs: 0
	 */
	public $notifyOnBegin;
	/**
	 * @var boolean $notifyOnComplete
	 * minOccurs: 0
	 */
	public $notifyOnComplete;
	/**
	 * @var boolean $notifyOnFail
	 * minOccurs: 0
	 */
	public $notifyOnFail;
	/**
	 * @var boolean $resetPassword
	 * minOccurs: 0
	 */
	public $resetPassword;
	/**
	 * @var string $sendToCc
	 * minOccurs: 0
	 */
	public $sendToCc;
	/**
	 * @var restStatsOptions $statsOptions
	 * minOccurs: 0
	 */
	public $statsOptions;
	/**
	 * @var string $supportOptions
	 * minOccurs: 0
	 */
	public $supportOptions;
	/**
	 * @var boolean $verbose
	 * minOccurs: 0
	 */
	public $verbose;
}
