<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class error {
	/**
	 * @var string $id
	 * minOccurs: 0
	 */
	public $id;
	/**
	 * @var apiStatus $status
	 * minOccurs: 0
	 */
	public $status;
}
