<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class mailboxLicenseType extends \mlu\rest\xsd_restriction { 
	const UNKNOWN='UNKNOWN';
	const FULL='FULL';
	const LIMITED='LIMITED';
}