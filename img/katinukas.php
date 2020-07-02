<?php

$cat = file_get_contents('cat.jpg');



// header('Content-type: image/png');

$cat = 'data:image/jpeg;base64,'.base64_encode($cat);

file_put_contents('cat.64', $cat);

echo $cat;