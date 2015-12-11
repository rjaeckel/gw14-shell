<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class linkType extends \mlu\rest\xsd_restriction { 
	const UNDEFINED='UNDEFINED';
	const DIRECT='DIRECT';
	const INDIRECT='INDIRECT';
	const GATEWAY='GATEWAY';
}