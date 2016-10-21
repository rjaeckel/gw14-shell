<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class accessLevel extends \mlu\rest\xsd_restriction { 
	const NONE='NONE';
	const SET_USER='SET_USER';
	const SET_POSTOFFICE='SET_POSTOFFICE';
	const SET_DOMAIN='SET_DOMAIN';
	const LOCK_USER='LOCK_USER';
	const LOCK_POSTOFFICE='LOCK_POSTOFFICE';
	const LOCK_DOMAIN='LOCK_DOMAIN';
	const UNKNOWN='UNKNOWN';
}