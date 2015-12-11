<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restAbstractLdapServer extends restGwObject{
	/**
	 * @var string $address
	 * minOccurs: 0
	 */
	public $address;
	/**
	 * @var string $description
	 * minOccurs: 0
	 */
	public $description;
	/**
	 * @var string $directoryId
	 * minOccurs: 0
	 */
	public $directoryId;
	/**
	 * @var boolean $hasSslCertificateBin
	 * minOccurs: 0
	 */
	public $hasSslCertificateBin;
	/**
	 * @var int $ldapPort
	 * minOccurs: 0
	 */
	public $ldapPort;
	/**
	 * @var base64Binary $sslCertificateBin
	 * minOccurs: 0
	 */
	public $sslCertificateBin;
	/**
	 * @var string $sslCertificateFile
	 * minOccurs: 0
	 */
	public $sslCertificateFile;
	/**
	 * @var boolean $sslEnabled
	 * minOccurs: 0
	 */
	public $sslEnabled;
}
