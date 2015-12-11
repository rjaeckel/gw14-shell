<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class adminOp extends \mlu\rest\xsd_restriction { 
	const SAFE='SAFE';
	const ADD='ADD';
	const DELETE='DELETE';
	const MODIFY='MODIFY';
	const MOVE='MOVE';
	const UPDATE='UPDATE';
	const PO_REMOTE_REQ='PO_REMOTE_REQ';
}