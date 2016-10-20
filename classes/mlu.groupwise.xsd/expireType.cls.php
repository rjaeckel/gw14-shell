<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class expireType extends \mlu\rest\xsd_restriction { 
	const EXPIRE='EXPIRE';
	const REDUCE='REDUCE';
}