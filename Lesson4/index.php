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

function sum(float ...$args) {
    $sum = 0;
    foreach ($args as $arg) {
        $sum += $arg;
    }
    return $sum;
}

echo "4+7+8+3+4 = " . sum(4,7,8,3,4) . "<br>";
echo "6+3+7+9+6+5+4 = " . sum(6,3,7,9,6,5,4) . "<br>";

echo "<hr>";

echo "3. Создайте функцию, которая по дате рождения пользователя возвращает его количество лет.<br><br>";

?>

    <form action="index.php" method="post">
        <label for="birthDay">
            Введите дату рожедния:
        </label>
        <input type="date" name="birthDay" id="birthDay">
        <button type="submit">Рассчитать возраст</button>
    </form>

<?php
function getWord($num, $fst, $snd, $trd) {
    if (($num % 100) >= 5 && ($num % 100) <= 20) {
        return $trd;
    }
    if ($num % 10 === 1) {
        return $fst;
    }
    if ($num % 10 >= 2 && $num % 10 <= 4) {
        return $snd;
    }
    return $trd;
}

function getAge($birthDay) {
    $diff = time() - $birthDay;
    return floor($diff / (60 * 60 * 24 * 365));
}

if (isset($_POST['birthDay'])) {
    $birthDay = strtotime($_POST['birthDay']);
    $age = getAge($birthDay);
    echo "Дата вашего рождения: " . date('d.m.Y', $birthDay) . "<br>";
    echo "Вам " . $age . getWord($age, ' год', ' года', ' лет') . "<br>";
}

echo "<hr>";

echo htmlspecialchars("4. *По желанию. Создайте массив с датами текущего месяца, выведите список дат в браузер,
выделите субботы и воскресенья жирным шрифтом (тэгом <b>...</b>).") . "<br><br>";

$fstDay = date('Y-m-01');
echo $fstDay;