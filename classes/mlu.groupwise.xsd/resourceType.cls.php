<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class resourceType extends \mlu\rest\xsd_restriction { 
	const UNSUPPORTED='UNSUPPORTED';
	const RESOURCE='RESOURCE';
	const PLACE='PLACE';
	const ROLE='ROLE';
}