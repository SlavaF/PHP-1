<?php
    require __DIR__ . ('/header.php');
    require __DIR__ . ('/array.php');
    $id = $img[$_GET['id']];
?>

<img src="/img/<?php echo $id; ?>" class="rounded-circle"><br>
<a href="/index.php">Назад</a>

</div>
</body>
</html>