<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class gwiaAddressFormat extends \mlu\rest\xsd_restriction { 
	const AUTO='AUTO';
	const USER='USER';
	const PO='PO';
	const DOMAIN='DOMAIN';
}