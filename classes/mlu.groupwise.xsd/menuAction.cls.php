<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class menuAction extends \mlu\rest\xsd_restriction { 
	const ANALYZE='ANALYZE';
	const EXPIRE='EXPIRE';
	const STATS='STATS';
	const REBUILD='REBUILD';
	const PREFS='PREFS';
	const RECREATE='RECREATE';
	const MERGE='MERGE';
	const DMS_AGE='DMS_AGE';
	const DMS_LOG_CLEANUP='DMS_LOG_CLEANUP';
	const DMS_CONTENTS='DMS_CONTENTS';
	const RESET_PW='RESET_PW';
	const SET_PW='SET_PW';
	const SET_PW_BIT='SET_PW_BIT';
	const DISK_SPACE_USAGE='DISK_SPACE_USAGE';
	const AUDIT_REPORT='AUDIT_REPORT';
	const UNKNOWN='UNKNOWN';
}