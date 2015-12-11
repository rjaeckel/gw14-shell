<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class cachingMode extends \mlu\rest\xsd_restriction { 
	const ALLOW='ALLOW';
	const FORCE='FORCE';
	const DISALLOW='DISALLOW';
}