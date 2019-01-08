<?php

spl_autoload_register();

$point1 = new Point(4,7,3);
$point2 = new Point(-3,6,-8);
$point3 = new Point(7,-6,-8);

echo Point::calculateDistance($point1, $point2) . "<br><br>";

echo Point::getCountPoints() . "<br><br>";

$user = new User('Pavel', 'Ivanov', 'Ivanovich');
echo $user;