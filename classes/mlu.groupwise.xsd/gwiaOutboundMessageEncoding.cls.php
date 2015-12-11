<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class gwiaOutboundMessageEncoding extends \mlu\rest\xsd_restriction { 
	const RFC822='RFC822';
	const MIME='MIME';
}