<?php

class Meeting extends Event
{

    private Person $coordinator;
    private string $place;
    private bool $morning;

    public function __construct(int $day, int $month, int $year, Person $coordinator, string $place, bool $morning)
    {
        parent::__construct($day,$month,$year);
        $this->coordinator = $coordinator;
        $this->place = $place;
        $this->morning = $morning;
    }

    public function getMorning() : string
    {
        $res=$this->morning;
        if($res)
        {
            $res="Matin";
        }
        else
        {
            $res="Après-midi";
        }
        return $res;
    }
    public function getDescription() : string
    {
        $res = "$this->place - ".$this->getMorning()." - $this->coordinator";
        return $res;
    }
}