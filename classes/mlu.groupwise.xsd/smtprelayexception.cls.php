<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class smtprelayexception {
	/**
	 * @var string $fromUrl
	 * minOccurs: 0
	 */
	public $fromUrl;
	/**
	 * @var string $toUrl
	 * minOccurs: 0
	 */
	public $toUrl;
}
