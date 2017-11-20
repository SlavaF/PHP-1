<?php

require __DIR__ . '/functions.php';

$arr = guestbook();
$arr[] = $_POST['comment'];

file_put_contents(__DIR__ . '/data/message.txt', implode("\n", $arr));

header('Location: /index.php');
