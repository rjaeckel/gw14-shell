<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class accessRight extends \mlu\rest\xsd_restriction { 
	const ADD='ADD';
	const MODIFY='MODIFY';
	const VIEW='VIEW';
	const DELETE='DELETE';
	const RESET_IN_USE='RESET_IN_USE';
	const SET_OFFICIAL_VER='SET_OFFICIAL_VER';
	const MANAGE='MANAGE';
	const DISK_USAGE_LIMIT='DISK_USAGE_LIMIT';
}