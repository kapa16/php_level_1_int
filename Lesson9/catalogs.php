<?php
$query = 'SELECT * FROM catalogs ORDER BY name';
$result = $pdo->query($query);

while ($catalog = $result->fetch()) {
    echo "<p><a href='/index.php?catalog_id={$catalog['id']}'>" .
        htmlspecialchars($catalog['name']) .
        "</a></p>";
}