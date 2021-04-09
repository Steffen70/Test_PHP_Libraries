<?php

class User
{
    private $name;
    private $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function toString(): string
    {
        return $this->name . " is " . $this->age . " years old.\n";
    }
}
