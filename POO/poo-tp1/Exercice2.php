<?php
declare(strict_types = 1);
#Nino SAUVAGEOT TD1A
#Question 7.
function afficheNomPrenom ( string $nom , string $prenom): void
{
    echo "$nom $prenom\n";
}

echo afficheNomPrenom("SAUMON","Patrick");
#permet d'afficher le nom et prénom d'une personne qu'on définit quand on appelle la fonction.

#Question 8.
function calculSomme ( int $val1 , int $val2 , int $val3): int
{
    return $val1+$val2+$val3;
}
echo calculSomme(10,15,2);
echo "\n";
#permet de faire la somme de 3 valeurs int.

#Question 9.
function getAge (): int
{
    $res = readline("T'as quel âge ?");
    return (int)$res;
}
getAge();
echo "\n";
#permet de poser la question "T'as quel âge ?" et de renvoyer un int.

#Question 10.
function plusGrand (int $min , int $max):bool
{
    $alea1 = rand($min,$max);
    $alea2 = rand($min,$max);
    $res = False;
    echo "$alea1 et $alea2";
    if ($alea1>$alea2)
        $res=True;
    else
        $res=False;
    return $res;
}
function decodeBooleen (bool $val): string
{
    $res="Faux";
    if ($val == True)
        $res="Vrai";
    return $res;
}

$bool = plusGrand(0,10);
echo decodeBooleen($bool);

#permet d'afficher si la première valeur (aléatoire entre le min et max) est strictement supérieur à la deuxième (aléatoire entre le min et max)
#si elle est vrai, on utilise la fonction decode pour afficher "Vrai" si c'est True ou "Faux" si c'est False