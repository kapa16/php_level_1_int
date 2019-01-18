<?php
require_once(__DIR__ . '/db_connect.php');
require_once(__DIR__ . '/header.php');

if (empty($_GET['catalog_id'])) {
    require_once(__DIR__ . '/catalogs.php');
} else {
    require_once(__DIR__ . '/list.php');
}

require_once(__DIR__ . '/footer.php');

