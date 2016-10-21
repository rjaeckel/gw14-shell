<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class maintenanceAction extends \mlu\rest\xsd_restriction { 
	const VALIDATE='VALIDATE';
	const RECOVER='RECOVER';
	const REBUILD='REBUILD';
	const RECLAIM_SPACE='RECLAIM_SPACE';
	const REBUILD_INDEXES='REBUILD_INDEXES';
	const UPGRADE_VERSION='UPGRADE_VERSION';
	const CLEANUP_UNMAPPED_ADMIN_DEF_FIELDS='CLEANUP_UNMAPPED_ADMIN_DEF_FIELDS';
}