<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class activeDirectoryDisplayNameFormat extends \mlu\rest\xsd_restriction { 
	const FIRST_LAST='FIRST_LAST';
	const LAST_FIRST='LAST_FIRST';
}