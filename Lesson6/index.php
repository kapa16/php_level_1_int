<?php

spl_autoload_register();

echo $point1 = new Point(4,7,3);
echo "<br>";
echo $point2 = new Point(-3,6,-8);
echo "<br>";
echo $point3 = new Point(7,-6,-8);
echo "<br>";

echo Point::calculateDistance($point1, $point2) . "<br><br>";

echo Point::getCountPoints() . "<br><br>";

$user = new User('Иванов', 'Иван', 'Иванович');
echo $user;