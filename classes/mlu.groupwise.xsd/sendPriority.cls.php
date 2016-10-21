<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class sendPriority extends \mlu\rest\xsd_restriction { 
	const LOW='LOW';
	const STANDARD='STANDARD';
	const HIGH='HIGH';
}