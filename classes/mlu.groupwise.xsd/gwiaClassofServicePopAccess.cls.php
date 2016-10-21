<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class gwiaClassofServicePopAccess extends \mlu\rest\xsd_restriction { 
	const ALLOW='ALLOW';
	const PREVENT='PREVENT';
	const INHERIT='INHERIT';
}