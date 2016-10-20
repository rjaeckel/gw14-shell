<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class classOfService extends propertiesProxy{
	/**
	 * @var gwiaClassofServiceImapAccess $imapAccess
	 * minOccurs: 0
	 */
	public $imapAccess;
	/**
	 * @var string $name
	 * minOccurs: 0
	 */
	public $name;
	/**
	 * @var gwiaClassofServicePopAccess $popAccess
	 * minOccurs: 0
	 */
	public $popAccess;
	/**
	 * @var boolean $popConvertToMime
	 * minOccurs: 0
	 */
	public $popConvertToMime;
	/**
	 * @var int $popDaysPrior
	 * minOccurs: 0
	 */
	public $popDaysPrior;
	/**
	 * @var boolean $popDeleteAfterDownload
	 * minOccurs: 0
	 */
	public $popDeleteAfterDownload;
	/**
	 * @var boolean $popHighPerformanceFileSizeCalculation
	 * minOccurs: 0
	 */
	public $popHighPerformanceFileSizeCalculation;
	/**
	 * @var int $popMaxDownloadMessages
	 * minOccurs: 0
	 */
	public $popMaxDownloadMessages;
	/**
	 * @var boolean $popPurgeAfterDownload
	 * minOccurs: 0
	 */
	public $popPurgeAfterDownload;
	/**
	 * @var gwiaClassofServiceSmtpAccess $smtpIncomingAccess
	 * minOccurs: 0
	 */
	public $smtpIncomingAccess;
	/**
	 * @var string[] $smtpIncomingAllowExceptions
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $smtpIncomingAllowExceptions;
	/**
	 * @var int $smtpIncomingBlockMessageSize
	 * minOccurs: 0
	 */
	public $smtpIncomingBlockMessageSize;
	/**
	 * @var boolean $smtpIncomingBlockMessageSizeEnabled
	 * minOccurs: 0
	 */
	public $smtpIncomingBlockMessageSizeEnabled;
	/**
	 * @var string[] $smtpIncomingPreventExceptions
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $smtpIncomingPreventExceptions;
	/**
	 * @var gwiaClassofServiceSmtpAccess $smtpOutgoingAccess
	 * minOccurs: 0
	 */
	public $smtpOutgoingAccess;
	/**
	 * @var string[] $smtpOutgoingAllowExceptions
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $smtpOutgoingAllowExceptions;
	/**
	 * @var int $smtpOutgoingBlockMessageSize
	 * minOccurs: 0
	 */
	public $smtpOutgoingBlockMessageSize;
	/**
	 * @var boolean $smtpOutgoingBlockMessageSizeEnabled
	 * minOccurs: 0
	 */
	public $smtpOutgoingBlockMessageSizeEnabled;
	/**
	 * @var string[] $smtpOutgoingPreventExceptions
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $smtpOutgoingPreventExceptions;
	/**
	 * @var string[] $smtpOutgoingRuleGeneratedForwardsAllowExceptions
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $smtpOutgoingRuleGeneratedForwardsAllowExceptions;
	/**
	 * @var boolean $smtpOutgoingRuleGeneratedForwardsEnabled
	 * minOccurs: 0
	 */
	public $smtpOutgoingRuleGeneratedForwardsEnabled;
	/**
	 * @var string[] $smtpOutgoingRuleGeneratedForwardsPreventExceptions
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $smtpOutgoingRuleGeneratedForwardsPreventExceptions;
	/**
	 * @var string[] $smtpOutgoingRuleGeneratedRepliesAllowExceptions
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $smtpOutgoingRuleGeneratedRepliesAllowExceptions;
	/**
	 * @var boolean $smtpOutgoingRuleGeneratedRepliesEnabled
	 * minOccurs: 0
	 */
	public $smtpOutgoingRuleGeneratedRepliesEnabled;
	/**
	 * @var string[] $smtpOutgoingRuleGeneratedRepliesPreventExceptions
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $smtpOutgoingRuleGeneratedRepliesPreventExceptions;
}
