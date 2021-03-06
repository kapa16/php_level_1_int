<?php
if (basename($_SERVER['PHP_SELF']) === basename(__FILE__)) {
    header('HTTP/1.0 403 Forbidden');
    exit('Недопустимое обращение к странице');
}
use Models\Catalog;
$catalogs = Catalog::instance($pdo);
$menu = [];
$menu['/'] = 'Главная';

if (isset($_SESSION['user_id'])) {
    $menu['/authorization/logout.php'] = 'Выход (' . htmlspecialchars($_SESSION['user_name']) . ')';
} else {
    $menu['/authorization/login.php'] = 'Вход';
    $menu['/authorization/registration.php'] = 'Регистрация';
}

foreach ($catalogs->items() as $catalog) {
    $menu["/index.php?catalog_id={$catalog['id']}"] = $catalog['name'];
}

echo "<ul class='list-inline'>";
foreach ($menu as $link => $item) {
    echo "<li class='list-inline-item'><a href='{$link}'>" . htmlspecialchars($item) . "</a></li>";
}
echo "</ul>";