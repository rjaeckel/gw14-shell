<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class gwTimezoneDayOccurrence extends \mlu\rest\xsd_restriction { 
	const UNDEFINED='UNDEFINED';
	const FIRST='FIRST';
	const SECOND='SECOND';
	const THIRD='THIRD';
	const FOURTH='FOURTH';
	const LAST='LAST';
}