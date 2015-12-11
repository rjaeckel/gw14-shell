<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class attributeType extends \mlu\rest\xsd_restriction { 
	const string='string';
	const number='number';
	const bool='bool';
	const enumeration='enumeration';
}