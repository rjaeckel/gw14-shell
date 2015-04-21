<?php

namespace mlu\common\functions;
use mlu\groupwise\wadl\internetdomain;
use mlu\groupwise\apiResult as res;

/**
 * get postoffices from iDomain desctiption
 * @param \mlu\groupwise\apiResult|string $iDom internetdomain to query for
 * @return string[] list of postoffices in iDomain's description
 */
function getPostOfficesForInternetdomain($iDom) {
    return array_filter(preg_split("/[\r\n]+/",$iDom instanceof res?$iDom('description'):internetdomain::setVars(array('internetdomain'=>$iDom))->object()->description));
}