<?php

class User
{
    public  function __construct($name, $lastName, $patronymic) {
        $this->$name = $name;
        $this->$lastName = $lastName;
        $this->$patronymic = $patronymic;
    }

    public function __toString()
    {
        return $this->lastName . $this->lastname;
    }
}