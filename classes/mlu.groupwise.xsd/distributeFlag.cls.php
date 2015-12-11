<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class distributeFlag extends \mlu\rest\xsd_restriction { 
	const ADMIN='ADMIN';
	const USERS='USERS';
	const USERLOG_ON='USERLOG_ON';
	const USERLOG_MSG='USERLOG_MSG';
	const OTHERS='OTHERS';
}