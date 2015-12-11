<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class encryptionAlgorithm extends \mlu\rest\xsd_restriction { 
	const NONE='NONE';
	const RC2='RC2';
	const RC4='RC4';
	const DES='DES';
	const DES3='DES3';
}