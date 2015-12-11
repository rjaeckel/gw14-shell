<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restInternetAddressingProps extends restGwObject{
	/**
	 * @var restEffectiveAddressFormats $allowedAddressFormats
	 * minOccurs: 0
	 */
	public $allowedAddressFormats;
	/**
	 * @var restEffectiveInternetDomainName $internetDomainName
	 * minOccurs: 0
	 */
	public $internetDomainName;
	/**
	 * @var restEffectivePreferredAddressFormat $preferredAddressFormat
	 * minOccurs: 0
	 */
	public $preferredAddressFormat;
}
