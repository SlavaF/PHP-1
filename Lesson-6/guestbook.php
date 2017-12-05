<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" media="all">
    <title>Домашняя работа №6</title>
</head>
<body>
<div class="container">
    <h5><b>Задание №1.</b> Класс GuestBook</h5><br>
    <p><b>Ваши комментарии:</b></p>

<?php
    require __DIR__ . '/classes/GuestBook.php';
    $guestBook = new GuestBook(__DIR__ . '/data/message.txt');
        foreach ($guestBook->getData() as $value) { ?>
        <p> <?php echo $value; ?> </p><hr>
<?php   } ?>

<form action="/form.php" method="post">
    <textarea rows="5" cols="40" name="comment" placeholder="Оставьте свой комментарий"></textarea><br>
    <input type="submit">
</form><br>

</div>
</body>
</html>
