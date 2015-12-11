<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class sslfiles {
	/**
	 * @var string $sslCertificateFile
	 * minOccurs: 0
	 */
	public $sslCertificateFile;
	/**
	 * @var string $sslKeyFile
	 * minOccurs: 0
	 */
	public $sslKeyFile;
}
