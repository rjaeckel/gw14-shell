<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class plainTextReplyFormat extends \mlu\rest\xsd_restriction { 
	const GROUPWISE_CLASSIC='GROUPWISE_CLASSIC';
	const INCLUDE_HEADERS='INCLUDE_HEADERS';
	const INTERNET_STANDARD='INTERNET_STANDARD';
}