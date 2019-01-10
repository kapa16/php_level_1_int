<?php
//1. Средствами расширения PDO создайте таблицу months, предназначенную для хранения названий месяцев.
// Заполните ее. Составьте запрос, который извлекает случайную запись из таблицы months.
$months = [
    'январь',
    'февраль',
    'март',
    'апрель',
    'май',
    'июнь',
    'июль',
    'август',
    'сентябрь',
    'октябрь',
    'новябрь',
    'декабрь',
];

$dsn = 'mysql:host=localhost;dbname=test';
$pdo = new PDO($dsn, 'root', '',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

$sql = "CREATE TABLE IF NOT EXISTS months (
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
month VARCHAR(20)
)";
if ($pdo->exec($sql)) {
    echo 'Таблица months успешно создана' . PHP_EOL;
};

//Очистка таблицы для повторных запусков
$sql = "TRUNCATE TABLE months";
if ($pdo->exec($sql)) {
    echo 'Таблица months очищена' . PHP_EOL;
};

$queries = [];
foreach ($months as $month) {
    $queries[] = "(NULL, '$month')";
}
$sql = "INSERT INTO months VALUES " . PHP_EOL .
    implode(',' . PHP_EOL, $queries). PHP_EOL;

if ($pdo->exec($sql)) {
    echo 'Данные в таблице months заполнены' . PHP_EOL;
}

$randId = rand(1, 12);
$sql = "SELECT * FROM months WHERE id=$randId";

$results = $pdo->query($sql);
$randMonth = $results->fetch(PDO::FETCH_ASSOC);

echo 'Случайный месяц: ' . $randMonth['month'];

//2. При помощи компонента phinx создайте таблицу categories для хранения разделов интернет-магазина.
// Вставьте в нее три раздела: «Процессоры», «Материнские платы» и «Видеокарты».

//3. *По желанию. При помощи компонента phinx создайте таблицу products для хранения товарных позиций интернет-магазина.
// Каждая запись таблицы должна содержать имя, описание, цену.
// Таблица products должна быть связана с таблицей categories из предыдущего задания.