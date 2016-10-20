<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class securitySettings extends \mlu\rest\xsd_restriction { 
	const LOW='LOW';
	const HIGH='HIGH';
	const EDIRECTORY='EDIRECTORY';
	const LDAP='LDAP';
}