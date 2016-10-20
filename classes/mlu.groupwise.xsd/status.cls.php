<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class status extends \mlu\rest\xsd_restriction { 
	const OK='OK';
	const CREATED='CREATED';
	const ACCEPTED='ACCEPTED';
	const NO_CONTENT='NO_CONTENT';
	const MOVED_PERMANENTLY='MOVED_PERMANENTLY';
	const SEE_OTHER='SEE_OTHER';
	const NOT_MODIFIED='NOT_MODIFIED';
	const TEMPORARY_REDIRECT='TEMPORARY_REDIRECT';
	const BAD_REQUEST='BAD_REQUEST';
	const UNAUTHORIZED='UNAUTHORIZED';
	const FORBIDDEN='FORBIDDEN';
	const NOT_FOUND='NOT_FOUND';
	const NOT_ACCEPTABLE='NOT_ACCEPTABLE';
	const CONFLICT='CONFLICT';
	const GONE='GONE';
	const PRECONDITION_FAILED='PRECONDITION_FAILED';
	const UNSUPPORTED_MEDIA_TYPE='UNSUPPORTED_MEDIA_TYPE';
	const INTERNAL_SERVER_ERROR='INTERNAL_SERVER_ERROR';
	const SERVICE_UNAVAILABLE='SERVICE_UNAVAILABLE';
}