<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restObjectReference {
	/**
	 * @var string $domainName
	 * minOccurs: 0
	 */
	public $domainName;
	/**
	 * @var string $id
	 * minOccurs: 0
	 */
	public $id;
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
	 * @var string $postOfficeName
	 * minOccurs: 0
	 */
	public $postOfficeName;
	/**
	 * @var int $timeLastMod
	 * minOccurs: 0
	 */
	public $timeLastMod;
}
