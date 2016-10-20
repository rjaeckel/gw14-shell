<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class accessRights extends \mlu\rest\xsd_restriction { 
	const UNDEFINED='UNDEFINED';
	const WRITE='WRITE';
	const READ='READ';
	const READWRITE='READWRITE';
}