<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class signingAlgorithm extends \mlu\rest\xsd_restriction { 
	const NONE='NONE';
	const SHA_1='SHA_1';
	const SHA_256='SHA_256';
	const SHA_384='SHA_384';
	const SHA_512='SHA_512';
}