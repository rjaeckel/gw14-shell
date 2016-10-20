<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class gatewayType extends \mlu\rest\xsd_restriction { 
	const UNSUPPORTED='UNSUPPORTED';
	const API='API';
	const ASYNC='ASYNC';
	const EXCHANGE='EXCHANGE';
	const INTERNET='INTERNET';
	const NOTES='NOTES';
	const WEB_ACCESS='WEB_ACCESS';
}