<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class externalSync extends \mlu\rest\xsd_restriction { 
	const IF_VISIBILITY_SYSTEM='IF_VISIBILITY_SYSTEM';
	const ALWAYS='ALWAYS';
	const NEVER='NEVER';
}