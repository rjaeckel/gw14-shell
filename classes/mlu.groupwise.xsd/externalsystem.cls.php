<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class externalsystem extends restGwObject{
	/**
	 * @var string $description
	 * minOccurs: 0
	 */
	public $description;
	/**
	 * @var string $externalDomain
	 * minOccurs: 0
	 */
	public $externalDomain;
	/**
	 * @var boolean $receiveExternalDomains
	 * minOccurs: 0
	 */
	public $receiveExternalDomains;
	/**
	 * @var boolean $receiveExternalGroups
	 * minOccurs: 0
	 */
	public $receiveExternalGroups;
	/**
	 * @var boolean $receiveExternalPostOffices
	 * minOccurs: 0
	 */
	public $receiveExternalPostOffices;
	/**
	 * @var boolean $receiveExternalResources
	 * minOccurs: 0
	 */
	public $receiveExternalResources;
	/**
	 * @var boolean $receiveExternalUsers
	 * minOccurs: 0
	 */
	public $receiveExternalUsers;
	/**
	 * @var boolean $sendExternalDomains
	 * minOccurs: 0
	 */
	public $sendExternalDomains;
	/**
	 * @var boolean $sendExternalGroups
	 * minOccurs: 0
	 */
	public $sendExternalGroups;
	/**
	 * @var boolean $sendExternalPostOffices
	 * minOccurs: 0
	 */
	public $sendExternalPostOffices;
	/**
	 * @var boolean $sendExternalResources
	 * minOccurs: 0
	 */
	public $sendExternalResources;
	/**
	 * @var boolean $sendExternalUsers
	 * minOccurs: 0
	 */
	public $sendExternalUsers;
}
