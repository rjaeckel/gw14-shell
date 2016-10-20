<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class memberType extends \mlu\rest\xsd_restriction { 
	const BAD='BAD';
	const GROUP='GROUP';
	const NICKNAME='NICKNAME';
	const RESOURCE='RESOURCE';
	const USER='USER';
}