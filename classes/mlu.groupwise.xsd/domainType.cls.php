<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class domainType extends \mlu\rest\xsd_restriction { 
	const UNDEFINED='UNDEFINED';
	const SECONDARY='SECONDARY';
	const PRIMARY='PRIMARY';
	const EXTERNAL_GROUPWISE='EXTERNAL_GROUPWISE';
	const EXTERNAL_NON_GROUPWISE='EXTERNAL_NON_GROUPWISE';
}