<?php
declare(strict_types = 1);
require_once "Country.php";
#Nino SAUVAGEOT TD1A

#Question 1.
$france = new Country("France",641185,66600000);

$france -> print();
echo "\n";




#Question 2.
$italie = new Country("Italie");
$italie -> print();
echo "\n";

$italie -> setSurface(301336.0);
$italie -> setPopulation(60626442);
$italie -> print();
echo "\n";

#Question 3.
$paysVide = new Country();
$paysPasVide = new Country("Pays",10);
$paysVide -> print();
echo "\n";
$paysPasVide -> print();
echo "\n";

#Question 4.
$copieFrance = new Country($france -> getName(), $france -> getSurface(),$france -> getPopulation() );
$copieFrance -> print();
echo "\n";

echo $france -> isEqual($copieFrance)? "Vrai" : "Faux";
echo "\n\n";

#Question 5.

$copieFrance2 = $france;
$copieFrance2 -> print();
$france -> setName("Bonjour");
$copieFrance2 -> print();
$copieFrance2 = $france;
$copieFrance2 -> print();
$france -> setPopulation(2);
$copieFrance2 -> print();
$copieFrance2 = $france;
$copieFrance2 -> print();
$france -> setSurface(15);
$copieFrance2 -> print();
echo $copieFrance -> getDensity();
echo "\n\n";

#Question 6.
function copie(Country $objet): Country
{
    $res = new Country($objet -> getName(), $objet -> getSurface(),$objet -> getPopulation() );
    return $res;
}
$copie=copie($france);
$copie -> print();

#Question 7.
function printCountry(Country $objet): void
{
    echo $objet -> getName() . "\n";
    echo "  surface : " . $objet -> getSurface() . "\n";
    echo "  population : " . $objet -> getPopulation() . "\n";
}
printCountry($copie);
