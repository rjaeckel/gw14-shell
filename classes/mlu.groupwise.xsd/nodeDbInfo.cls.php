<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class nodeDbInfo {
	/**
	 * @var string $agentId
	 * minOccurs: 0
	 */
	public $agentId;
	/**
	 * @var boolean $canLock
	 * minOccurs: 0
	 */
	public $canLock;
	/**
	 * @var string $id
	 * minOccurs: 0
	 */
	public $id;
	/**
	 * @var string $path
	 * minOccurs: 0
	 */
	public $path;
}
