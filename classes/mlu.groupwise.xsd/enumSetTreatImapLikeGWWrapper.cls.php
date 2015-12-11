<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class enumSetTreatImapLikeGWWrapper extends clientOptionWrapper{
	/**
	 * @var treatImapLikeGW[] $value
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $value;
}
