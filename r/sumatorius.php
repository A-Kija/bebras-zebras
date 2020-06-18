

<form action="" method="get">

<input type="text" name="X" id="iksas" value="<?= $_GET['X'] ?? '' ?>">
<input type="text" name="Y" id="igrekas" value="<?php echo $_GET['Y'] ?? '' ?>">


<button type="submit" name="action" value="+">Sumator</button>
<button type="submit" name="action" value="-">Minusator</button>

</form>



<?php



// if (!empty($_GET)) {

if (isset($_GET['X']) && isset($_GET['action']) && isset($_GET['Y'])) {
    echo $_GET['X'] . $_GET['action'] . $_GET['Y'];
}
else {
    echo 'Iveskite skaiciukus';
}

if ($_GET['action'] == '+') {
    echo '<h1>'.((int)$_GET['X'] + (int)$_GET['Y']).'</h1>';
}
elseif ($_GET['action'] == '-') {
    echo '<h1>'.((int)$_GET['X'] - (int)$_GET['Y']).'</h1>';
}

_dc($_GET);




