<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class restAnalyzeOptions extends propertiesProxy{
	/**
	 * @var boolean $checkAttachments
	 * minOccurs: 0
	 */
	public $checkAttachments;
	/**
	 * @var boolean $checkIndex
	 * minOccurs: 0
	 */
	public $checkIndex;
	/**
	 * @var boolean $fixProblems
	 * minOccurs: 0
	 */
	public $fixProblems;
	/**
	 * @var boolean $statistics
	 * minOccurs: 0
	 */
	public $statistics;
	/**
	 * @var boolean $updateTotals
	 * minOccurs: 0
	 */
	public $updateTotals;
	/**
	 * @var verifyFlag[] $verify
	 * minOccurs: 0
	 * maxOccurs: unbounded
	 * nillable: true
	 */
	public $verify;
}
