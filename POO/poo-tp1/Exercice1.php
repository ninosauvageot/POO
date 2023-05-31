<?php
declare(strict_types = 1);
#Nino SAUVAGEOT TD1A
#Question 1.
echo "Nino\nSAUVAGEOT\n" ;

#Question 2.
#int pour les entiers:
$entier = 12 ;
echo $entier ;
echo "\n" ;
#float pour les réels:
$reel = 1.24 ;
echo $reel ;
echo "\n";
#string pour les chaîne de caractères:
$chaine_de_caracteres = "OUI" ;
echo $chaine_de_caracteres ;
echo "\n";

#Question 3.
#echo $entier + $reel + $chaine_de_caracteres;

#Une erreur se produit car un string ne s'additionne pas à des int ou float
echo $entier + $reel;
echo "\n";
#mais par contre, le int et le float peuvent s'additionner

#Question 4.
$string1 = "ceci est un mot";
$string2 = 'ceci est un autre mot';
echo $string1."\n".$string2."\n";
echo $string1;
echo "\n";
echo $string2;
echo "\n";
#je constate aucune différence pour le moment

#Question 5.
$mot1 = "OH MON DIEU ";
$mot2 = "UN MOT !!!";
#$mot3 = $mot1 + $mot2;
#echo $mot3;
#Une erreur se produit quand on utilise l'operateur +

$mot3 = $mot1.$mot2;
echo $mot3;
echo "\n";
#l'opérateur . permet de faire la somme entre deux chaînes

#Question 6.
$valeur = 1;
$chaine1 = "la réponse est $valeur";
$chaine2 = 'la valeur est $valeur';
echo $chaine1;
echo "\n";
echo $chaine2;
echo "\n";
#Je constate que les "" permet d'afficher également les variables (comme printf sur python)
#alors que '' permet d'afficher uniquement le texte et donc ne considère pas $valeur comme variable.

$chaine1 = "la réponse est $valeur \n";
$chaine2 = 'la valeur est $valeur \n';
echo $chaine1;
echo "\n";
echo $chaine2;
echo "\n";
# ma variable avec les "" permet de faire un saut de ligne
# ma variable avec les '' permet d'afficher les caractères \n et donc ne fais pas le saut de ligne