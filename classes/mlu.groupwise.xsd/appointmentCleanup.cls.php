<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class appointmentCleanup extends \mlu\rest\xsd_restriction { 
	const MANUAL_DELETE_ARCHIVE='MANUAL_DELETE_ARCHIVE';
	const AUTO_DELETE='AUTO_DELETE';
	const AUTO_ARCHIVE='AUTO_ARCHIVE';
}