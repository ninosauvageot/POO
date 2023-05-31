<?php
#Nino SAUVAGEOT TD1A
declare(strict_types = 1);
require_once "Student.php";

#Question 1
/*
$inconnu = new Student;
var_dump($inconnu);
*/
#Question 2
$louis = new Student("Dupont","Louis");
var_dump($louis);

#Question 3
$notes = array(9.78 , 18 , 12.5 , 10 , 16.25);
$kevin = new Student("Laplace", "Kevin", $notes);
var_dump($kevin);

#Question 5
echo $kevin."\n";

#Question 6
echo $kevin."\n";
$notes[0] = 0;
echo $kevin."\n";

#Question 7
echo $kevin->getLastName();
$kevin->setLastName("Tambour");
echo "\n".$kevin->getLastName()."\n";

#Question 8
try //pour 5ieme indice il renverra une erreur
{
    echo $kevin->getMark(5)."\n";
}
catch (OutOfRangeException $e)
{
//gestion de l’exception, par exemple :
    echo $e->getMessage()."\n" ;
}

try // pour 4ieme indice il renverra la réponse 16.25
{
    echo $kevin->getMark(4)."\n";
}
catch (OutOfRangeException $e)
{
//gestion de l’exception, par exemple :
    echo $e->getMessage()."\n" ;
}

#Question 9
try //pour 5ieme indice il renverra une erreur
{
    $kevin->setMark(17,5)."\n";
    echo $kevin->getMark(5)."\n";
}
catch (OutOfRangeException $e)
{
//gestion de l’exception, par exemple :
    echo $e->getMessage()."\n" ;
}
try // pour 4ieme indice il modifira la valeur de 16.25 par 17
{
    $kevin->setMark(17,4);
    echo $kevin->getMark(4)."\n";
}
catch (OutOfRangeException $e)
{
//gestion de l’exception, par exemple :
    echo $e->getMessage()."\n" ;
}
#Question 10
function decodeBoolen (bool $var) : string
{
    if ($var == true)
        $res = "Vrai";
    else
        $res = "Faux";
    return $res;
}
$kevin2 = clone $kevin;
echo decodeBoolen($kevin2->isEqual($kevin))."\n";
$joe = new Student("Bienjoue", "Joe", [10, 10, 10, 10, 10, 11]);
echo decodeBoolen($joe->isEqual($kevin))."\n";

/*
$a=0.1;
$b=10-9.9;
echo "$a $b\n";
if (abs($a==$b))
{
    echo "ok";
}
else
{
    echo "non";
}
*/

#Question 11
echo $kevin->getMarksCount()."\n";

#Question 12
echo $kevin->getMean()."\n";

#Question 13
echo $kevin->getMinimum()."\n";

#Question 14
echo $kevin->getMaximumIndex()."\n";

#Question 15
echo decodeBoolen($kevin->contains(16.25))."\n";
echo decodeBoolen($kevin->contains(1))."\n";

#Question 16
echo $joe->getOccurenceCount(10)."\n";

#Question 17
try
{
    echo $joe->getFirstOccurenceIndex(10)."\n";
    echo $joe->getFirstOccurenceIndex(11)."\n";
}
catch (UnexpectedValueException $erreur)
{
    echo $erreur."\n";
}

#Question 18
try
{
    echo $joe->getLastOccurenceIndex(10)."\n";
}
catch (UnexpectedValueException $erreur)
{
    echo $erreur."\n";
}
#Question 19
try {
    echo $kevin."\n";
    $kevin->swapMarks(1,2);
    echo $kevin."\n";
    $kevin->swapMarks(2,3);
    echo $kevin."\n";
} catch (OutOfRangeException $erreur) {
    echo $erreur."\n";
}