<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class dirPublish extends restDirectoryJobOptions{
	/**
	 * @var string $password
	 * minOccurs: 0
	 */
	public $password;
	/**
	 * @var string $username
	 * minOccurs: 0
	 */
	public $username;
}
