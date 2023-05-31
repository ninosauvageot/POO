<?php
require_once "Event.php";
class Date
{
    private int $day;
    private int $month;
    private int $year;

    public function __construct (int $day, int $month, int $year)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public function __toString(): string
    {
        $res = "$this->day/$this->month/$this->year\n";
        return $res;
    }
    public function isBefore (Date $date) : bool{
        $avant = $this->year < $date->year;
        if(!$avant)
            if($this->year == $date->year){
                $avant = $this->month < $date->month;
                if(!$avant)
                    if($this->month == $date->month)
                        $avant = $this->day < $date->day;
            }
        return $avant;
    }
    public function isAfter (Date $date) : bool{
        return ! ($this == $date || $this->isBefore($date));
    }


}