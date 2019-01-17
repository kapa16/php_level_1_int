<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Task2</title>
</head>
<body>
<div class="container">
    <a href="index.php">Домой</a>
    <br>
    <hr>

    <form action="#" method="post">
        <label> Введите координаты 1-ой точки: X
            <input type="number" name="x1" step="0.01">
            Y
            <input type="number" name="y1" step="0.01">
        </label>
        <br>
        <label> Введите координаты 2-ой точки: X
            <input type="number" name="x2" step="0.01">
            Y
            <input type="number" name="y2" step="0.01">
        </label>
        <br>
        <button type="submit">Рассчитать</button>
        <br>
    </form>

    <?php
    function getValue($index)
    {
        if (isset($_POST[$index])) {
            return (float)$_POST[$index];
        } else {
            return 0;
        }
    }

    $x1 = getValue('x1');
    $x2 = getValue('x2');
    $y1 = getValue('y1');
    $y2 = getValue('y2');


    echo "Расстояние между точками: " . sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
    ?>
</div>
</body>
</html>
