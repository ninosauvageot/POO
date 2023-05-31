<?php
#SAUVAGEOT Nino TD1A
declare(strict_types = 1);
require_once "Lodgement.php";
require_once "Apartment.php";

#Question 2
$logement1 = new Lodgement(46.7, "T2", 6805);

#Question 3
echo $logement1->getMeterPrice()."\n";
$logement1->setMeterPrice(2700);
echo $logement1->getMeterPrice()."\n";

#Question 4
echo "$logement1\n";

#Question 5
$logement2 = $logement1;
echo "$logement2\n";

#Question 6
echo $logement1->getPrice()."\n";

#Question 9
$apartement1 = new Apartment(46.7, "T2", 6805, 4, True);

#Question 10
echo $apartement1."\n";



