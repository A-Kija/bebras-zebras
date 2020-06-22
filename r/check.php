<?php

$checkboxes = rand(3, 10);
$letters = range('A', 'J');

?>

<form action="" method="post">
<?php foreach (range(1, $checkboxes) as $val) :?>
    <input type="checkbox" name="<?= $letters[$val - 1] ?>">
    <label><?= $letters[$val - 1] ?></label>
<?php endforeach ?>
<input type="hidden" name="all" value="<?= $checkboxes ?>">
<button type="submit">YES</button>
</form>


<?php

if (!empty($_POST)) {

    $count = count($_POST) - 1;

    _dc($_POST);
}

?>

<h1><?= $count ?? '' ?> all <?= $_POST['all'] ?? 0 ?></h1>