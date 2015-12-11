<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class appointmentDisplayMode extends \mlu\rest\xsd_restriction { 
	const DURATION='DURATION';
	const END_DATE='END_DATE';
}