<?php
session_start();
require __DIR__ . '/functions.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" media="all">
    <style>img { padding: 20px; width: 300px; height: 170px;}</style>
    <title>Главная страница</title>
</head>
<body>
<div class="container">
<?php
    if (!empty($_SESSION['name'])) { ?>
        <p>Здравствуйте,  <?php echo $_SESSION['name']; ?> </p>
<?php } else { ?>
    <p>Здравствуйте, Гость.</p>
    <p><a href="/login.php">Перейти на страницу авторизации</a></p>
<?php } ?>
    <h4>Фотогалерея</h4>
<?php
    $dir = scandir(__DIR__ . '/img');
    $arr = array_slice($dir, 2);
    foreach ($arr as $value) { ?>
        <img src="/img/<?php echo $value ?>">
<?php } ?>
    <form action="/image.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" name="submit" value="Загрузить">
    </form>
</div>
</body>
</html>