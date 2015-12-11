<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class adminType extends \mlu\rest\xsd_restriction { 
	const UNDEFINED='UNDEFINED';
	const OPERATOR='OPERATOR';
	const ACCOUNTING='ACCOUNTING';
	const POST_MASTER='POST_MASTER';
	const FOREIGN_OPERATOR='FOREIGN_OPERATOR';
}