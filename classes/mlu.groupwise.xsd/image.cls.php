<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class image {
	/**
	 * @var base64Binary $data
	 * minOccurs: 0
	 */
	public $data;
	/**
	 * @var string $id
	 * minOccurs: 0
	 */
	public $id;
}
