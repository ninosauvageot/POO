<?php
require_once "Person.php";
class Anniversary extends Event
{
    private Person $concerned;

    public function __construct(int $day, int $month, int $year, Person $concerned)
    {
        parent::__construct($day,$month,$year);
        $this->concerned=$concerned;

    }

    public function getDescription(): string
    {
        return "Anniversaire - $this->concerned";
    }
}