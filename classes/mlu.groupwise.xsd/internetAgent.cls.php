<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class internetAgent extends restGateway{
	/**
	 * @var boolean $accountingEnabled
	 * minOccurs: 0
	 */
	public $accountingEnabled;
	/**
	 * @var gwiaAddressFormat $addressFormat
	 * minOccurs: 0
	 */
	public $addressFormat;
	/**
	 * @var gwiaBadMessageHandling $badMessageHandling
	 * minOccurs: 0
	 */
	public $badMessageHandling;
	/**
	 * @var boolean $cap
	 * minOccurs: 0
	 */
	public $cap;
	/**
	 * @var string $conversionDirectory
	 * minOccurs: 0
	 */
	public $conversionDirectory;
	/**
	 * @var boolean $convert
	 * minOccurs: 0
	 */
	public $convert;
	/**
	 * @var boolean $convertStatusToMessage
	 * minOccurs: 0
	 */
	public $convertStatusToMessage;
	/**
	 * @var int $correlationAge
	 * minOccurs: 0
	 */
	public $correlationAge;
	/**
	 * @var boolean $correlationEnabled
	 * minOccurs: 0
	 */
	public $correlationEnabled;
	/**
	 * @var boolean $defaultSignatureOverride
	 * minOccurs: 0
	 */
	public $defaultSignatureOverride;
	/**
	 * @var boolean $delayedMessageNotification
	 * minOccurs: 0
	 */
	public $delayedMessageNotification;
	/**
	 * @var boolean $deliveryStatusNotification
	 * minOccurs: 0
	 */
	public $deliveryStatusNotification;
	/**
	 * @var string $description
	 * minOccurs: 0
	 */
	public $description;
	/**
	 * @var boolean $dia
	 * minOccurs: 0
	 */
	public $dia;
	/**
	 * @var string $dialPassword
	 * minOccurs: 0
	 */
	public $dialPassword;
	/**
	 * @var string $dialUser
	 * minOccurs: 0
	 */
	public $dialUser;
	/**
	 * @var gatewayDirectorySync $directorySynchronization
	 * minOccurs: 0
	 */
	public $directorySynchronization;
	/**
	 * @var boolean $disableEsmtpExtensions
	 * minOccurs: 0
	 */
	public $disableEsmtpExtensions;
	/**
	 * @var boolean $disableImip
	 * minOccurs: 0
	 */
	public $disableImip;
	/**
	 * @var boolean $disableQuotedPrintableText
	 * minOccurs: 0
	 */
	public $disableQuotedPrintableText;
	/**
	 * @var boolean $displayLastFirst
	 * minOccurs: 0
	 */
	public $displayLastFirst;
	/**
	 * @var boolean $dontReplaceUnderscore
	 * minOccurs: 0
	 */
	public $dontReplaceUnderscore;
	/**
	 * @var int $dsnHoldAge
	 * minOccurs: 0
	 */
	public $dsnHoldAge;
	/**
	 * @var string $etrnHost
	 * minOccurs: 0
	 */
	public $etrnHost;
	/**
	 * @var string $etrnQueue
	 * minOccurs: 0
	 */
	public $etrnQueue;
	/**
	 * @var boolean $expandDistributionLists
	 * minOccurs: 0
	 */
	public $expandDistributionLists;
	/**
	 * @var boolean $externalSync
	 * minOccurs: 0
	 */
	public $externalSync;
	/**
	 * @var int $failedRecoveryWait
	 * minOccurs: 0
	 */
	public $failedRecoveryWait;
	/**
	 * @var boolean $flatForward
	 * minOccurs: 0
	 */
	public $flatForward;
	/**
	 * @var boolean $force7BitOut
	 * minOccurs: 0
	 */
	public $force7BitOut;
	/**
	 * @var boolean $forceInboundAuthentication
	 * minOccurs: 0
	 */
	public $forceInboundAuthentication;
	/**
	 * @var boolean $forceOutboundAuthentication
	 * minOccurs: 0
	 */
	public $forceOutboundAuthentication;
	/**
	 * @var string $foreignId
	 * minOccurs: 0
	 */
	public $foreignId;
	/**
	 * @var string $gatewayAliasType
	 * minOccurs: 0
	 */
	public $gatewayAliasType;
	/**
	 * @var string $gatewaySignatureName
	 * minOccurs: 0
	 */
	public $gatewaySignatureName;
	/**
	 * @var string $hostName
	 * minOccurs: 0
	 */
	public $hostName;
	/**
	 * @var int $idleSleepDuration
	 * minOccurs: 0
	 */
	public $idleSleepDuration;
	/**
	 * @var boolean $imap4Service
	 * minOccurs: 0
	 */
	public $imap4Service;
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
	 * @var int $imapSslThreads
	 * minOccurs: 0
	 */
	public $imapSslThreads;
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
	 * @var int $inboundConversionThreads
	 * minOccurs: 0
	 */
	public $inboundConversionThreads;
	/**
	 * @var boolean $keepSendGroups
	 * minOccurs: 0
	 */
	public $keepSendGroups;
	/**
	 * @var boolean $killThreads
	 * minOccurs: 0
	 */
	public $killThreads;
	/**
	 * @var string $ldapContext
	 * minOccurs: 0
	 */
	public $ldapContext;
	/**
	 * @var int $ldapPort
	 * minOccurs: 0
	 */
	public $ldapPort;
	/**
	 * @var gwiaLdapPublicAccess $ldapPublicAccessAllow
	 * minOccurs: 0
	 */
	public $ldapPublicAccessAllow;
	/**
	 * @var gwiaLdapPublicVisibility $ldapPublicEmailVisibility
	 * minOccurs: 0
	 */
	public $ldapPublicEmailVisibility;
	/**
	 * @var gwiaLdapPublicVisibility $ldapPublicGivenNameVisibility
	 * minOccurs: 0
	 */
	public $ldapPublicGivenNameVisibility;
	/**
	 * @var gwiaLdapPublicVisibility $ldapPublicLastNameVisibility
	 * minOccurs: 0
	 */
	public $ldapPublicLastNameVisibility;
	/**
	 * @var gwiaLdapPublicVisibility $ldapPublicPhoneVisibility
	 * minOccurs: 0
	 */
	public $ldapPublicPhoneVisibility;
	/**
	 * @var int $ldapPublicSearchIdleTimeout
	 * minOccurs: 0
	 */
	public $ldapPublicSearchIdleTimeout;
	/**
	 * @var int $ldapPublicSearchMaxSeconds
	 * minOccurs: 0
	 */
	public $ldapPublicSearchMaxSeconds;
	/**
	 * @var int $ldapPublicSearchReturnCount
	 * minOccurs: 0
	 */
	public $ldapPublicSearchReturnCount;
	/**
	 * @var string $ldapRefUrl
	 * minOccurs: 0
	 */
	public $ldapRefUrl;
	/**
	 * @var boolean $ldapService
	 * minOccurs: 0
	 */
	public $ldapService;
	/**
	 * @var int $ldapSslPort
	 * minOccurs: 0
	 */
	public $ldapSslPort;
	/**
	 * @var int $ldapThreads
	 * minOccurs: 0
	 */
	public $ldapThreads;
	/**
	 * @var sslStatus $ldapUsesSsl
	 * minOccurs: 0
	 */
	public $ldapUsesSsl;
	/**
	 * @var int $lineWrapLength
	 * minOccurs: 0
	 */
	public $lineWrapLength;
	/**
	 * @var string $logFilePath
	 * minOccurs: 0
	 */
	public $logFilePath;
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
	 * @var int $mailbombProtection
	 * minOccurs: 0
	 */
	public $mailbombProtection;
	/**
	 * @var int $mailbombTime
	 * minOccurs: 0
	 */
	public $mailbombTime;
	/**
	 * @var string $messageDeferInterval
	 * minOccurs: 0
	 */
	public $messageDeferInterval;
	/**
	 * @var int $messageDeferMaxHours
	 * minOccurs: 0
	 */
	public $messageDeferMaxHours;
	/**
	 * @var string $mimeReplyDomain
	 * minOccurs: 0
	 */
	public $mimeReplyDomain;
	/**
	 * @var int $minimumRunTime
	 * minOccurs: 0
	 */
	public $minimumRunTime;
	/**
	 * @var string $networkReattachCommand
	 * minOccurs: 0
	 */
	public $networkReattachCommand;
	/**
	 * @var boolean $noImapVersion
	 * minOccurs: 0
	 */
	public $noImapVersion;
	/**
	 * @var boolean $noMapPriority
	 * minOccurs: 0
	 */
	public $noMapPriority;
	/**
	 * @var boolean $noPopVersion
	 * minOccurs: 0
	 */
	public $noPopVersion;
	/**
	 * @var boolean $noSmtpVersion
	 * minOccurs: 0
	 */
	public $noSmtpVersion;
	/**
	 * @var boolean $notFamiliar
	 * minOccurs: 0
	 */
	public $notFamiliar;
	/**
	 * @var int $outboundConversionThreads
	 * minOccurs: 0
	 */
	public $outboundConversionThreads;
	/**
	 * @var gwiaOutboundMessageEncoding $outboundMessageEncoding
	 * minOccurs: 0
	 */
	public $outboundMessageEncoding;
	/**
	 * @var string $outboundRelayHost
	 * minOccurs: 0
	 */
	public $outboundRelayHost;
	/**
	 * @var gatewayOutboundStatusLevel $outboundStatusLevel
	 * minOccurs: 0
	 */
	public $outboundStatusLevel;
	/**
	 * @var boolean $pop3Service
	 * minOccurs: 0
	 */
	public $pop3Service;
	/**
	 * @var boolean $popIntruderDetect
	 * minOccurs: 0
	 */
	public $popIntruderDetect;
	/**
	 * @var int $popPort
	 * minOccurs: 0
	 */
	public $popPort;
	/**
	 * @var int $popSslPort
	 * minOccurs: 0
	 */
	public $popSslPort;
	/**
	 * @var int $popSslThreads
	 * minOccurs: 0
	 */
	public $popSslThreads;
	/**
	 * @var int $popThreads
	 * minOccurs: 0
	 */
	public $popThreads;
	/**
	 * @var sslStatus $popUsesSsl
	 * minOccurs: 0
	 */
	public $popUsesSsl;
	/**
	 * @var gwiaPtrRecordHandling $ptrRecordHandling
	 * minOccurs: 0
	 */
	public $ptrRecordHandling;
	/**
	 * @var gwiaQualifierPositioning $qualifierPositioning
	 * minOccurs: 0
	 */
	public $qualifierPositioning;
	/**
	 * @var boolean $realMailFrom
	 * minOccurs: 0
	 */
	public $realMailFrom;
	/**
	 * @var string[] $realtimeBlacklist
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $realtimeBlacklist;
	/**
	 * @var boolean $recoveryEnabled
	 * minOccurs: 0
	 */
	public $recoveryEnabled;
	/**
	 * @var boolean $relayAddSignature
	 * minOccurs: 0
	 */
	public $relayAddSignature;
	/**
	 * @var string $relayHost
	 * minOccurs: 0
	 */
	public $relayHost;
	/**
	 * @var boolean $requireSslForAuthentication
	 * minOccurs: 0
	 */
	public $requireSslForAuthentication;
	/**
	 * @var int $retryCount
	 * minOccurs: 0
	 */
	public $retryCount;
	/**
	 * @var int $retryInterval
	 * minOccurs: 0
	 */
	public $retryInterval;
	/**
	 * @var string $rfc822ReplyDomain
	 * minOccurs: 0
	 */
	public $rfc822ReplyDomain;
	/**
	 * @var int $sendPollCycle
	 * minOccurs: 0
	 */
	public $sendPollCycle;
	/**
	 * @var int $sendReceiveCycleTime
	 * minOccurs: 0
	 */
	public $sendReceiveCycleTime;
	/**
	 * @var string $smtpHomeDirectory
	 * minOccurs: 0
	 */
	public $smtpHomeDirectory;
	/**
	 * @var gwiaSmtpMessageRelay $smtpMessageRelayAllow
	 * minOccurs: 0
	 */
	public $smtpMessageRelayAllow;
	/**
	 * @var int $smtpMessageRelayBlockMessageSize
	 * minOccurs: 0
	 */
	public $smtpMessageRelayBlockMessageSize;
	/**
	 * @var boolean $smtpMessageRelayBlockMessageSizeEnabled
	 * minOccurs: 0
	 */
	public $smtpMessageRelayBlockMessageSizeEnabled;
	/**
	 * @var int $smtpPort
	 * minOccurs: 0
	 */
	public $smtpPort;
	/**
	 * @var string $smtpQueuesDirectory
	 * minOccurs: 0
	 */
	public $smtpQueuesDirectory;
	/**
	 * @var int $smtpReceiveThreads
	 * minOccurs: 0
	 */
	public $smtpReceiveThreads;
	/**
	 * @var int $smtpSendThreads
	 * minOccurs: 0
	 */
	public $smtpSendThreads;
	/**
	 * @var boolean $smtpService
	 * minOccurs: 0
	 */
	public $smtpService;
	/**
	 * @var sslStatus $smtpUsesSsl
	 * minOccurs: 0
	 */
	public $smtpUsesSsl;
	/**
	 * @var int $snapShotInterval
	 * minOccurs: 0
	 */
	public $snapShotInterval;
	/**
	 * @var int $timeoutCommands
	 * minOccurs: 0
	 */
	public $timeoutCommands;
	/**
	 * @var int $timeoutConnectionEstablish
	 * minOccurs: 0
	 */
	public $timeoutConnectionEstablish;
	/**
	 * @var int $timeoutConnectionTerminate
	 * minOccurs: 0
	 */
	public $timeoutConnectionTerminate;
	/**
	 * @var int $timeoutData
	 * minOccurs: 0
	 */
	public $timeoutData;
	/**
	 * @var int $timeoutGreeting
	 * minOccurs: 0
	 */
	public $timeoutGreeting;
	/**
	 * @var int $timeoutTcpRead
	 * minOccurs: 0
	 */
	public $timeoutTcpRead;
	/**
	 * @var string $undeliverableForwardHost
	 * minOccurs: 0
	 */
	public $undeliverableForwardHost;
	/**
	 * @var int $undeliverableMessageReturnAmount
	 * minOccurs: 0
	 */
	public $undeliverableMessageReturnAmount;
	/**
	 * @var boolean $useDialup
	 * minOccurs: 0
	 */
	public $useDialup;
	/**
	 * @var boolean $uuencodeAttachments
	 * minOccurs: 0
	 */
	public $uuencodeAttachments;
	/**
	 * @var int $version
	 * minOccurs: 0
	 */
	public $version;
	/**
	 * @var boolean $xspam
	 * minOccurs: 0
	 */
	public $xspam;
	/**
	 * @var string[] $xspamFields
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $xspamFields;
}
