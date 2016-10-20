<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class dmsContentsCheckFlag extends \mlu\rest\xsd_restriction { 
	const LIBRARY_RECORD='LIBRARY_RECORD';
	const DOC_VER_ELEM='DOC_VER_ELEM';
	const DOC_FILE='DOC_FILE';
	const ORPHANED_DOCS='ORPHANED_DOCS';
	const SECURITY='SECURITY';
	const CACHED_NAME='CACHED_NAME';
	const LIB_SPACE_USAGE='LIB_SPACE_USAGE';
	const MOVE_BLOBS='MOVE_BLOBS';
	const REMOVE_BLOB_AREAS='REMOVE_BLOB_AREAS';
	const RESYNC_SECURITY='RESYNC_SECURITY';
	const VERIFY_LIB_SPACE_USAGE='VERIFY_LIB_SPACE_USAGE';
}