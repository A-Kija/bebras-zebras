<?php
use Grazus\Meskenas\Singelton as B;

// require __DIR__.'/Singelton.php';


spl_autoload_register(function ($class) {

    _dc($class);
    $prefix = 'Grazus\\';
    $base_dir = __DIR__ . '/lib/';

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



$cart1 = B::make();
// $cart2 = Singelton::make();

// $cart2 = unserialize(serialize($cart1));




var_dump($cart1);
// var_dump($cart2);


// echo Singelton::MESKENAS;echo Singelton::MESKENAS;echo Singelton::MESKENAS;echo Singelton::MESKENAS;