<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class wildcardRestriction extends \mlu\rest\xsd_restriction { 
	const LIMITED_TO_SYSTEM='LIMITED_TO_SYSTEM';
	const LIMITED_TO_POST_OFFICE='LIMITED_TO_POST_OFFICE';
	const LIMITED_TO_DOMAIN='LIMITED_TO_DOMAIN';
	const UNLIMITED='UNLIMITED';
	const NOT_ALLOWED='NOT_ALLOWED';
}