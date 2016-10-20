<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class eventType extends \mlu\rest\xsd_restriction { 
	const MAINTENANCE='MAINTENANCE';
	const DISK_CHECK='DISK_CHECK';
	const USER_SYNC='USER_SYNC';
}