<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class trackingInformation extends \mlu\rest\xsd_restriction { 
	const DELIVERED='DELIVERED';
	const DELIVERED_OPENED='DELIVERED_OPENED';
	const ALL_INFORMATION='ALL_INFORMATION';
}