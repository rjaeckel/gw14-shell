<?php

namespace mlu\common\functions;


function logWrite($msg,$target=STDOUT,$eol="\r") {
	global $argv;
	#$cols = ((int)`if [ $-==*i* ]; then tput cols; fi`);
	$cols = ((int)`if [ -t 0 ]; then tput cols; fi`);
	$s = sprintf("[%s %s] %s",
	             date("d.m.Y-H:i:s"),
	             basename($argv[0],'.php'),
	             $msg
	);
	$out = $cols?substr($s,0,$cols):$s;

	fwrite($target,sprintf("%-{$cols}s$eol",$out));
}

