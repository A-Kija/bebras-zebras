<form action="" method="post" enctype="multipart/form-data">
Cat Photo: <input type="file" name="cat_photo"><br><br>
Cat Name: <input type="text" name="cat_name"><br><br>
<button type="submit">Add!!!</button>
</form>


<?php

// _dc($_FILES);
$target_file = basename($_FILES["cat_photo"]["name"]);
move_uploaded_file($_FILES["cat_photo"]["tmp_name"], $target_file);

