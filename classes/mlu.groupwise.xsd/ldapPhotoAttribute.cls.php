<?php
namespace mlu\groupwise\xsd;
/**
  * XSD-abstracted interfaces...
  */
abstract class ldapPhotoAttribute extends \mlu\rest\xsd_restriction { 
	const JPEGPHOTO='JPEGPHOTO';
	const THUMBNAILPHOTO='THUMBNAILPHOTO';
	const PHOTO='PHOTO';
}