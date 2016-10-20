<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class autoCreateNickname extends \mlu\rest\xsd_restriction { 
	const NEVER='NEVER';
	const ALWAYS='ALWAYS';
	const PROMPT='PROMPT';
}