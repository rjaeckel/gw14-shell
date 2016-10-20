<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class preferredAddressFormat extends \mlu\rest\xsd_restriction { 
	const FULL='FULL';
	const HOST='HOST';
	const USER='USER';
	const LAST_FIRST='LAST_FIRST';
	const FIRST_LAST='FIRST_LAST';
	const FLAST='FLAST';
}