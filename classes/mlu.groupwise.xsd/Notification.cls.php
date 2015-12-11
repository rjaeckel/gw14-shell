<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class Notification extends restGwObject{
	/**
	 * @var int $notificationId
	 * minOccurs: 0
	 */
	public $notificationId;
	/**
	 * @var string $notificationMessage
	 * minOccurs: 0
	 */
	public $notificationMessage;
	/**
	 * @var string $notificationOwner
	 * minOccurs: 0
	 */
	public $notificationOwner;
	/**
	 * @var string $notificationType
	 * minOccurs: 0
	 */
	public $notificationType;
	/**
	 * @var string $value
	 * minOccurs: 0
	 */
	public $value;
}
