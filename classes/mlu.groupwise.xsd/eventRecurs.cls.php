<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class eventRecurs extends \mlu\rest\xsd_restriction { 
	const DAILY='DAILY';
	const WEEKDAY='WEEKDAY';
	const MONTHDAY='MONTHDAY';
	const HOURLY='HOURLY';
	const INTERVAL='INTERVAL';
}