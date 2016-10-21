<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class libraryArea extends restArea{
	/**
	 * @var string $domainName
	 * minOccurs: 0
	 */
	public $domainName;
	/**
	 * @var string $libraryName
	 * minOccurs: 0
	 */
	public $libraryName;
	/**
	 * @var string $postOfficeName
	 * minOccurs: 0
	 */
	public $postOfficeName;
}
