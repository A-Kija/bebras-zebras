<?php
require __DIR__ . '/bootstrap.php';

if (!isset($_SESSION['login']) || $_SESSION['login'] != 1) {
    header('Location: http://localhost/_3/login/login.php'); // GET
    die();
}
?>

<a href="http://localhost/_3/login/login.php?logout">Atsikabinti</a><br>
<a href="http://localhost/_3/login/add-user.php">Naujas</a><br>
<?php
echo 'slaptas<br>';