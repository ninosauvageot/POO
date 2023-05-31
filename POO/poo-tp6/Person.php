<?php

class Person
{
    private string $lastName;
    private string $firstName;
    private int $age;

    public function __construct (string $lastName = "Doe", string $firstName = "John", int $age = 0)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->age = $age;
    }

    public function getLastName() : string
    {
        return $this->lastName;
    }
    public function getFirstName() : string
    {
        return $this->firstName;
    }
    public function getAge() : string
    {
        return $this->age;
    }

    public function __toString() : string
    {
        $res = "{$this->firstName} {$this->lastName} ({$this->age})\n";
        return $res;
    }


}

