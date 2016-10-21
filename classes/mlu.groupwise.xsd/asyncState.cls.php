<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class asyncState extends \mlu\rest\xsd_restriction { 
	const QUEUED='QUEUED';
	const RUNNING='RUNNING';
	const FAILED='FAILED';
	const CANCELING='CANCELING';
	const CANCELED='CANCELED';
	const COMPLETE='COMPLETE';
}