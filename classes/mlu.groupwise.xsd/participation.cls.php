<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class participation extends \mlu\rest\xsd_restriction { 
	const PRIMARY='PRIMARY';
	const CARBON_COPY='CARBON_COPY';
	const BLIND_COPY='BLIND_COPY';
}