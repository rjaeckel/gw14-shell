<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restGwObject extends propertiesProxy{
	/**
	 * @var string $externalGuid
	 * minOccurs: 0
	 */
	public $externalGuid;
	/**
	 * @var string $guid
	 * minOccurs: 0
	 */
	public $guid;
	/**
	 * @var string $id
	 * minOccurs: 0
	 */
	public $id;
	/**
	 * @var string $lastModifiedBy
	 * minOccurs: 0
	 */
	public $lastModifiedBy;
	/**
	 * @var adminOp $lastModifiedOp
	 * minOccurs: 0
	 */
	public $lastModifiedOp;
	/**
	 * @var string $name
	 * minOccurs: 0
	 */
	public $name;
	/**
	 * @var adminOp $pendingOp
	 * minOccurs: 0
	 */
	public $pendingOp;
	/**
	 * @var int $timeCreated
	 * minOccurs: 0
	 */
	public $timeCreated;
	/**
	 * @var int $timeLastMod
	 * minOccurs: 0
	 */
	public $timeLastMod;
}
