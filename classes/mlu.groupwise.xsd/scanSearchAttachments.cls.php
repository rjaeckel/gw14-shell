<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class scanSearchAttachments extends \mlu\rest\xsd_restriction { 
	const ALWAYS='ALWAYS';
	const WHEN_NOT_BUSY='WHEN_NOT_BUSY';
	const NEVER='NEVER';
}