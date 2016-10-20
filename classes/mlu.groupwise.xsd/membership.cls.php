<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class membership extends restObjectReference{
	/**
	 * @var participation $participation
	 * minOccurs: 0
	 */
	public $participation;
}
