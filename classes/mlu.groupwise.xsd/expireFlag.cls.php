<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class expireFlag extends \mlu\rest\xsd_restriction { 
	const CALENDAR='CALENDAR';
	const INBOX='INBOX';
	const OUTBOX='OUTBOX';
	const DOCUMENTS='DOCUMENTS';
	const ONLY_BACKED_UP='ONLY_BACKED_UP';
	const LIMITED_SIZE='LIMITED_SIZE';
	const ONLY_RETAINED='ONLY_RETAINED';
}