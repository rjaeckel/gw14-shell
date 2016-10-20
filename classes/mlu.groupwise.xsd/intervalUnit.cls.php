<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class intervalUnit extends \mlu\rest\xsd_restriction { 
	const HOURLY='HOURLY';
	const DAILY='DAILY';
	const WEEKLY='WEEKLY';
	const MONTHLY='MONTHLY';
}