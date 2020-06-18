<?php
require __DIR__ . '/bootstrap.php';

if (!empty($_POST)) {

    foreach ($data as $user) {
        
        if ($user['name'] === $_POST['user'] &&
        $user['pass'] === md5($_POST['password'])) {
            $_SESSION['login'] = 1;
            header('Location: http://localhost/_3/login/locked.php'); // GET
            die();
        }
    }

}

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: http://localhost/_3/login/login.php'); // GET
    die();
}

?>



<form action="http://localhost/_3/login/login.php" method="post">
<input type="text" name="user"> User Name<br>
<input type="password" name="password"> User Password<br>
<button type="submit">Jungtis</button>
</form>
