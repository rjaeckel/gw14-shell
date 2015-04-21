<?php

namespace mlu\common\functions;

function namespacePath($ns) {
    return str_replace('\\', '.', $ns).'/';
}