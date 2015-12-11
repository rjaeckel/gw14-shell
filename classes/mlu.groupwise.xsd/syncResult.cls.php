<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class syncResult {
	/**
	 * @var syncAction $action
	 * minOccurs: 0
	 */
	public $action;
	/**
	 * @var string[] $attributes
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $attributes;
	/**
	 * @var int $error
	 * minOccurs: 0
	 */
	public $error;
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
	/**
	 * @var string $message
	 * minOccurs: 0
	 */
	public $message;
	/**
	 * @var string $objectId
	 * minOccurs: 0
	 */
	public $objectId;
	/**
	 * @var domainObjectType $objectType
	 * minOccurs: 0
	 */
	public $objectType;
}
