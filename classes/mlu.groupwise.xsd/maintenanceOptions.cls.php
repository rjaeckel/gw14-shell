<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class maintenanceOptions {
	/**
	 * @var maintenanceAction $action
	 * minOccurs: 0
	 */
	public $action;
	/**
	 * @var boolean $agentTask
	 * minOccurs: 0
	 */
	public $agentTask;
	/**
	 * @var boolean $createIfMissing
	 * minOccurs: 0
	 */
	public $createIfMissing;
	/**
	 * @var boolean $download
	 * minOccurs: 0
	 */
	public $download;
	/**
	 * @var string $targetId
	 * minOccurs: 0
	 */
	public $targetId;
	/**
	 * @var string $targetPath
	 * minOccurs: 0
	 */
	public $targetPath;
}
