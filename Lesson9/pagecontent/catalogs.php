<?php
if (basename($_SERVER['PHP_SELF']) === basename(__FILE__)) {
    header('HTTP/1.0 403 Forbidden');
    exit('Недопустимое обращение к странице');
}

$catalogs = Models\Catalog::instance($pdo);

foreach ($catalogs->items() as $catalog) {
    echo "<h2><small><a href='/index.php?catalog_id={$catalog['id']}'>" .
        htmlspecialchars($catalog['name']) .
        "</a></small></h2>";
}
