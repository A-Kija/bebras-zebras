<?php


require __DIR__ . '/Grybas.php';
require __DIR__ . '/Krepsys.php';

$krepsys = new Krepsys;
$y = 1;

while($krepsys->deti(new Grybas)){$y++;}

_dc($krepsys);
_dc($y);