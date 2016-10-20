<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class emailPublishFormats extends \mlu\rest\xsd_restriction { 
	const PREFERRED='PREFERRED';
	const USER_ID='USER_ID';
	const USER_ID_PO='USER_ID_PO';
	const FIRST_LAST='FIRST_LAST';
	const LAST_FIRST='LAST_FIRST';
	const FLAST='FLAST';
}