<?php

echo 'Labas, as esu failas I.php<br>';

echo __DIR__ . '<br>';


require __DIR__ .'/i2.php';
require __DIR__ .'/i2.php';
require 'i2.php';
require __DIR__ .'/i2.php';


echo 'Viso gero, as esu failas I.php<br>';

// $homepage = file_get_contents('http://www.vz.lt/');
// echo $homepage;

$file = __DIR__ .'/people.txt';
// Atidaro failą
$current = file_get_contents($file);

$current .= "John\n";

file_put_contents($file, $current);

//‌ ‌Įrašome‌ ‌į‌ ‌failą‌ ‌
