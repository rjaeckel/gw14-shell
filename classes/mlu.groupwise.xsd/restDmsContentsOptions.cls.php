<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restDmsContentsOptions extends propertiesProxy{
	/**
	 * @var string $authorForOrphanedDocuments
	 * minOccurs: 0
	 */
	public $authorForOrphanedDocuments;
	/**
	 * @var dmsContentsCheckFlag[] $contentsCheckFlags
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $contentsCheckFlags;
	/**
	 * @var boolean $resetWordLists
	 * minOccurs: 0
	 */
	public $resetWordLists;
}
