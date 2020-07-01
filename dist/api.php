<?php
session_start();
if (!empty($_POST)) {

if (!file_exists('data.json')) {
    file_put_contents('data.json', json_encode([]));
}
$data = json_decode(file_get_contents('data.json'), 1);

//Keso prieziura
foreach ($data as $index => $city) {
  if ($city['time'] + 60 < time()) {
    unset($data[$index]);
  }
}



//Tikrinam cache
$index = strtolower($_POST['city1']).'-'.strtolower($_POST['city2']);
if (isset($data[$index])) {
  $_SESSION['distance'] = $data[$index]['distance'];
  $_SESSION['city1'] = $_POST['city1'];
  $_SESSION['city2'] = $_POST['city2'];
  $_SESSION['cache'] = 'YES';
  header("Location: http://localhost/bebras/dist/");
  die();
}


//iki siuntimo
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'https://www.distance24.org/route.json?stops='.$_POST['city1'].'|'.$_POST['city2']);

    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);



    //po siuntimo
    $buffer = curl_exec($curl_handle);






    curl_close($curl_handle);
    if (empty($buffer)) {
        throw new Exception;
    } else {
        $buffer = json_decode($buffer);

        $index = strtolower($_POST['city1']).'-'.strtolower($_POST['city2']);

        $data[$index] = ['distance'=>$buffer->distance, 'time'=>time()];
        file_put_contents('data.json', json_encode($data));



        $_SESSION['distance'] = $buffer->distance;
        $_SESSION['city1'] = $_POST['city1'];
        $_SESSION['city2'] = $_POST['city2'];
        $_SESSION['cache'] = 'NO';





        //   _dc($buffer->distance);

    //   echo '<img src="'.$buffer->stops[1]->wikipedia->image.'">';
    }
    header("Location: http://localhost/bebras/dist/");
}