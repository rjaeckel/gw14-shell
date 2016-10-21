<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class dirLink extends restDirectorySearchOptions{
	/**
	 * @var string $containerId
	 * minOccurs: 0
	 */
	public $containerId;
	/**
	 * @var string $directoryId
	 * minOccurs: 0
	 */
	public $directoryId;
	/**
	 * @var boolean $overwrite
	 */
	public $overwrite;
}
