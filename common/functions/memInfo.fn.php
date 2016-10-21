<?php

namespace mlu\common\functions;

use mlu\common;
/**
 * triggers two notices about Memory Usage
 */
function memInfo() {
	common::logWrite(sprintf("Peak Mem: %.3fMB\n",memory_get_peak_usage()/1048576),STDERR);
	common::logWrite(sprintf("Curr Mem: %.3fMB\n",memory_get_usage()/1048576),STDERR);
}
