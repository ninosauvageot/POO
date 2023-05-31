<?php
require_once "Person.php";

#Question 11 et 14.
$jacques = new Person("Durand","Jacques");
#$jacques -> print();
var_dump($jacques);

#Question 15.
$inconnu = new Person;
$jules = new Person("Durand");
var_dump($inconnu);
var_dump($jules);

#Question 16.
$nomInconnu = $inconnu->getLastName();
echo "$nomInconnu\n";

#Question 17.
$nomInconnu = $inconnu->getFirstName();
echo "$nomInconnu\n";
$nomInconnu = $inconnu->getAge();
echo "$nomInconnu\n";

#Question 18.
function copie(Person $objet): Person
{
    $res = new Person($objet -> getLastName(), $objet -> getFirstName(), $objet -> getAge() );
    return $res;
}
$inconnu2 = copie($inconnu);
$nomInconnu = $inconnu2->getFirstName();
echo "$nomInconnu\n";

#Question 19.
echo "{$jacques->getAge()}\n";
$jacques->setAge(26);
echo "{$jacques->getAge()}\n";

#Question 20.
echo "{$jacques->getFirstName()}\n";
$jacques->setFirstName("Joe");
echo "{$jacques->getFirstName()}\n";
echo "{$jacques->getLastName()}\n";
$jacques->setLastName("Sauve");
echo "{$jacques->getLastName()}\n";

#Question 21.
echo "$jacques\n";