<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class group extends restAddressable{
	/**
	 * @var boolean $externalRecord
	 * minOccurs: 0
	 */
	public $externalRecord;
	/**
	 * @var boolean $externalSync
	 * minOccurs: 0
	 */
	public $externalSync;
	/**
	 * @var groupType $groupType
	 * minOccurs: 0
	 */
	public $groupType;
	/**
	 * @var distributionListReplication $replicationOverride
	 * minOccurs: 0
	 */
	public $replicationOverride;
}
