<?php

class User
{
    public $name = '';
    public $lastName = '';
    public $patronymic = '';

    public  function __construct($lastName, $name, $patronymic = '') {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->patronymic = $patronymic;
    }

    public function __toString()
    {
        return $this->lastName . ' ' . $this->name . ' ' . $this->patronymic;
    }
}