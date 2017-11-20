<?php

    if (isset($_FILES['loading'])) {
        if (0 == $_FILES['loading']['error']) {
            if ($_FILES['loading']['type'] == 'image/jpeg' ||
                $_FILES['loading']['type'] == 'image/png') {
                    $name = $_FILES['loading']['name'];
                    move_uploaded_file(
                        $_FILES['loading']['tmp_name'],
                        __DIR__ . '/img/' . $name);
                        ?>
                        <p>Ваш файл: <?php echo $name ?> загружен, спасибо.</p>
            <?php
            } else { ?>
                <p>Загрузка файлов только формата jpeg или png.</p>
            <?php
            }
        } else { ?>
            <p>Вы не выбрали файл или ошибка загрузки</p>
        <?php
        }
    } ?>