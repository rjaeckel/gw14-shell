<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class directoryLink {
	/**
	 * @var string $directoryId
	 * minOccurs: 0
	 */
	public $directoryId;
	/**
	 * @var boolean $importPhoto
	 */
	public $importPhoto;
	/**
	 * @var string $ldapDn
	 * minOccurs: 0
	 */
	public $ldapDn;
	/**
	 * @var string $ldapId
	 * minOccurs: 0
	 */
	public $ldapId;
}
