<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class nodeConfigInstance {
	/**
	 * @var boolean $clustered
	 */
	public $clustered;
	/**
	 * @var string $defaultTimeZoneId
	 * minOccurs: 0
	 */
	public $defaultTimeZoneId;
	/**
	 * @var string $ipAddress
	 * minOccurs: 0
	 */
	public $ipAddress;
	/**
	 * @var nodeConfigInstanceAgent $mta
	 * minOccurs: 0
	 */
	public $mta;
	/**
	 * @var nodeConfigInstanceAgent[] $poas
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $poas;
	/**
	 * @var int $port
	 */
	public $port;
	/**
	 * @var string $systemGuid
	 * minOccurs: 0
	 */
	public $systemGuid;
	/**
	 * @var string $systemName
	 * minOccurs: 0
	 */
	public $systemName;
}
