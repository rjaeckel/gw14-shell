<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class gatewayDirectorySync extends \mlu\rest\xsd_restriction { 
	const NONE='NONE';
	const SYNCHRONIZATION='SYNCHRONIZATION';
	const EXCHANGE='EXCHANGE';
	const BOTH='BOTH';
}