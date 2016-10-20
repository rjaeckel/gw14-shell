<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class clientOptionWrapper {
	/**
	 * @var clientOptionLock $lock
	 * minOccurs: 0
	 */
	public $lock;
	/**
	 * @var boolean $restore
	 * minOccurs: 0
	 */
	public $restore;
}
