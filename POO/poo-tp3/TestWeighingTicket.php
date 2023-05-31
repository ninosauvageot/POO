<?php
require_once "WeighingTicket.php";
#Nino SAUVAGEOT TD1A

#Question 2.
$inconnu = new WeighingTicket;
$carotte = new WeighingTicket("Carotte");
$concombre = new WeighingTicket("Concombre",0.99);
$pommeDT = new WeighingTicket("Pomme de Terre",1.5,3000);

var_dump($inconnu);
var_dump($carotte);
var_dump($concombre);
var_dump($pommeDT);

#Question 3.
$carotte = new WeighingTicket("Carotte");
$concombre = new WeighingTicket("Concombre",0.99);
$pommeDT = new WeighingTicket("Pomme de Terre",1.5,3000);

#Question 4.
echo $pommeDT->getArticleName() . "\n";
echo $pommeDT->getPricePerKilogram() . "\n";
echo $pommeDT->getWeight() . "\n";
echo $pommeDT->getPrice() . "\n";

#Question 5.
echo $pommeDT->setArticleName("POMME DT") . "\n";
echo $pommeDT->getArticleName() . "\n";
echo $pommeDT->setPricePerKilogram(4) . "\n";
echo $pommeDT->getPricePerKilogram() . "\n";
echo $pommeDT->setWeight(5000) . "\n";
echo $pommeDT->getWeight() . "\n";
echo $pommeDT->getPrice() . "\n";

echo "$pommeDT \n";

#Question 6.
echo $pommeDT->weighing();
echo "$pommeDT \n";








