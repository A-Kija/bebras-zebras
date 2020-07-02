<?php

$slaptas = 'sdiofhsruxkljvisdfjsdijdsio8w75cg87';
$csrf = md5($_SERVER['HTTP_USER_AGENT'].$slaptas);

?>


<form action="" method="post">
<input type="hidden" name="csrf" value="<?= $csrf ?>">
<input type="submit" value="Spaust">
</form>


<?php

if (!empty($_POST)) {
    if ($csrf != $_POST['csrf']) {
        echo 'Blogai';
    } else {
        echo 'Gerai';
    }
}