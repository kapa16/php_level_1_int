<?php
session_start();
spl_autoload_register();

require_once(__DIR__ . '/db_connect.php');
require_once(__DIR__ . '/pagecontent/header.php');

require(__DIR__ . '/pagecontent/menu.php');

if (empty($_GET['catalog_id'])) {
    require_once(__DIR__ . '/pagecontent/catalogs.php');
} else {
    require_once(__DIR__ . '/pagecontent/list.php');
}

require_once(__DIR__ . '/pagecontent/footer.php');

