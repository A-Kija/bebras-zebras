<?php

if (isset($_POST['button']) && !isset($_POST['briedis'])) {
    $result = 'Tai pasirink kažką';
}
elseif (isset($_POST['briedis'])) {
    if ($_POST['briedis'] == 3) {
        $result = 'Teisingai';
    }
    else {
        $result = 'Blogai';
    }
}
else {
    $result = 'Pradėkite testą';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Briedžių Testas</title>
    <style>
label {
    display: inline-block;
    width: 100px;
}
    </style>
</head>
<body>
    <h1><?= $result ?></h1>
    <div style="display: flex;">
    <img style="width: 300px;" src="https://static.etaplius.lt/media/etaplius_gallery_image/59412441b33ac/5eccb84dd46ad.jpg">
        <form action="" method="post">
        <div style="margin:30px;">Atspėk kas čia<br><br>
        <label for="_1">Kalakutas</label><input type="radio" name="briedis" id="_1" value="1"><br>
        <label for="_2">Zuikis</label><input type="radio" name="briedis" id="_2" value="2"><br>
        <label for="_3">Briedis</label><input type="radio" name="briedis" id="_3" value="3"><br>
        <label for="_4">Vilkas</label><input type="radio" name="briedis" id="_4" value="4"><br><br>
        <button type="submit" name="button" value="pressed">Spėju!</button>
        </div>
        </form>
    </div>
</body>
</html>