<?php namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class frequentContacts extends \mlu\rest\xsd_restriction { 
	const AUTO_SAVE='AUTO_SAVE';
	const RECV_SAVE_EXT='RECV_SAVE_EXT';
	const RECV_SAVE_INT='RECV_SAVE_INT';
	const RECV_SAVE_TO_ME='RECV_SAVE_TO_ME';
	const SEND_SAVE_EXT='SEND_SAVE_EXT';
	const SEND_SAVE_INT='SEND_SAVE_INT';
}