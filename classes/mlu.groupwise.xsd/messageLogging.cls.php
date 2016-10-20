<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class messageLogging extends \mlu\rest\xsd_restriction { 
	const OFF='OFF';
	const BRIEF='BRIEF';
	const FULL='FULL';
}