<?php



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

// sleep(5);

    $rawData = file_get_contents("php://input");
    $rawData = json_decode($rawData, 1);

    if ($rawData['answer'] == 111) {
        $response = 'Pasirink kazka';
    }

    else {
        $response = ($rawData['answer'] == 3) ? '<span style="color:green;">Teisingai</span>' : 'Blogai';
    }
    

    $response = json_encode(['atsakymas' =>$response]);

    echo $response;

die();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js" defer></script>
    <script src="http://localhost/_3/r/briedis.js" defer></script>
    <title>Briedžių Testas</title>
    <style>
label {
    display: inline-block;
    width: 100px;
}
    </style>
</head>
<body>
    <h1 id="top">Pradėkite testą</h1>
    <div style="display: flex;">
    <img style="width: 300px;" src="https://static.etaplius.lt/media/etaplius_gallery_image/59412441b33ac/5eccb84dd46ad.jpg">
        <form action="" method="post">
        <div style="margin:30px;">Atspėk kas čia<br><br>
        <label for="_1">Kalakutas</label><input type="radio" name="briedis" id="_1" value="1"><br>
        <label for="_2">Zuikis</label><input type="radio" name="briedis" id="_2" value="2"><br>
        <label for="_3">Briedis</label><input type="radio" name="briedis" id="_3" value="3"><br>
        <label for="_4">Vilkas</label><input type="radio" name="briedis" id="_4" value="4"><br><br>
        <button type="button" name="button" value="pressed" id="button">Spėju!</button>
        </div>
        </form>
    </div>
</body>
</html>