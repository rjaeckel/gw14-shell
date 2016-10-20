<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class gwiaBadMessageHandling extends \mlu\rest\xsd_restriction { 
	const MOVE='MOVE';
	const SEND='SEND';
	const BOTH='BOTH';
	const NEITHER='NEITHER';
}