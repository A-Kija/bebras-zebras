<?php

require __DIR__ . '/Stikline.php';


$stikline1 = new Stikline(200);
$stikline2 = new Stikline(150);
$stikline3 = new Stikline(100);


$stikline3->ipilti(
    $stikline2->ipilti(
        $stikline1->ipilti(
            500
            )->ispilti()
        )->ispilti()
);


;

// $stikline2->ipilti( $stikline1->ipilti( 500 )->ispilti() );


_dc($stikline1);
_dc($stikline2);
_dc($stikline3);


