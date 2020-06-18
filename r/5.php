<?php
session_start();

$x = $_SESSION['x'] ?? 5;

echo $x;

$x++;

$_SESSION['x'] = $x;
$_SESSION['karve'] = 'pienas';