<?php


// require __DIR__.'/MiskoTevas.php';
// require __DIR__.'/Barsukas.php';


spl_autoload_register(function ($class) {

    _dc($class);
    $prefix = '';
    $base_dir = __DIR__ . '/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    _dc($file);

    if (file_exists($file)) {
        require $file;
    }
});

$barsukas1 = new Barsukas('rudas', 23);
$barsukas2 = new Barsukas;
$barsukas3 = clone($barsukas2);

// $barsukas1->kojuSkaicius = 4;
echo '<pre>';
var_dump($barsukas1);
var_dump($barsukas2);
var_dump($barsukas3);

// $barsukas1 = 123;

// var_dump($barsukas1);

$barsukoKailioSpalvosSavybe = 'kailis';


// echo $barsukas1->$barsukoKailioSpalvosSavybe;
// echo $barsukas1->kailis;

// echo $barsukas1->akiuSkaicius;



// barsukas1.kailis
// barsukas1[barsukoKailioSpalvosSavybe]


// $barsukas2->balsas->balsas;


$barsukas2->rankos = 2;

$barsukas2->setAkiuSkaicius("aaa");

var_dump($barsukas1);

// unset($barsukas2);

var_dump($barsukas3);

$barsukas1->uodega();