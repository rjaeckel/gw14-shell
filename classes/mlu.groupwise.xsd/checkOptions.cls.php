<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class checkOptions extends propertiesProxy{
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
	 * @var string[] $targets
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $targets;
	/**
	 * @var boolean $verbose
	 * minOccurs: 0
	 */
	public $verbose;
}
