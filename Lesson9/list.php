<?php
if (basename($_SERVER['PHP_SELF']) === basename(__FILE__)) {
    header('HTTP/1.0 403 Forbidden');
    exit('Недопустимое обращение к странице');
}

$catalog_id = intval($_GET['catalog_id']);

$query = 'SELECT * FROM products WHERE catalog_id = :catalog_id';
$result = $pdo->prepare($query);
$result->execute(['catalog_id' => $catalog_id]);

while ($product = $result->fetch()) {
    echo "<p>Имя: " . htmlspecialchars($product['name']) . "</p>";
    echo "<p>Описание: " . htmlspecialchars($product['description']) . "</p>";
    echo "<p>Цена: " . htmlspecialchars($product['price']) . "</p>";
}