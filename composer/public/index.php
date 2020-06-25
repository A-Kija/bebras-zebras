<?php

require '..\vendor\autoload.php';

define('DIR', '/bebras/composer/public/');




// [REQUEST_URI] => /bebras/composer/public/miskas/66

$param = str_replace(DIR, '', $_SERVER['REQUEST_URI']);

$params = explode('/', $param);


if ($params[0] == 'miskas') {
    $app = new App\Miskas($params[1]);
}

elseif ($params[0] == 'pieva') {
    $app = new App\DB\Pieva($params[1]);
}
else {
    echo 'not found 404';
    $app = '';
}


var_dump($app);
