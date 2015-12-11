<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class encryptionKeySize extends \mlu\rest\xsd_restriction { 
	const NONE='NONE';
	const KEY_40='KEY_40';
	const KEY_56='KEY_56';
	const KEY_64='KEY_64';
	const KEY_128='KEY_128';
}