<?php

echo 'Im GET';


_dc($_GET);
_dc($_POST);

_dc($_GET['rrr'] ?? null);

if(!empty($_POST)) {
    
}

?>

<form action="?getoparametras=ggg&rrrt=uuu" method="post">

Page: <input type="text" name="page">
<br>
orderBy: <input type="text" name="orderBy">
<br>
<button type="submit">Varyk!</button>

<input type="hidden" name="ilgis" value="3metrai">
</form>