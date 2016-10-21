<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class globalSignature {
	/**
	 * @var string $html
	 * minOccurs: 0
	 */
	public $html;
	/**
	 * @var image[] $images
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $images;
	/**
	 * @var string $name
	 * minOccurs: 0
	 */
	public $name;
	/**
	 * @var string $text
	 * minOccurs: 0
	 */
	public $text;
}
