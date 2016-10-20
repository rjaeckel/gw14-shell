<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class nodeConfigInstanceAgent {
	/**
	 * @var agentType $agentType
	 * minOccurs: 0
	 */
	public $agentType;
	/**
	 * @var string $appName
	 * minOccurs: 0
	 */
	public $appName;
	/**
	 * @var string $domainName
	 * minOccurs: 0
	 */
	public $domainName;
	/**
	 * @var string $path
	 * minOccurs: 0
	 */
	public $path;
	/**
	 * @var string $postOfficeName
	 * minOccurs: 0
	 */
	public $postOfficeName;
	/**
	 * @var int $version
	 * minOccurs: 0
	 */
	public $version;
}
