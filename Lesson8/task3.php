<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>task3</title>
</head>
<body>

<?php
$filename = __DIR__ . '/content.txt';
?>

<div class="container">
    <a href="index.php">Домой</a>
    <hr>
    <form action="#" method="post">
        <textarea name="text" id="" cols="30" rows="10"><?php
            if (file_exists($filename)) {
                print(file_get_contents($filename));
            }
            ?>
        </textarea>
        <br>
        <button type="submit">Отправить</button>
    </form>

</div>

<?php

if (isset($_POST['text'])) {
    file_put_contents($filename, $_POST['text']);
}

?>

</body>
</html>