<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class gwiaClassofServiceMemberType extends \mlu\rest\xsd_restriction { 
	const DOMAIN='DOMAIN';
	const POST_OFFICE='POST_OFFICE';
	const GROUP='GROUP';
	const USER='USER';
	const RESOURCE='RESOURCE';
}