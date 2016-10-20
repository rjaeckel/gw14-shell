<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class ldapAuthMethod extends \mlu\rest\xsd_restriction { 
	const BIND='BIND';
	const COMPARE='COMPARE';
}