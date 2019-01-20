<?php
if (basename($_SERVER['PHP_SELF']) === basename(__FILE__)) {
    header('HTTP/1.0 403 Forbidden');
    exit('Недопустимое обращение к странице');
}

$catalogs = Models\Catalog::instance($pdo);
$menu = [];
$menu['/'] = 'Главная';
$menu['/login.php'] = 'Вход';
foreach ($catalogs->items() as $catalog) {
    $menu["/index.php?catalog_id={$catalog['id']}"] = $catalog['name'];
}

echo "<ul class='list-inline'>";
foreach ($menu as $link => $item) {
    echo "<li class='list-inline-item'><a href='{$link}'>" . htmlspecialchars($item) . "</a></li>";
}
echo "</ul>";