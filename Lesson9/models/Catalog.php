<?php
/**
 * Created by PhpStorm.
 * User: kapa
 * Date: 19.01.2019
 * Time: 20:23
 */

namespace Models;


class Catalog
{
    private static $_object = null;
    private $catalogs = [];

    public static function instance($pdo)
    {
        if (is_null(self::$_object)){
            self::$_object = new self($pdo);
        }
        return self::$_object;
    }

    public function items()
    {
        return $this->catalogs;
    }

    private function __construct($pdo)
    {
        $query = 'SELECT * FROM catalogs ORDER BY name';
        $result = $pdo->query($query);

        while ($this->catalogs[] = $result->fetch());
    }

    private function __clone() {}
}