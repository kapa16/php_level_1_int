<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Интернет-магазин</title>
</head>
<body>
<h1>Интернет-магазин</h1>
<?php
require_once(__DIR__ . '/db_connect.php');
if(empty($_GET['catalog_id'])) {
    require_once(__DIR__ . '/catalogs.php');
} else {
    require_once(__DIR__ . '/list.php');
}
?>


</body>
</html>