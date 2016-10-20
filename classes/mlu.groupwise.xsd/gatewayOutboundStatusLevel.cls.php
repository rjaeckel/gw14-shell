<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class gatewayOutboundStatusLevel extends \mlu\rest\xsd_restriction { 
	const NONE='NONE';
	const UNDELIVERED='UNDELIVERED';
	const DELIVERED='DELIVERED';
	const OPEN='OPEN';
	const FULL='FULL';
}