<?php

namespace mlu\common\functions;

function logWrite($msg,$target=STDOUT,$eol="\r") {
	global $argv;
	$cols = ((int)`if [ -t 0 ]; then tput cols; fi`);
	$prefix=sprintf("[%s %s] ", date("d.m.Y-H:i:s"), basename($argv[0],'.php'));
	$line = sprintf("%-{$cols}.{$cols}s",$prefix.$msg);
	return fwrite($target,$line.$eol);
}

