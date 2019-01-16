<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>

<form action="#" method="post">
    <label> Введите координаты 1-ой точки: X
        <input type="number" name="x1">
        Y
        <input type="number" name="y1">
    </label>
    <br>
    <label> Введите координаты 2-ой точки: X
        <input type="number" name="x2">
        Y
        <input type="number" name="y2">
    </label>
    <br>
    <button type="submit">Рассчитать</button>
    <br>
</form>

<?php

$x1 = (float) $_POST['x1'];
$x2 = (float) $_POST['x2'];
$y1 = (float) $_POST['y1'];
$y2 = (float) $_POST['y2'];


echo "Расстояние между точками: " . sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
?>

</body>
</html>
