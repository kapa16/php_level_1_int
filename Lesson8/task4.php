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
        <input type="text" name="name" id="name"><br><br>
        <label for="surname">Фамилия: </label>
        <input type="text" name="surname" id="surname"><br><br>
        <button type="submit">Отправить</button>
    </form>
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
        $strLen = strlen($val);
        return ($strLen <= 2 || $strLen > 20 );
    }

    $name = getValue('name');
    $surname = getValue('surname');
    if (checkValue($name) || checkValue($surname)) {
        echo 'Длина имени и фамилии должны быть от 2 до 20 символов';
        die();
    }

    $userName = $surname . ', ' . $name . PHP_EOL;

    $filename = __DIR__ . '/users.txt';

    $users = [];
    if (file_exists($filename)) {
        $users = file($filename);

        if (in_array($userName, $users, true)) {
            echo 'Вы уже зарегистрированы';
        } else {
            $users[] = $userName;
            $file = fopen($filename, 'a');
            fwrite($file, $userName);
            fclose($file);
        }
    }

    print ('<table>');
    foreach ($users as $user) {
        $userInfo = explode(', ', $user);
        echo '<tr>';
        echo '<td>' . $userInfo[0] . '</td><td>' . $userInfo[1] . '</td>';
        echo '</tr>';

    }
    print ('</table>');




    ?>
</div>

</body>
</html>