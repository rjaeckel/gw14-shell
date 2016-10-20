<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restFile {
	/**
	 * @var int $fileDate
	 * minOccurs: 0
	 */
	public $fileDate;
	/**
	 * @var boolean $fileHidden
	 * minOccurs: 0
	 */
	public $fileHidden;
	/**
	 * @var string $fileName
	 * minOccurs: 0
	 */
	public $fileName;
	/**
	 * @var int $fileSize
	 * minOccurs: 0
	 */
	public $fileSize;
	/**
	 * @var string[] $files
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 */
	public $files;
	/**
	 * @var string[] $folders
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 */
	public $folders;
	/**
	 * @var string $path
	 * minOccurs: 0
	 */
	public $path;
	/**
	 * @var string[] $roots
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 */
	public $roots;
}
