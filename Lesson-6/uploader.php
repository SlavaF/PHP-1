<?php
    require __DIR__ . '/classes/Uploader.php';
    $uploader = new Uploader('loading');
        if ($uploader->upload()) { ?>
                    <p>Файл <?php echo $_FILES[$uploader->form]['name']; ?> загружен, спасибо.</p>
                    <p><a href="/upload.php">Назад</a></p>
        <?php   } else { ?>
                    <p>Ошибка загрузки файла.</p>
                    <p><a href="/upload.php">Назад</a></p>
        <?php     }
