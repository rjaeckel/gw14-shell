<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class sslStatus extends \mlu\rest\xsd_restriction { 
	const DISABLED='DISABLED';
	const ENABLED='ENABLED';
	const REQUIRED='REQUIRED';
}