<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class messageFileProcessing extends \mlu\rest\xsd_restriction { 
	const ALL_MESSAGES='ALL_MESSAGES';
	const LOW_PRIORITY_MESSAGES='LOW_PRIORITY_MESSAGES';
	const HIGH_PRIORITY_MESSAGES='HIGH_PRIORITY_MESSAGES';
	const OFF='OFF';
}