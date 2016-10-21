<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class deliveryMode extends \mlu\rest\xsd_restriction { 
	const APP_THRESHOLD='APP_THRESHOLD';
	const CLIENT_DELIVERS_LOCALLY='CLIENT_DELIVERS_LOCALLY';
}