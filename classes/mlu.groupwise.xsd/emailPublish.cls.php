<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class emailPublish extends \mlu\rest\xsd_restriction { 
	const PREFERRED_ADDRESS='PREFERRED_ADDRESS';
	const ALL_AVAILABLE_ADDRESSES='ALL_AVAILABLE_ADDRESSES';
	const CUSTOM_ADDRESSES='CUSTOM_ADDRESSES';
	const NICKNAME_ADDRESSES='NICKNAME_ADDRESSES';
	const GATEWAY_ALIAS_ADDRESSES='GATEWAY_ALIAS_ADDRESSES';
}