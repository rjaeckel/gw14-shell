<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class treatImapLikeGW extends \mlu\rest\xsd_restriction { 
	const IMAPCOPY_IS_MOVE='IMAPCOPY_IS_MOVE';
	const IMAPMARKDEL_IS_DELETE='IMAPMARKDEL_IS_DELETE';
}