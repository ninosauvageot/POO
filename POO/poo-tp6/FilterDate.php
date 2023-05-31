<?php

require_once 'Filter.php';
class FilterDate implements Filter
{
    private Date $start;
    private Date $end;


    public function __construct(Date $start, Date $end)
    {
        $this->start=$start;
        $this->end=$end;
    }

    public function accept(Event $event): bool
    {
        $res=False;
        if($this->start->isBefore($event->getDate()) && $this->end->isAfter($event->getDate()))
        {
            $res=True;
        }
        return $res;
    }

}