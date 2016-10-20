<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class member extends membership{
	/**
	 * @var string $diagnosticId
	 * minOccurs: 0
	 */
	public $diagnosticId;
	/**
	 * @var string $givenName
	 * minOccurs: 0
	 */
	public $givenName;
	/**
	 * @var adminOp $lastModifiedOp
	 * minOccurs: 0
	 */
	public $lastModifiedOp;
	/**
	 * @var string $surname
	 * minOccurs: 0
	 */
	public $surname;
	/**
	 * @var memberType $type
	 * minOccurs: 0
	 */
	public $type;
}
