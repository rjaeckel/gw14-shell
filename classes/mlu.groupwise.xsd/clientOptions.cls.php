<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class clientOptions extends propertiesProxy{
	/**
	 * @var clientOptionTimeWrapper $alarmDefaultTime
	 * minOccurs: 0
	 */
	public $alarmDefaultTime;
	/**
	 * @var booleanWrapper $alarmWhenAccepted
	 * minOccurs: 0
	 */
	public $alarmWhenAccepted;
	/**
	 * @var booleanWrapper $allowPictureSelfProvision
	 * minOccurs: 0
	 */
	public $allowPictureSelfProvision;
	/**
	 * @var booleanWrapper $allowProtectionFromCleanup
	 * minOccurs: 0
	 */
	public $allowProtectionFromCleanup;
	/**
	 * @var longWrapper $allowProtectionGraceDate
	 * minOccurs: 0
	 */
	public $allowProtectionGraceDate;
	/**
	 * @var returnNotificationWrapper $appointmentAcceptedNotification
	 * minOccurs: 0
	 */
	public $appointmentAcceptedNotification;
	/**
	 * @var appointmentCleanupWrapper $appointmentCleanupAction
	 * minOccurs: 0
	 */
	public $appointmentCleanupAction;
	/**
	 * @var longWrapper $appointmentCleanupDays
	 * minOccurs: 0
	 */
	public $appointmentCleanupDays;
	/**
	 * @var clientOptionTimeWrapper $appointmentDefaultLength
	 * minOccurs: 0
	 */
	public $appointmentDefaultLength;
	/**
	 * @var returnNotificationWrapper $appointmentDeletedNotification
	 * minOccurs: 0
	 */
	public $appointmentDeletedNotification;
	/**
	 * @var appointmentDisplayModeWrapper $appointmentDisplayMode
	 * minOccurs: 0
	 */
	public $appointmentDisplayMode;
	/**
	 * @var booleanWrapper $appointmentIncludeSelf
	 * minOccurs: 0
	 */
	public $appointmentIncludeSelf;
	/**
	 * @var returnNotificationWrapper $appointmentOpenedNotification
	 * minOccurs: 0
	 */
	public $appointmentOpenedNotification;
	/**
	 * @var trackingInformationWrapper $appointmentTrackingAction
	 * minOccurs: 0
	 */
	public $appointmentTrackingAction;
	/**
	 * @var stringWrapper $archiveLocationLinux
	 * minOccurs: 0
	 */
	public $archiveLocationLinux;
	/**
	 * @var stringWrapper $archiveLocationUnc
	 * minOccurs: 0
	 */
	public $archiveLocationUnc;
	/**
	 * @var booleanWrapper $autoDeleteSentMail
	 * minOccurs: 0
	 */
	public $autoDeleteSentMail;
	/**
	 * @var booleanWrapper $autoUpdateAlwaysPrompt
	 * minOccurs: 0
	 */
	public $autoUpdateAlwaysPrompt;
	/**
	 * @var booleanWrapper $autoUpdateEnabled
	 * minOccurs: 0
	 */
	public $autoUpdateEnabled;
	/**
	 * @var booleanWrapper $autoUpdateForce
	 * minOccurs: 0
	 */
	public $autoUpdateForce;
	/**
	 * @var longWrapper $autoUpdateGraceLogins
	 * minOccurs: 0
	 */
	public $autoUpdateGraceLogins;
	/**
	 * @var stringWrapper $autoUpdateUrl
	 * minOccurs: 0
	 */
	public $autoUpdateUrl;
	/**
	 * @var longWrapper $boxSizeLimit
	 * minOccurs: 0
	 */
	public $boxSizeLimit;
	/**
	 * @var booleanWrapper $boxSizeNotify
	 * minOccurs: 0
	 */
	public $boxSizeNotify;
	/**
	 * @var longWrapper $boxSizeWarningThreshold
	 * minOccurs: 0
	 */
	public $boxSizeWarningThreshold;
	/**
	 * @var booleanWrapper $boxThresholdNotify
	 * minOccurs: 0
	 */
	public $boxThresholdNotify;
	/**
	 * @var clientOptionTimeWrapper $busySearchAppointmentLength
	 * minOccurs: 0
	 */
	public $busySearchAppointmentLength;
	/**
	 * @var enumSetDaysOfWeekWrapper $busySearchDays
	 * minOccurs: 0
	 */
	public $busySearchDays;
	/**
	 * @var clientOptionTimeWrapper $busySearchFromTime
	 * minOccurs: 0
	 */
	public $busySearchFromTime;
	/**
	 * @var longWrapper $busySearchRange
	 * minOccurs: 0
	 */
	public $busySearchRange;
	/**
	 * @var clientOptionTimeWrapper $busySearchToTime
	 * minOccurs: 0
	 */
	public $busySearchToTime;
	/**
	 * @var longWrapper $cachingGraceDays
	 * minOccurs: 0
	 */
	public $cachingGraceDays;
	/**
	 * @var cachingModeWrapper $cachingMode
	 * minOccurs: 0
	 */
	public $cachingMode;
	/**
	 * @var clientOptionTimeWrapper $calendarEndTime
	 * minOccurs: 0
	 */
	public $calendarEndTime;
	/**
	 * @var daysOfWeekWrapper $calendarFirstOfWeek
	 * minOccurs: 0
	 */
	public $calendarFirstOfWeek;
	/**
	 * @var enumSetDaysOfWeekWrapper $calendarHighlightDays
	 * minOccurs: 0
	 */
	public $calendarHighlightDays;
	/**
	 * @var booleanWrapper $calendarShowWeekNumber
	 * minOccurs: 0
	 */
	public $calendarShowWeekNumber;
	/**
	 * @var clientOptionTimeWrapper $calendarStartTime
	 * minOccurs: 0
	 */
	public $calendarStartTime;
	/**
	 * @var enumSetDaysOfWeekWrapper $calendarWorkdays
	 * minOccurs: 0
	 */
	public $calendarWorkdays;
	/**
	 * @var stringWrapper $certificateDownloadUrl
	 * minOccurs: 0
	 */
	public $certificateDownloadUrl;
	/**
	 * @var booleanWrapper $checkSpelling
	 * minOccurs: 0
	 */
	public $checkSpelling;
	/**
	 * @var booleanWrapper $checkSpellingAsYouType
	 * minOccurs: 0
	 */
	public $checkSpellingAsYouType;
	/**
	 * @var classificationWrapper $classification
	 * minOccurs: 0
	 */
	public $classification;
	/**
	 * @var clientLicenseWrapper $clientLicense
	 * minOccurs: 0
	 */
	public $clientLicense;
	/**
	 * @var booleanWrapper $collaborationSingleSignon
	 * minOccurs: 0
	 */
	public $collaborationSingleSignon;
	/**
	 * @var colorSchemeWrapper $colorScheme
	 * minOccurs: 0
	 */
	public $colorScheme;
	/**
	 * @var enumSetViewWrapper $composeViews
	 * minOccurs: 0
	 */
	public $composeViews;
	/**
	 * @var booleanWrapper $concealSubject
	 * minOccurs: 0
	 */
	public $concealSubject;
	/**
	 * @var booleanWrapper $convertAttachments
	 * minOccurs: 0
	 */
	public $convertAttachments;
	/**
	 * @var booleanWrapper $createTrackingItem
	 * minOccurs: 0
	 */
	public $createTrackingItem;
	/**
	 * @var stringWrapper $customViewsLocationUnc
	 * minOccurs: 0
	 */
	public $customViewsLocationUnc;
	/**
	 * @var viewWrapper $defaultComposeView
	 * minOccurs: 0
	 */
	public $defaultComposeView;
	/**
	 * @var stringWrapper $defaultLibrary
	 * minOccurs: 0
	 */
	public $defaultLibrary;
	/**
	 * @var viewWrapper $defaultReadView
	 * minOccurs: 0
	 */
	public $defaultReadView;
	/**
	 * @var longWrapper $delayDelivery
	 * minOccurs: 0
	 */
	public $delayDelivery;
	/**
	 * @var booleanWrapper $disableHTMLView
	 * minOccurs: 0
	 */
	public $disableHTMLView;
	/**
	 * @var booleanWrapper $displayFolderList
	 * minOccurs: 0
	 */
	public $displayFolderList;
	/**
	 * @var booleanWrapper $displayMainMenu
	 * minOccurs: 0
	 */
	public $displayMainMenu;
	/**
	 * @var booleanWrapper $displayMainToolBar
	 * minOccurs: 0
	 */
	public $displayMainToolBar;
	/**
	 * @var booleanWrapper $displayNavBar
	 * minOccurs: 0
	 */
	public $displayNavBar;
	/**
	 * @var booleanWrapper $displayQuickViewer
	 * minOccurs: 0
	 */
	public $displayQuickViewer;
	/**
	 * @var booleanWrapper $doNotPurgeBeforeBackup
	 * minOccurs: 0
	 */
	public $doNotPurgeBeforeBackup;
	/**
	 * @var booleanWrapper $edirectoryAuthentication
	 * minOccurs: 0
	 */
	public $edirectoryAuthentication;
	/**
	 * @var booleanWrapper $encryptForRecipients
	 * minOccurs: 0
	 */
	public $encryptForRecipients;
	/**
	 * @var encryptionAlgorithmWrapper $encryptionAlgorithm
	 * minOccurs: 0
	 */
	public $encryptionAlgorithm;
	/**
	 * @var encryptionKeySizeWrapper $encryptionKeySize
	 * minOccurs: 0
	 */
	public $encryptionKeySize;
	/**
	 * @var enumSetFolderListViewTypeWrapper $folderListViewType
	 * minOccurs: 0
	 */
	public $folderListViewType;
	/**
	 * @var booleanWrapper $forceCacheCleanup
	 * minOccurs: 0
	 */
	public $forceCacheCleanup;
	/**
	 * @var enumSetFrequentContactsWrapper $frequentContacts
	 * minOccurs: 0
	 */
	public $frequentContacts;
	/**
	 * @var signatureApplicationWrapper $globalSignatureApplication
	 * minOccurs: 0
	 */
	public $globalSignatureApplication;
	/**
	 * @var stringArrayWrapper $globalSignatureList
	 * minOccurs: 0
	 */
	public $globalSignatureList;
	/**
	 * @var stringWrapper $globalSignatureName
	 * minOccurs: 0
	 */
	public $globalSignatureName;
	/**
	 * @var htmlReplyFormatWrapper $HTMLReplyFormat
	 * minOccurs: 0
	 */
	public $HTMLReplyFormat;
	/**
	 * @var booleanWrapper $HTMLReplyFormatIncludeAddress
	 * minOccurs: 0
	 */
	public $HTMLReplyFormatIncludeAddress;
	/**
	 * @var booleanWrapper $HTMLReplyFormatIncludeDate
	 * minOccurs: 0
	 */
	public $HTMLReplyFormatIncludeDate;
	/**
	 * @var booleanWrapper $HTMLReplyFormatIncludeHeaders
	 * minOccurs: 0
	 */
	public $HTMLReplyFormatIncludeHeaders;
	/**
	 * @var booleanWrapper $HTMLReplyFormatIncludeID
	 * minOccurs: 0
	 */
	public $HTMLReplyFormatIncludeID;
	/**
	 * @var booleanWrapper $HTMLReplyFormatIncludeName
	 * minOccurs: 0
	 */
	public $HTMLReplyFormatIncludeName;
	/**
	 * @var booleanWrapper $HTMLReplyFormatIncludeSeparator
	 * minOccurs: 0
	 */
	public $HTMLReplyFormatIncludeSeparator;
	/**
	 * @var typePositionWrapper $HTMLReplyFormatTypePosition
	 * minOccurs: 0
	 */
	public $HTMLReplyFormatTypePosition;
	/**
	 * @var booleanWrapper $handleJunkMail
	 * minOccurs: 0
	 */
	public $handleJunkMail;
	/**
	 * @var booleanWrapper $internetMailTracking
	 * minOccurs: 0
	 */
	public $internetMailTracking;
	/**
	 * @var trashCleanupWrapper $junkMailCleanupAction
	 * minOccurs: 0
	 */
	public $junkMailCleanupAction;
	/**
	 * @var longWrapper $junkMailCleanupDays
	 * minOccurs: 0
	 */
	public $junkMailCleanupDays;
	/**
	 * @var booleanWrapper $keyShieldSingleSignon
	 * minOccurs: 0
	 */
	public $keyShieldSingleSignon;
	/**
	 * @var booleanWrapper $limitsApplyToCache
	 * minOccurs: 0
	 */
	public $limitsApplyToCache;
	/**
	 * @var mailCleanupWrapper $mailCleanupAction
	 * minOccurs: 0
	 */
	public $mailCleanupAction;
	/**
	 * @var longWrapper $mailCleanupDays
	 * minOccurs: 0
	 */
	public $mailCleanupDays;
	/**
	 * @var returnNotificationWrapper $mailDeletedNotification
	 * minOccurs: 0
	 */
	public $mailDeletedNotification;
	/**
	 * @var returnNotificationWrapper $mailOpenedNotification
	 * minOccurs: 0
	 */
	public $mailOpenedNotification;
	/**
	 * @var trackingInformationWrapper $mailTrackingAction
	 * minOccurs: 0
	 */
	public $mailTrackingAction;
	/**
	 * @var longWrapper $maxMessageSize
	 * minOccurs: 0
	 */
	public $maxMessageSize;
	/**
	 * @var booleanWrapper $messageRetention
	 * minOccurs: 0
	 */
	public $messageRetention;
	/**
	 * @var mimeEncodingWrapper $mimeEncoding
	 * minOccurs: 0
	 */
	public $mimeEncoding;
	/**
	 * @var booleanWrapper $moveToPublishedCalendar
	 * minOccurs: 0
	 */
	public $moveToPublishedCalendar;
	/**
	 * @var returnNotificationWrapper $noteAcceptedNotification
	 * minOccurs: 0
	 */
	public $noteAcceptedNotification;
	/**
	 * @var returnNotificationWrapper $noteDeletedNotification
	 * minOccurs: 0
	 */
	public $noteDeletedNotification;
	/**
	 * @var returnNotificationWrapper $noteOpenedNotification
	 * minOccurs: 0
	 */
	public $noteOpenedNotification;
	/**
	 * @var trackingInformationWrapper $noteTrackingAction
	 * minOccurs: 0
	 */
	public $noteTrackingAction;
	/**
	 * @var clientOptionMinuteTimeWrapper $notifyPollInterval
	 * minOccurs: 0
	 */
	public $notifyPollInterval;
	/**
	 * @var booleanWrapper $openNewView
	 * minOccurs: 0
	 */
	public $openNewView;
	/**
	 * @var booleanWrapper $performMaintenancePurges
	 * minOccurs: 0
	 */
	public $performMaintenancePurges;
	/**
	 * @var booleanWrapper $personalAddressBookUserDefinedFields
	 * minOccurs: 0
	 */
	public $personalAddressBookUserDefinedFields;
	/**
	 * @var plainTextReplyFormatWrapper $plainTextReplyFormat
	 * minOccurs: 0
	 */
	public $plainTextReplyFormat;
	/**
	 * @var booleanWrapper $plainTextReplyFormatIncludeAddress
	 * minOccurs: 0
	 */
	public $plainTextReplyFormatIncludeAddress;
	/**
	 * @var booleanWrapper $plainTextReplyFormatIncludeDate
	 * minOccurs: 0
	 */
	public $plainTextReplyFormatIncludeDate;
	/**
	 * @var booleanWrapper $plainTextReplyFormatIncludeID
	 * minOccurs: 0
	 */
	public $plainTextReplyFormatIncludeID;
	/**
	 * @var booleanWrapper $plainTextReplyFormatIncludeName
	 * minOccurs: 0
	 */
	public $plainTextReplyFormatIncludeName;
	/**
	 * @var booleanWrapper $plainTextReplyFormatIncludeSeparator
	 * minOccurs: 0
	 */
	public $plainTextReplyFormatIncludeSeparator;
	/**
	 * @var stringWrapper $plainTextReplyFormatSeparatorChar
	 * minOccurs: 0
	 */
	public $plainTextReplyFormatSeparatorChar;
	/**
	 * @var typePositionWrapper $plainTextReplyFormatTypePosition
	 * minOccurs: 0
	 */
	public $plainTextReplyFormatTypePosition;
	/**
	 * @var booleanWrapper $promptBeforePurge
	 * minOccurs: 0
	 */
	public $promptBeforePurge;
	/**
	 * @var booleanWrapper $publishCalendar
	 * minOccurs: 0
	 */
	public $publishCalendar;
	/**
	 * @var booleanWrapper $publishFreeBusySearch
	 * minOccurs: 0
	 */
	public $publishFreeBusySearch;
	/**
	 * @var stringWrapper $publishingHost
	 * minOccurs: 0
	 */
	public $publishingHost;
	/**
	 * @var quickViewerPositionWrapper $quickViewerPosition
	 * minOccurs: 0
	 */
	public $quickViewerPosition;
	/**
	 * @var booleanWrapper $readNext
	 * minOccurs: 0
	 */
	public $readNext;
	/**
	 * @var enumSetViewWrapper $readViews
	 * minOccurs: 0
	 */
	public $readViews;
	/**
	 * @var clientOptionMinuteTimeWrapper $refreshInterval
	 * minOccurs: 0
	 */
	public $refreshInterval;
	/**
	 * @var booleanWrapper $remoteMode
	 * minOccurs: 0
	 */
	public $remoteMode;
	/**
	 * @var booleanWrapper $requirePassword
	 * minOccurs: 0
	 */
	public $requirePassword;
	/**
	 * @var booleanWrapper $ruleReplyAll
	 * minOccurs: 0
	 */
	public $ruleReplyAll;
	/**
	 * @var booleanWrapper $ruleReplyLoop
	 * minOccurs: 0
	 */
	public $ruleReplyLoop;
	/**
	 * @var scanSearchAttachmentsWrapper $scanSearchAttachments
	 * minOccurs: 0
	 */
	public $scanSearchAttachments;
	/**
	 * @var longWrapper $sendExpireDays
	 * minOccurs: 0
	 */
	public $sendExpireDays;
	/**
	 * @var stringWrapper $sendIllegalExtensions
	 * minOccurs: 0
	 */
	public $sendIllegalExtensions;
	/**
	 * @var booleanWrapper $sendNotify
	 * minOccurs: 0
	 */
	public $sendNotify;
	/**
	 * @var sendPriorityWrapper $sendPriority
	 * minOccurs: 0
	 */
	public $sendPriority;
	/**
	 * @var longWrapper $sendRecipientLimit
	 * minOccurs: 0
	 */
	public $sendRecipientLimit;
	/**
	 * @var longWrapper $sendReplyRequested
	 * minOccurs: 0
	 */
	public $sendReplyRequested;
	/**
	 * @var booleanWrapper $sharedAddressBook
	 * minOccurs: 0
	 */
	public $sharedAddressBook;
	/**
	 * @var booleanWrapper $sharedFolder
	 * minOccurs: 0
	 */
	public $sharedFolder;
	/**
	 * @var booleanWrapper $showMessengerPresence
	 * minOccurs: 0
	 */
	public $showMessengerPresence;
	/**
	 * @var booleanWrapper $signDigitally
	 * minOccurs: 0
	 */
	public $signDigitally;
	/**
	 * @var signingAlgorithmWrapper $signingAlgorithm
	 * minOccurs: 0
	 */
	public $signingAlgorithm;
	/**
	 * @var booleanWrapper $singleSignon
	 * minOccurs: 0
	 */
	public $singleSignon;
	/**
	 * @var booleanWrapper $subscribeCalendar
	 * minOccurs: 0
	 */
	public $subscribeCalendar;
	/**
	 * @var returnNotificationWrapper $taskAcceptedNotification
	 * minOccurs: 0
	 */
	public $taskAcceptedNotification;
	/**
	 * @var returnNotificationWrapper $taskCompletedNotification
	 * minOccurs: 0
	 */
	public $taskCompletedNotification;
	/**
	 * @var returnNotificationWrapper $taskDeletedNotification
	 * minOccurs: 0
	 */
	public $taskDeletedNotification;
	/**
	 * @var returnNotificationWrapper $taskOpenedNotification
	 * minOccurs: 0
	 */
	public $taskOpenedNotification;
	/**
	 * @var trackingInformationWrapper $taskTrackingAction
	 * minOccurs: 0
	 */
	public $taskTrackingAction;
	/**
	 * @var trashCleanupWrapper $trashCleanupAction
	 * minOccurs: 0
	 */
	public $trashCleanupAction;
	/**
	 * @var longWrapper $trashCleanupDays
	 * minOccurs: 0
	 */
	public $trashCleanupDays;
	/**
	 * @var enumSetTreatImapLikeGWWrapper $treatImapLikeGW
	 * minOccurs: 0
	 */
	public $treatImapLikeGW;
	/**
	 * @var stringWrapper $tutorialUrl
	 * minOccurs: 0
	 */
	public $tutorialUrl;
	/**
	 * @var booleanWrapper $useBlockMailList
	 * minOccurs: 0
	 */
	public $useBlockMailList;
	/**
	 * @var booleanWrapper $useColorSchemes
	 * minOccurs: 0
	 */
	public $useColorSchemes;
	/**
	 * @var booleanWrapper $useJunkMailList
	 * minOccurs: 0
	 */
	public $useJunkMailList;
	/**
	 * @var booleanWrapper $useNntpAccounts
	 * minOccurs: 0
	 */
	public $useNntpAccounts;
	/**
	 * @var booleanWrapper $usePersonalAddressBook
	 * minOccurs: 0
	 */
	public $usePersonalAddressBook;
	/**
	 * @var booleanWrapper $usePersonalAddressBookForCalendar
	 * minOccurs: 0
	 */
	public $usePersonalAddressBookForCalendar;
	/**
	 * @var booleanWrapper $usePopImapAccounts
	 * minOccurs: 0
	 */
	public $usePopImapAccounts;
	/**
	 * @var booleanWrapper $useSmime
	 * minOccurs: 0
	 */
	public $useSmime;
	/**
	 * @var booleanWrapper $userLimits
	 * minOccurs: 0
	 */
	public $userLimits;
	/**
	 * @var stringWrapper $userPassword
	 * minOccurs: 0
	 */
	public $userPassword;
	/**
	 * @var booleanWrapper $vibeEnabled
	 * minOccurs: 0
	 */
	public $vibeEnabled;
	/**
	 * @var stringWrapper $vibeUrl
	 * minOccurs: 0
	 */
	public $vibeUrl;
	/**
	 * @var wildcardRestrictionWrapper $wildcardAddressing
	 * minOccurs: 0
	 */
	public $wildcardAddressing;
}
