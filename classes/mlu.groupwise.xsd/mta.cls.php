<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class mta extends restAgent{
	/**
	 * @var int $attachRetry
	 * minOccurs: 0
	 */
	public $attachRetry;
	/**
	 * @var int $coexistenceSyncInterval
	 * minOccurs: 0
	 */
	public $coexistenceSyncInterval;
	/**
	 * @var int $coexistenceSyncStartOffset
	 * minOccurs: 0
	 */
	public $coexistenceSyncStartOffset;
	/**
	 * @var boolean $collectDeliveryStatusReports
	 * minOccurs: 0
	 */
	public $collectDeliveryStatusReports;
	/**
	 * @var boolean $collectOtherStatusReports
	 * minOccurs: 0
	 */
	public $collectOtherStatusReports;
	/**
	 * @var boolean $correlateDeliveryStatusReports
	 * minOccurs: 0
	 */
	public $correlateDeliveryStatusReports;
	/**
	 * @var string $defaultRoutingDomain
	 * minOccurs: 0
	 */
	public $defaultRoutingDomain;
	/**
	 * @var boolean $enableSsl
	 * minOccurs: 0
	 */
	public $enableSsl;
	/**
	 * @var exchangeCoexistenceProfile[] $exchangeCoexistenceProfiles
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $exchangeCoexistenceProfiles;
	/**
	 * @var boolean $externalSync
	 * minOccurs: 0
	 */
	public $externalSync;
	/**
	 * @var int $logMaxAge
	 * minOccurs: 0
	 */
	public $logMaxAge;
	/**
	 * @var int $logMaxSize
	 * minOccurs: 0
	 */
	public $logMaxSize;
	/**
	 * @var string $messageLogFilePath
	 * minOccurs: 0
	 */
	public $messageLogFilePath;
	/**
	 * @var messageLogging $messageLogging
	 * minOccurs: 0
	 */
	public $messageLogging;
	/**
	 * @var int $mtaRouteDelivery
	 * minOccurs: 0
	 */
	public $mtaRouteDelivery;
	/**
	 * @var int $mtaSendDirect
	 * minOccurs: 0
	 */
	public $mtaSendDirect;
	/**
	 * @var int $reportsCleanupDays
	 * minOccurs: 0
	 */
	public $reportsCleanupDays;
	/**
	 * @var int $scanCycle
	 * minOccurs: 0
	 */
	public $scanCycle;
	/**
	 * @var int $scanHigh
	 * minOccurs: 0
	 */
	public $scanHigh;
	/**
	 * @var int $serverFlags
	 * minOccurs: 0
	 */
	public $serverFlags;
	/**
	 * @var string $syncLdapServerName
	 * minOccurs: 0
	 */
	public $syncLdapServerName;
	/**
	 * @var boolean $trackAdminMessages
	 * minOccurs: 0
	 */
	public $trackAdminMessages;
	/**
	 * @var boolean $use2ndHighScanner
	 * minOccurs: 0
	 */
	public $use2ndHighScanner;
	/**
	 * @var boolean $use2ndMailScanner
	 * minOccurs: 0
	 */
	public $use2ndMailScanner;
}
