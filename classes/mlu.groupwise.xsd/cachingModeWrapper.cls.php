<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class cachingModeWrapper extends clientOptionWrapper{
	/**
	 * @var cachingMode $value
	 * minOccurs: 0
	 */
	public $value;
}
