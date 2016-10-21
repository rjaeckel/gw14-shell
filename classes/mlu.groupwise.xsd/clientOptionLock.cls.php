<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class clientOptionLock {
	/**
	 * @var boolean $itemLocked
	 */
	public $itemLocked;
	/**
	 * @var boolean $lockAttempt
	 * minOccurs: 0
	 */
	public $lockAttempt;
	/**
	 * @var boolean $lockAvailable
	 */
	public $lockAvailable;
	/**
	 * @var accessLevel $lockLevel
	 * minOccurs: 0
	 */
	public $lockLevel;
	/**
	 * @var accessLevel $lockRights
	 * minOccurs: 0
	 */
	public $lockRights;
	/**
	 * @var boolean $modifiable
	 */
	public $modifiable;
}
