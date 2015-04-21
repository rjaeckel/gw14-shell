<?php

namespace mlu\common\functions;

/**
 * triggers two notices about Memory Usage
 */
function memInfo() {
    trigger_error(sprintf("Peak Mem: %.3fMB",memory_get_peak_usage()/1048576),E_USER_NOTICE);
    trigger_error(sprintf("Curr Mem: %.3fMB",memory_get_usage()/1048576),E_USER_NOTICE);
}