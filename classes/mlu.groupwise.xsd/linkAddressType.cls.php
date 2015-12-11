<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class linkAddressType extends \mlu\rest\xsd_restriction { 
	const UNKNOWN='UNKNOWN';
	const MAPPED='MAPPED';
	const TCP_IP='TCP_IP';
}