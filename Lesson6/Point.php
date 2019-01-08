<?php

class Point
{
    private $coords = [];
    private static $countPoints = 0;

    public function __construct($x = 0, $y = 0, $z = 0)
    {
        $this->coords = ['x' => $x, 'y' => $y, 'z' => $z];
        self::$countPoints++;
    }

    public function __get($key)
    {
        if (array_key_exists($key, $this->coords)){
            return $this->coords[$key];
        } else {
            return null;
        }
    }

    public function __set($key, $value)
    {
        $this->coords[$key] = $value;
    }

    public static function calculateDistance($point1, $point2) {
        return 'Растояние между точками: ' . sqrt(
            pow($point2->x - $point1->x, 2) +
            pow($point2->y - $point1->y, 2) +
            pow($point2->z - $point1->z, 2)
        );
    }

    public function __destruct()
    {
        self::$countPoints--;
    }

    public static function getCountPoints()
    {
        return 'Количество созданных точек: ' . self::$countPoints;
    }
}