<?php
session_start();


// $data = [
//         ['name' => 'Petras', 'pass' => md5('123')],
//         ['name' => 'AloYzas', 'pass' => md5('123')],
// ];

// file_put_contents(__DIR__ .'/data.json', json_encode($data));

$data = json_decode(file_get_contents(__DIR__ .'/data.json'),1);


_d($data);