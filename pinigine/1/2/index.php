<?php


require './../../Pinigine.php';


$pinigine1 = new Pinigine;
$pinigine2 = new Pinigine;

$pinigine1->ideti(5)->ideti(1.5);
// $pinigine1->ideti(1.5);

$pinigine2->ideti(44.5);

$pinigine1->skaiciuoti();
$pinigine2->skaiciuoti();