<?php
require_once "Date.php";

abstract class Event
{

    private Date $date;
    public function __construct(int $day, int $month, int $year)
    {
        $this->date = new Date($day,$month,$year);
    }

    public function getDate() : Date
    {
            return $this -> date;
    }



    public abstract function getDescription() : string;

    public function __toString(): string
    {
        $res = "[ $this->date - $this->getDescription() ]\n";
        return $res;
    }

    public function coincide(Event $event): bool
    {
        $res=False;
        if(!$this->date->isBefore($event->date) && !$this->date->isAfter($event->date))
        {
            $res=True;
        }
        return $res;
    }






}