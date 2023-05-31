<?php
require_once "FilterDate.php";
class Calendar
{
    private array $content;


    public function __construct(array $content=[])
    {
        $this->content=$content;
    }

    public function coincides(Event $event)
    {
        $res = False;
        if(in_array($event,$this->content))
        {
            $res = True;
        }
        return $res;
    }

    public function addEvent(Event $event) : bool
    {
        $res = false;
        if (!$this->coincides($event))
        {
            $this->content[] = $event;
            $res = true;
        }
        return $res;
    }

    public function applyFilter(Filter $filter): array
    {
        $result=[];
        foreach ($this->content as $value)
        {
            if($filter->accept($value))
            {
                $result[] = $value;
            }
        }
        foreach ($result as $value)
        {
            print($value->getDescription());
        }
        return $result;
    }


}