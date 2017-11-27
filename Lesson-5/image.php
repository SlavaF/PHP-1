<?php
    session_start();
    if (isset($_SESSION['name'])) {
        if (isset($_FILES['image'])) {
            if (0 == $_FILES['image']['error']) {
                if ($_FILES['image']['type'] == 'image/jpeg' ||
                    $_FILES['image']['type'] == 'image/png') {
                        $file = $_FILES['image']['name'];
                        move_uploaded_file(
                            $_FILES['image']['tmp_name'],
                            __DIR__ . '/img/' . $file);
                        $name = $_SESSION['login'];
                        $date = date(DATE_RFC822);
                        $log = __DIR__ . '/log/image.log';
                        $text = $name . ' загрузил изображение: ' . $file . ', дата и время: ' . $date . PHP_EOL;
                        file_put_contents($log, $text, FILE_APPEND);
                ?>
                <p>Ваш файл: <?php echo $file ?> загружен, спасибо.</p>
                <p><a href="/index.php">Главная страница</a></p>
        <?php   } else { ?>
                    <p>Загрузка файлов только формата jpeg или png.</p>
                    <p><a href="/index.php">Главная страница</a></p>
        <?php   }
            } else { ?>
                <p>Вы не выбрали файл или ошибка загрузки</p>
                <p><a href="/index.php">Главная страница</a></p>
        <?php   }
        }
    } else { ?>
        <p>Загрузка изображений, только для зарегистрированных пользователей</p>
        <p><a href="/login.php">Перейти на страницу авторизации</a></p>
<?php } ?>