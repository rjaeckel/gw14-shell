<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restArea extends restGwObject{
	/**
	 * @var string $description
	 * minOccurs: 0
	 */
	public $description;
	/**
	 * @var string $displayName
	 * minOccurs: 0
	 */
	public $displayName;
	/**
	 * @var string $linuxPath
	 * minOccurs: 0
	 */
	public $linuxPath;
	/**
	 * @var string $path
	 * minOccurs: 0
	 */
	public $path;
}
