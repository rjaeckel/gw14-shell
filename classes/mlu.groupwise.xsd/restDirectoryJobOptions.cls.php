<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restDirectoryJobOptions {
	/**
	 * @var boolean $commit
	 */
	public $commit;
	/**
	 * @var boolean $showFailed
	 */
	public $showFailed;
	/**
	 * @var boolean $showSkipped
	 */
	public $showSkipped;
	/**
	 * @var boolean $showSucceeded
	 */
	public $showSucceeded;
}
