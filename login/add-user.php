<?php
require __DIR__ . '/bootstrap.php';

if (!isset($_SESSION['login']) || $_SESSION['login'] != 1) {
    header('Location: http://localhost/_3/login/login.php'); // GET
    die();
}
if (!empty($_POST)) {

    foreach ($data as $user) {
        if ($user['name'] == $_POST['user']) {
            $_SESSION['note'] = 'Useris '.$_POST['user'] .' jau yra';
            header('Location: http://localhost/_3/login/add-user.php'); // GET
            die();
        }
    }

    $data[] = ['name' => $_POST['user'], 'pass' => md5($_POST['password'])];
    file_put_contents(__DIR__ .'/data.json', json_encode($data));
    $_SESSION['note'] = 'Valio, pridėtas '.$_POST['user'];
    header('Location: http://localhost/_3/login/add-user.php'); // GET
    die();
}

?>

<?php if(isset($_SESSION['note'])) {
    echo $_SESSION['note'];
    unset($_SESSION['note']);
}
?>


<form action="http://localhost/_3/login/add-user.php" method="post">
<input type="text" name="user"> New User Name<br>
<input type="text" name="password">New User Password<br>
<button type="submit">Add</button>
</form>