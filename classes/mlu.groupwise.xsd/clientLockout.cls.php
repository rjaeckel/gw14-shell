<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class clientLockout extends \mlu\rest\xsd_restriction { 
	const NONE='NONE';
	const VERSION='VERSION';
	const DATE='DATE';
	const BOTH='BOTH';
}