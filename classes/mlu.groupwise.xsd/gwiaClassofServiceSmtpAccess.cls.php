<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class gwiaClassofServiceSmtpAccess extends \mlu\rest\xsd_restriction { 
	const ALLOW='ALLOW';
	const PREVENT='PREVENT';
	const INHERIT='INHERIT';
}