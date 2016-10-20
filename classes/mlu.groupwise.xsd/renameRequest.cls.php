<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class renameRequest {
	/**
	 * @var boolean $createNickname
	 * minOccurs: 0
	 */
	public $createNickname;
	/**
	 * @var string $newObjectId
	 * minOccurs: 0
	 */
	public $newObjectId;
	/**
	 * @var string $objectId
	 * minOccurs: 0
	 */
	public $objectId;
}
