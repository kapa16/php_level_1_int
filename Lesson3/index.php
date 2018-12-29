<?php
echo "1. Составьте массив, состоящий из названий дней недели на русском языке.<br>
Выведите каждый день недели на отдельной строке.<br><br>";

$weekDays = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
foreach ($weekDays as $weekDay) {
    echo $weekDay . "<br>";
}
echo "<br><br>";

echo "2. Создайте массив из 10 элементов, значения которых пробегают диапазон от 1 до 10.<br><br>";

$arr = [];
for ($i = 1; $i <= 10; $i++) {
    $arr[$i] = $i;
}
print_r($arr);
echo "<br><br>";

echo "3. Пусть имеется массив ['fst', 'snd', 'thd', 'fth'], выведите случайный элемент массива.<br><br>";

$arr = ['fst', 'snd', 'thd', 'fth'];
$i = rand(0, count($arr) - 1);
echo "индекс массива: " . $i . "<br>";
echo "Значение массива: " . $arr[$i];
echo "<br><br>";

echo "4. *По желанию. Пусть имеется массив ['fst', 'snd', 'thd', 'fth', 'snd', 'thd'], <br>
получите из него новый массив, содержащий только уникальные элементы ['fst', 'snd', 'thd', 'fth'].<br><br>";

echo "Вариант 1.<br>";
$arr = ['fst', 'snd', 'thd', 'fth', 'snd', 'thd'];
$newArr = [];
foreach ($arr as $arrVal) {
    $newArr[$arrVal] = $arrVal;
}
print_r($newArr);
echo "<br><br>Вариант 2.<br>";
$result = array_unique($arr);
print_r($result);
echo "<br><br>";


echo "5. *По желанию. Создайте массив со случайным количеством элементов от 5 до 10,<br>
элементы которого принимают случайное значение от 0 до 100.<br>
Отсортируйте элементы массива в порядке от наименьших к наибольшим значениям.<br><br>";

$countElements = rand(5, 10);
$result = [];
for ($i = 0; $i < $countElements; $i++) {
    $result[$i] = rand(0, 100);
}
sort($result, SORT_NUMERIC);
print_r($result);