<?php require __DIR__ . '/header.php'; ?>

<!-- Задание №1 -->

<h5><b>Задание №1.</b> Таблица истинности для логических операторов &&, || и xor.</h5><br>

    <table class="table table-bordered" style="width: 330px">
        <caption>&& – логическое «И»</caption>
            <thead>
                <tr>
                    <th>&&</th>
                    <th>0</th>
                    <th>1</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>0</th>
                    <td><?php echo (int) (false && false); ?></td>
                    <td><?php echo (int) (false && true); ?></td>
                </tr>
                <tr>
                    <th>1</th>
                    <td><?php echo (int) (true && false); ?></td>
                    <td><?php echo (int) (true && true); ?></td>
                </tr>
            </tbody>
    </table>

    <table class="table table-bordered" style="width: 330px">
        <caption>|| – логическое «ИЛИ»</caption>
            <thead>
                <tr>
                    <th>| |</th>
                    <th>0</th>
                    <th>1</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>0</th>
                    <td><?php echo (int) (false || false); ?></td>
                    <td><?php echo (int) (false || true); ?></td>
                </tr>
                <tr>
                    <th>1</th>
                    <td><?php echo (int) (true || false); ?></td>
                    <td><?php echo (int) (true || true); ?></td>
                </tr>
            <tbody>
    </table>

    <table class="table table-bordered" style="width: 330px">
        <caption>XOR – логическое «ИСКЛЮЧАЮЩЕЕ ИЛИ»</caption>
            <thead>
                <tr>
                    <th>xor</th>
                    <th>0</th>
                    <th>1</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>0</th>
                    <td><?php echo (int) (false xor false); ?></td>
                    <td><?php echo (int) (false xor true); ?></td>
                </tr>
                <tr>
                    <th>1</th>
                    <td><?php echo (int) (true xor false); ?></td>
                    <td><?php echo (int) (true xor true); ?></td>
                </tr>
            </tbody>
    </table>

<!-- Задание №2 -->

<h5><b>Задание №2.</b> Вычисление корней квадратного уравнения.</h5><br>
<?php
    $a = 2;
    $b = 9;
    $c = 4;
    $d = discriminant($a, $b, $c);
?>
<div class="bg-success text-white">
        <p>a = <?php echo $a; ?><br>
        b = <?php echo $b; ?><br>
        c = <?php echo $c; ?></p>
        <p>Дискриминант D = b<sup>2</sup> - 4ac = <?php echo $d; ?></p>
</div>
<?php
    if ($d > 0) {
        $x1 = (-$b + sqrt($d)) / (2 * $a);
        $x2 = (-$b - sqrt($d)) / (2 * $a);
?>
<div class="bg-info text-white">
    <p>x<sub>1</sub> = (-b + &radic;D) / 2a = <?php echo $x1; ?></p>
    <p>x<sub>2</sub> = (-b - &radic;D) / 2a = <?php echo $x2; ?></p>
</div>
<?php
    } elseif (0 == $d) {
        $x = (-$b) / (2 * $a);
?>
    <p>x = -b / 2a = <?php echo $x; ?></p>
<?php
    } else {
?>
    <p>Корней нет</p>
<?php
    }
?>

<!-- Задание №3 -->

<h5><b>Задание №3.</b> Что возвращает оператор include, если его использовать как функцию?</h5><br>
<p>Для того, чтобы понять, что возвращает оператор include, приведем 4 примера:</p>
<ol>
    <li>При обычном подключении файла с помощью include, происходит:
    "<?php var_dump (include __DIR__ . '/include.php'); ?>" - возврат содержимого файла и "1" (true).</li>

    <li>В файле return.php объявлена переменная $a, а конструкция return, возвращает значение этой переменной.
    Проверяем:
    <?php var_dump (include __DIR__ . '/return.php'); ?></li>

    <li>В файле no_return.php объявлена переменная $b, но нет конструкции return, поэтому нам возвращается "1" (true),
    т.к. произошло успешное включение файла. Проверяем:
    <?php var_dump (include __DIR__ . '/no_return.php'); ?></li>

    <li>Если мы пытаемся подключить файл которого не существует, нам выдаст warning и false. Проверяем: <br>
    <?php var_dump (include __DIR__ . '/no_file.php'); ?></li>
</ol>

<!-- Задание №4 -->

<h5><b>Задание №4.</b> Функция, которая угадывает пол человека по имени.</h5><br>

<?php
    $male = 'Вячеслав';
    $female = 'Екатерина';
    $null = 'Робот';
    echo 'Имя: ' . $male . '.  Пол: ' . gender ($male) . '<br>' ;
    echo 'Имя: ' . $female . '. Пол: ' . gender ($female) . '<br>' ;
    echo 'Имя: ' . $null . '. Пол: ' . gender ($null);
?>

</div>
</body>
</html>