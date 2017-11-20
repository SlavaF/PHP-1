<?php require __DIR__ . '/header.php'; ?>
<?php require __DIR__ . '/functions.php'; ?>

<!-- Задание №1 -->

<h5><b>Задание №1.</b> Гостевая книга</h5><br>
<p><b>Ваши комментарии:</b></p>
    <?php
        foreach (guestbook() as $value) {
    ?>
        <p><?php echo $value; ?></p><hr>
    <?php } ?>

<form action="/form.php" method="post">
    <textarea rows="5" cols="40" name="comment" placeholder="Оставьте свой комментарий"></textarea><br>
    <input type="submit">
</form><br>

<!-- Задание №2 и №3 -->

<h5><b>Задание №2 и №3.</b> Загрузка файла от пользователя</h5><br>

    <form action="/index.php" method="post" enctype="multipart/form-data">
        <input type="file" name="loading">
        <input type="submit" value="Загрузить">
    </form><br>

<?php require __DIR__ . '/download.php'; ?>

</div>
</body>
</html>