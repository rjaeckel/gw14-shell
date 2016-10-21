<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class visibility extends \mlu\rest\xsd_restriction { 
	const NONE='NONE';
	const POST_OFFICE='POST_OFFICE';
	const DOMAIN='DOMAIN';
	const SYSTEM='SYSTEM';
}