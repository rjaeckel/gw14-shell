<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class trashCleanup extends \mlu\rest\xsd_restriction { 
	const MANUAL_PURGE='MANUAL_PURGE';
	const AUTO_PURGE='AUTO_PURGE';
}