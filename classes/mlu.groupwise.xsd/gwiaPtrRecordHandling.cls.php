<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class gwiaPtrRecordHandling extends \mlu\rest\xsd_restriction { 
	const UNDEFINED='UNDEFINED';
	const REJECT_IF_PTR_MISSING='REJECT_IF_PTR_MISSING';
	const REJECT_IF_PTR_DOES_NOT_MATCH_SENDER_GREETING='REJECT_IF_PTR_DOES_NOT_MATCH_SENDER_GREETING';
	const FLAG_INVALID_PTR_AS_JUNK_MAIL='FLAG_INVALID_PTR_AS_JUNK_MAIL';
	const ALL='ALL';
}