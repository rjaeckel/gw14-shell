<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class exchangeContext {
	/**
	 * @var string $activeDirectoryExchangeBaseContext
	 * minOccurs: 0
	 */
	public $activeDirectoryExchangeBaseContext;
	/**
	 * @var string $groupWiseExternalPostOffice
	 * minOccurs: 0
	 */
	public $groupWiseExternalPostOffice;
	/**
	 * @var boolean $syncSubContexts
	 * minOccurs: 0
	 */
	public $syncSubContexts;
}
