<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class warnings {
	/**
	 * @var apiStatus[] $warning
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $warning;
}
