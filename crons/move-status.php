<?php

require_once('application.php');

\mlu\groupwise\wadl\system::clearAllCompleted();
$moves=\mlu\groupwise\wadl\system::getList("count=1000&attrs=postofficename");
$count=0;
$p=0;
do {
    echo "p.: ".++$p."\r";
    $count+=count($moves('object',array()));
} while($moves=$moves->nextListPage());
$users= users("count=1000&attrs=postofficename","POST_OFFICE.gwdom0.system");
$p=0;
$cUsers=0;
do {
    echo "p.: ".++$p."\r";
    $cUsers+=count($users('object',array()));
} while ($users=$users->nextListPage());
echo sprintf("[%s] %d users in import-PO; %d requests pending.\n",date("d.m.Y H:i:s"),$cUsers,$count);
