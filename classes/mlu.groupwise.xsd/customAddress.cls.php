<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class customAddress extends restGwObject{
	/**
	 * @var string $description
	 * minOccurs: 0
	 */
	public $description;
	/**
	 * @var boolean $enabled
	 * minOccurs: 0
	 */
	public $enabled;
	/**
	 * @var int $priority
	 * minOccurs: 0
	 */
	public $priority;
	/**
	 * @var string $replaceString
	 * minOccurs: 0
	 */
	public $replaceString;
	/**
	 * @var string $searchString
	 * minOccurs: 0
	 */
	public $searchString;
	/**
	 * @var boolean $unlisted
	 * minOccurs: 0
	 */
	public $unlisted;
}
