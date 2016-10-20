<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class accessMode extends \mlu\rest\xsd_restriction { 
	const CLIENT_SERVER='CLIENT_SERVER';
	const CLIENT_SERVER_DIRECT='CLIENT_SERVER_DIRECT';
	const DIRECT='DIRECT';
}