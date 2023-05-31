<?php
declare(strict_types = 1);
require_once "Person.php";
require_once "Event.php";
require_once "Date.php";
require_once "Meeting.php";
require_once "Anniversary.php";
require_once "Calendar.php";
require_once "FilterDate.php";


$anniv = new Date(11,6,2004);

print($anniv);

$anniv2 = new Date(7,6,2004);
print($anniv2);

function decodeBoolen (bool $var) : string
{
    if ($var == true)
        $res = "Vrai\n";
    else
        $res = "Faux\n";
    return $res;
}


print(decodeBoolen($anniv->isBefore($anniv2)));
print(decodeBoolen($anniv->isAfter($anniv2)));
/*
$event = new Event(11,6,2004);

var_dump($event);
*/

$bernard = new Person("andreu", "Bernard", 58);
$meeting = new Meeting(17,8,2020,$bernard, "IUT Reims", True);

print($meeting->getMorning()."\n");

print($meeting->getDescription());

$anniv = new Anniversary(12, 9, 2004, $bernard);

print($anniv->getDescription());

print(decodeBoolen($meeting->coincide($anniv)));

$calendar = new Calendar();

print(decodeBoolen($calendar->coincides($anniv)));

$calendar->addEvent($anniv);

print(decodeBoolen($calendar->coincides($anniv)));

$date = new Date(11,1,2004);

$date2 = new Date(7,12,2004);

$filter = new FilterDate($date,$date2);

print(decodeBoolen($filter->accept($anniv)));

$calendar->applyFilter($filter);