<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restDirectorySearchOptions extends restDirectoryJobOptions{
	/**
	 * @var string $context
	 * minOccurs: 0
	 */
	public $context;
	/**
	 * @var string[] $exclude
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $exclude;
	/**
	 * @var string $filter
	 * minOccurs: 0
	 */
	public $filter;
	/**
	 * @var memberType[] $objectTypes
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $objectTypes;
	/**
	 * @var boolean $searchSubtree
	 */
	public $searchSubtree;
}
