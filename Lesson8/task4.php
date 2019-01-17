<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Task4</title>
</head>
<body>

<div class="container">
    <a href="index.php">Домой</a>
    <hr>
    <form action="#" method="post">
        <label for="name">Имя: </label>
        <input type="text" name="name" id="name"><br>
        <label for="surname">Фамилия: </label>
        <input type="text" name="surname" id="surname"><br>
        <button type="submit">Отправить</button>
    </form>
</div>
<?php
function getValue($index)
{
    if (isset($_POST[$index])) {
        return $_POST[$index];
    } else {
        return '';
    }
}

function checkValue($val) {
    $strLen = mb_strlen($val);
    return ($strLen < 2 || $strLen > 20 );
}

$name = getValue('name');

?>
</body>
</html>