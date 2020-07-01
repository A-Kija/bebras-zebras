<?php session_start() ?>
<form action="api.php" method="post">

FROM: <input type="text" name="city1"><br>
TO: <input type="text" name="city2"><br><br>

<button type="submit">Get Distance</button>
</form>

<?php
if (isset($_SESSION['distance'])) {
?>
<h1 style="color:red;"><?= $_SESSION['cache'] ?></h1>
<h3>Distance between <?= $_SESSION['city1'] ?> and <?= $_SESSION['city2'] ?> is: <?= $_SESSION['distance'] ?> km

<?php
session_unset();
}