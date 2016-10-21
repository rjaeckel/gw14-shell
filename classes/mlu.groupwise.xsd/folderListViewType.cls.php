<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class folderListViewType extends \mlu\rest\xsd_restriction { 
	const FULL='FULL';
	const SIMPLE='SIMPLE';
	const FAVORITES='FAVORITES';
	const LONG='LONG';
}