<?php
$constName = 'load';
if (!defined($constName)) {
    require "$constName.php";
} else {
    echo "Файл $constName уже был загружен\n";
}

//.......... какой-то код

$constName = 'load';
if (!defined($constName)) {
    require "$constName.php";
} else {
    echo "Файл $constName уже был загружен\n";
}