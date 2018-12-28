<?php
$x = readline("Введите число ");
if (!is_numeric($x)) {
    echo "Вы ввели не число";
}elseif ($x % 2 === 0){
    echo "Это число четное";
} else {
    echo "Это число нечетное";
}
