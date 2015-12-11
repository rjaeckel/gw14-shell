<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class directoryType extends \mlu\rest\xsd_restriction { 
	const EDIRECTORY='EDIRECTORY';
	const ACTIVE_DIRECTORY='ACTIVE_DIRECTORY';
	const UNKNOWN='UNKNOWN';
}