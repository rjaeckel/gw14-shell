<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class poa extends restAgent{
	/**
	 * @var int $adminAgentFlag
	 * minOccurs: 0
	 */
	public $adminAgentFlag;
	/**
	 * @var boolean $administrationTaskProcessingDisabled
	 * minOccurs: 0
	 */
	public $administrationTaskProcessingDisabled;
	/**
	 * @var int $appConnections
	 * minOccurs: 0
	 */
	public $appConnections;
	/**
	 * @var boolean $cacheEnabled
	 * minOccurs: 0
	 */
	public $cacheEnabled;
	/**
	 * @var boolean $calendarPublishingEnabled
	 * minOccurs: 0
	 */
	public $calendarPublishingEnabled;
	/**
	 * @var int $calendarPublishingPort
	 * minOccurs: 0
	 */
	public $calendarPublishingPort;
	/**
	 * @var int $calendarPublishingThreads
	 * minOccurs: 0
	 */
	public $calendarPublishingThreads;
	/**
	 * @var boolean $clientServerEnabled
	 * minOccurs: 0
	 */
	public $clientServerEnabled;
	/**
	 * @var sslStatus $clientServerExtUsesSsl
	 * minOccurs: 0
	 */
	public $clientServerExtUsesSsl;
	/**
	 * @var int $clientServerThreads
	 * minOccurs: 0
	 */
	public $clientServerThreads;
	/**
	 * @var sslStatus $clientServerUsesSsl
	 * minOccurs: 0
	 */
	public $clientServerUsesSsl;
	/**
	 * @var int $cpuUtilization
	 * minOccurs: 0
	 */
	public $cpuUtilization;
	/**
	 * @var int $delayTime
	 * minOccurs: 0
	 */
	public $delayTime;
	/**
	 * @var int $diskCheckDelay
	 * minOccurs: 0
	 */
	public $diskCheckDelay;
	/**
	 * @var int $diskCheckInterval
	 * minOccurs: 0
	 */
	public $diskCheckInterval;
	/**
	 * @var string $dvaName1
	 * minOccurs: 0
	 */
	public $dvaName1;
	/**
	 * @var string $dvaName2
	 * minOccurs: 0
	 */
	public $dvaName2;
	/**
	 * @var string $dvaName3
	 * minOccurs: 0
	 */
	public $dvaName3;
	/**
	 * @var boolean $enableSsl
	 * minOccurs: 0
	 */
	public $enableSsl;
	/**
	 * @var int $externalClientServerPort
	 * minOccurs: 0
	 */
	public $externalClientServerPort;
	/**
	 * @var string $externalIpAddress
	 * minOccurs: 0
	 */
	public $externalIpAddress;
	/**
	 * @var boolean $externalSync
	 * minOccurs: 0
	 */
	public $externalSync;
	/**
	 * @var boolean $generateRemoteAddressBook
	 * minOccurs: 0
	 */
	public $generateRemoteAddressBook;
	/**
	 * @var int $generateRemoteAddressBookOffset
	 * minOccurs: 0
	 */
	public $generateRemoteAddressBookOffset;
	/**
	 * @var boolean $imapEnabled
	 * minOccurs: 0
	 */
	public $imapEnabled;
	/**
	 * @var int $imapPort
	 * minOccurs: 0
	 */
	public $imapPort;
	/**
	 * @var int $imapReadLimit
	 * minOccurs: 0
	 */
	public $imapReadLimit;
	/**
	 * @var boolean $imapReadNew
	 * minOccurs: 0
	 */
	public $imapReadNew;
	/**
	 * @var int $imapSslPort
	 * minOccurs: 0
	 */
	public $imapSslPort;
	/**
	 * @var int $imapThreads
	 * minOccurs: 0
	 */
	public $imapThreads;
	/**
	 * @var sslStatus $imapUsesSsl
	 * minOccurs: 0
	 */
	public $imapUsesSsl;
	/**
	 * @var int $internalClientServerPort
	 * minOccurs: 0
	 */
	public $internalClientServerPort;
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
	 * @var int $maintenanceHandlerThreads
	 * minOccurs: 0
	 */
	public $maintenanceHandlerThreads;
	/**
	 * @var messageFileProcessing $messageFileProcessing
	 * minOccurs: 0
	 */
	public $messageFileProcessing;
	/**
	 * @var int $messageHandlerThreads
	 * minOccurs: 0
	 */
	public $messageHandlerThreads;
	/**
	 * @var boolean $performUserUpkeep
	 * minOccurs: 0
	 */
	public $performUserUpkeep;
	/**
	 * @var int $physicalConnections
	 * minOccurs: 0
	 */
	public $physicalConnections;
	/**
	 * @var string $postOfficeName
	 * minOccurs: 0
	 */
	public $postOfficeName;
	/**
	 * @var int $primeMoveThreadUsage
	 * minOccurs: 0
	 */
	public $primeMoveThreadUsage;
	/**
	 * @var boolean $quickFinderEnabled
	 * minOccurs: 0
	 */
	public $quickFinderEnabled;
	/**
	 * @var int $quickFinderIndexBaseMinute
	 * minOccurs: 0
	 */
	public $quickFinderIndexBaseMinute;
	/**
	 * @var int $quickFinderIntervalMinute
	 * minOccurs: 0
	 */
	public $quickFinderIntervalMinute;
	/**
	 * @var boolean $quickFinderQuarantineFiles
	 * minOccurs: 0
	 */
	public $quickFinderQuarantineFiles;
	/**
	 * @var boolean $snmpEnabled
	 * minOccurs: 0
	 */
	public $snmpEnabled;
	/**
	 * @var boolean $soapEnabled
	 * minOccurs: 0
	 */
	public $soapEnabled;
	/**
	 * @var int $soapExternalPort
	 * minOccurs: 0
	 */
	public $soapExternalPort;
	/**
	 * @var int $soapPort
	 * minOccurs: 0
	 */
	public $soapPort;
	/**
	 * @var int $soapThreads
	 * minOccurs: 0
	 */
	public $soapThreads;
	/**
	 * @var sslStatus $soapUsesSsl
	 * minOccurs: 0
	 */
	public $soapUsesSsl;
	/**
	 * @var int $userUpkeepOffset
	 * minOccurs: 0
	 */
	public $userUpkeepOffset;
}
