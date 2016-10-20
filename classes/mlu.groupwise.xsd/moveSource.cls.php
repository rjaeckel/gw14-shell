<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class moveSource {
	/**
	 * @var boolean $createNickname
	 * minOccurs: 0
	 */
	public $createNickname;
	/**
	 * @var string $id
	 * minOccurs: 0
	 */
	public $id;
	/**
	 * @var string $resourceOwnerId
	 * minOccurs: 0
	 */
	public $resourceOwnerId;
}
