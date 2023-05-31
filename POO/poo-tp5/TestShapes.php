<?php
#SAUVAGEOT Nino TD1A
declare(strict_types = 1);
require_once ("Square.php");
require_once ("Shape.php");

#Question 1
$figure1 = new Shape(6);

#Question 3
$rectangle1 = new Rectangle(25,63.5);
$rectangle1 -> print();

#Question 5
$carre1 = new Square(14);
$carre1 -> print();