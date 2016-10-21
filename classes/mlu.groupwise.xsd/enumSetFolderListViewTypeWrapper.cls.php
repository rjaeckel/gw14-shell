<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class enumSetFolderListViewTypeWrapper extends clientOptionWrapper{
	/**
	 * @var folderListViewType[] $value
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $value;
}
