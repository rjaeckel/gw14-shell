<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class platform extends \mlu\rest\xsd_restriction { 
	const UNSUPPORTED='UNSUPPORTED';
	const NETWARE='NETWARE';
	const LINUX='LINUX';
	const WINDOWS='WINDOWS';
}