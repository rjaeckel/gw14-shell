<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class syncAction extends \mlu\rest\xsd_restriction { 
	const NONE='NONE';
	const IGNORE='IGNORE';
	const ERROR='ERROR';
	const WARNING='WARNING';
	const ADD='ADD';
	const LINK='LINK';
	const SYNC='SYNC';
	const PUBLISH='PUBLISH';
}