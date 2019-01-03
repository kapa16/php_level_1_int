<?php

echo "1. Создайте функцию is_odd(), которая принимает в качестве аргумента целое число и возвращает true, <br>
в случае если число нечетное и false — в противном случае.<br><br>";
function is_odd(int $num) {
    return $num % 2 !== 0;
}

for ($i = 1; $i <= 10; $i++) {
    if (is_odd($i)) {
        echo "Число $i нечетное <br>";
    } else {
        echo "Число $i четное <br>";
    }
}
echo "<hr>";

echo "2. Создайте функцию sum(), которая принимает любое количество числовых аргументов и возвращает их сумму.<br><br>";

function sum(...$args) {
    $sum = 0;
    foreach ($args as $arg) {
        $sum += $arg;
    }
    return $sum;
}

echo sum(4,7,8,3,4);