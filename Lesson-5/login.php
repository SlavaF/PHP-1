<?php
session_start();
require __DIR__ . '/functions.php';
    if (isset($_POST['login']) && isset($_POST['password'])
        && checkPassword($_POST['login'], $_POST['password'])) {
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['name'] = getCurrentUser();

    }
    if (getCurrentUser() !== null) {
        header('Location: /index.php');
    }
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" media="all">
    <title>Форма входа</title>
</head>
<body>
<div class="container">
    <h5>Авторизация</h5><br>
    <form action="/login.php" method="post">
        <p>Логин: <input type="text" name="login"></p>
        <p>Пароль: <input type="password" name="password"></p>
        <p><input type="submit" name="submit" value="Войти"></p>
    </form>
<?php
    if (isset($_POST['submit']) && !checkPassword($_POST['login'], $_POST['password'])) { ?>
        <p><b>Неправильный логин или пароль</b></p>
<?php } ?>
    <p>Для проверки работы скрипта:</p>
    <p>Логин: Admin</p>
    <p>Пароль: password</p>
</div>
</body>
</html>
