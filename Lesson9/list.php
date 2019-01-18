<?php
$catalog_id = intval($_GET['catalog_id']);

$query = 'SELECT * FROM products WHERE catalog_id = :catalog_id';
$result = $pdo->prepare($query);
$result->execute(['catalog_id' => $catalog_id]);

while ($product = $result->fetch()) {
    echo "<p>Имя: " . htmlspecialchars($product['name']) . "</p>";
    echo "<p>Описание: " . htmlspecialchars($product['description']) . "</p>";
    echo "<p>Цена: " . htmlspecialchars($product['price']) . "</p>";
}