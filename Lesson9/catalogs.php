<?php
if (basename($_SERVER['PHP_SELF']) === basename(__FILE__)) {
    header('HTTP/1.0 403 Forbidden');
    exit('Недопустимое обращение к странице');
}

$query = 'SELECT * FROM catalogs ORDER BY name';
$result = $pdo->query($query);

while ($catalog = $result->fetch()) {
    echo "<p><a href='/index.php?catalog_id={$catalog['id']}'>" .
        htmlspecialchars($catalog['name']) .
        "</a></p>";
}