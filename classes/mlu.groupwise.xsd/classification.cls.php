<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class classification extends \mlu\rest\xsd_restriction { 
	const NORMAL='NORMAL';
	const PROPRIETARY='PROPRIETARY';
	const CONFIDENTIAL='CONFIDENTIAL';
	const SECRET='SECRET';
	const TOP_SECRET='TOP_SECRET';
	const FOR_YOUR_EYES_ONLY='FOR_YOUR_EYES_ONLY';
}