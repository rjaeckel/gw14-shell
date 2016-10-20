<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class nodeConfigMode extends \mlu\rest\xsd_restriction { 
	const NOT_CONFIGURED='NOT_CONFIGURED';
	const SIMPLE_NODE='SIMPLE_NODE';
	const DOMAIN_NODE='DOMAIN_NODE';
}