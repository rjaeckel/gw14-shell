<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class groupType extends \mlu\rest\xsd_restriction { 
	const DISTRIBUTION_LIST='DISTRIBUTION_LIST';
	const DIRECTORY_GROUP='DIRECTORY_GROUP';
	const ORGANIZATIONAL_ROLE='ORGANIZATIONAL_ROLE';
}