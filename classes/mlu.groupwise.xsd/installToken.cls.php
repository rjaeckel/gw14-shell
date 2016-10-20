<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class installToken {
	/**
	 * @var int $authorized
	 * minOccurs: 0
	 */
	public $authorized;
	/**
	 * @var int $claimed
	 * minOccurs: 0
	 */
	public $claimed;
	/**
	 * @var string $id
	 * minOccurs: 0
	 */
	public $id;
	/**
	 * @var int $issued
	 * minOccurs: 0
	 */
	public $issued;
	/**
	 * @var string $secret
	 * minOccurs: 0
	 */
	public $secret;
}
