<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class logLevel extends \mlu\rest\xsd_restriction { 
	const OFF='OFF';
	const NORMAL='NORMAL';
	const VERBOSE='VERBOSE';
	const DIAGNOSTIC='DIAGNOSTIC';
}