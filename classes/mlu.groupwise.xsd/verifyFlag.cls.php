<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class verifyFlag extends \mlu\rest\xsd_restriction { 
	const NONE='NONE';
	const STRUCTURE='STRUCTURE';
	const CONTENTS='CONTENTS';
}