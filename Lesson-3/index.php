<?php require __DIR__ . '/header.php'; ?>

<!-- Задание №1 -->

<h5><b>Задание №1.</b> Программа-калькулятор</h5><br>

<?php
    $action = ['+', '-', '*', '/'];
    if (isset($_GET['first']) && isset($_GET['second'])) {
        $first = $_GET['first'];
        $second = $_GET['second'];
    } else {
        $first = null;
        $second = null;
    }
    if (isset($_GET['symbol']) && is_numeric($_GET['first']) && is_numeric($_GET['second'])) {
    $symbol = $_GET['symbol'];
        switch ($symbol) {
            case '+':
                $result = $first + $second;
                break;
            case '-':
                $result = $first - $second;
                break;
            case '*':
                $result = $first * $second;
                break;
            case '/':
                if (0 == $second) {
                    $result = 'На ноль делить нельзя';
                } else {
                    $result = $first / $second;
                }
                break;
            default:
                $result = null;
        }
    } else {
        $symbol = null;
        $result = null;
    }
?>
<form action="/index.php" method="get">
    <input type="number" name="first" placeholder="Первое число" value="<?php echo $first; ?>">
        <select name="symbol">
            <?php foreach ($action as $value) { ?>
        <option value="<?php echo $value; ?>"><?php echo $value; } ?></option>
        </select>
    <input type="number" name="second" placeholder="Второе число" value="<?php echo $second; ?>">
    <input type="submit" name="result" value="=">
    <b><?php echo $result; ?></b>
</form><br>

<!-- Задание №2 -->

<?php require __DIR__ . '/array.php'; ?>

<h5><b>Задание №2.</b> Фотогалерея</h5><br>

<?php foreach ($img as $key => $value) { ?>
    <a href="/image.php?id=<?php echo $key; ?>"><img src="/img/<?php echo $value; ?>"></a>
<?php } ?>

</div>
</body>
</html>