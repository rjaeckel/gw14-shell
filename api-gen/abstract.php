#!/usr/bin/env php
<?php

//error_reporting(error_reporting()^E_USER_NOTICE);

// enable generation of development information too
define('__devmode',true);
file_exists('common/config.php') || chdir('..');

require (__DIR__.'/wadl-abstract.php');
require (__DIR__.'/xsd-abstract.php');
