<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class fileFlag extends \mlu\rest\xsd_restriction { 
	const USER='USER';
	const MSG='MSG';
	const WPROF='WPROF';
	const DOC='DOC';
	const GUARD='GUARD';
	const DEFER='DEFER';
}