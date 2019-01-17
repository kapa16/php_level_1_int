<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>task2</title>
</head>
<body>
<div class="container">
    <a href="index.php">Домой</a>
    <hr>

    <form action="#" method="post">
        <label>
            Введите количество товаров:
            <input type="text" name="quantity" id="quantity">
        </label>
        <br>
        <label>
            Введите цену товара:
            <input type="text" name="price" id="price">
        </label>
        <br>
        <br>
        <button type="submit">Рассчитать сумму корзины</button>
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

    $quantity = getValue('quantity');
    $price = getValue('price');

    echo 'Сумма = ' . ($quantity * $price);


    ?>
</div>
</body>
</html>