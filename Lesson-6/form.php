<?php
    require __DIR__ . '/classes/GuestBook.php';
    $guestBook = new GuestBook(__DIR__ . '/data/message.txt');
    $guestBook->append($_POST['comment'])->save();

    header('Location: /guestbook.php');