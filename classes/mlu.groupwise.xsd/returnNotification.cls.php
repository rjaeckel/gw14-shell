<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class returnNotification extends \mlu\rest\xsd_restriction { 
	const NONE='NONE';
	const MAIL_RECEIPT='MAIL_RECEIPT';
	const NOTIFY='NOTIFY';
	const NOTIFY_MAIL='NOTIFY_MAIL';
}