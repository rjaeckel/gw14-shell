<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class eventLife extends \mlu\rest\xsd_restriction { 
	const REPEAT='REPEAT';
	const DISKLIMIT='DISKLIMIT';
	const ONCE='ONCE';
}