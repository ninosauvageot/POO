<?php
declare(strict_types = 1);
#Nino SAUVAGEOT TD1A
#Question 11.
/* Il existe 8 opérateurs de comparaison:
== :
permet de comparer si 2 valeurs sont égales

=== :
permet de comparer si 2 valeurs ont le mêmes types

!= :
permet de comparer si 2 valeurs sont différents

!== :
permet de comparer si 2 valeurs ont des types différents

< :
permet de comparer si la première valeur est strictement inférieur à la deuxième

<= :
permet de comparer si la première valeur est inférieur ou égale à la deuxième

> :
permet de comparer si la première valeur est strictement supérieur à la deuxième

>= :
permet de comparer si la première valeur est supérieur ou égale à la deuxième
*/

#Question 12.
/*Il existe 6 opérateurs logiques:
&& and :
permet de savoir si les 2 valeurs/conditions sont vrai ou fausse, si l'une des 2 n'est pas faux alors c'est faux, sinon c'est vrai
mais le && à une plus grande priorité
ex : $b = true && false;
alors il vaudra false
mais $b = true and false;
alors il vaudra true
car && est en priorité sur le = donc il rempli sa condition true && false, alors que and va faire en réalité ($b = true) and false

|| or :
permet de savoir si les 2 valeurs/conditions sont vrai ou fausse, si l'une des 2 n'est pas vrai alors c'est faux, sinon c'est vrai
mais le || à une plus grande priorité
tout comme le &&

xor :
permet de savoir si les 2 valeurs/conditions sont vrai ou fausse, si uniquement l'une des 2 est vrai alors c'est vrai, sinon c'est faux

! :
permet de dire "not", donc de d'inverser la valeur/condition
ex : while not True
tant qu'il n'est pas vrai
 */

#Question 13.
function calculerRemise(float $prix, int $gramme):float
{
    $prix_kilo = ($prix * $gramme)/1000;
    if ($prix_kilo>=200)
        $prix_kilo=$prix_kilo*0.75;
    if ($prix_kilo>=100)
        $prix_kilo=$prix_kilo*0.85;
    if ($prix_kilo>=50)
        $prix_kilo=$prix_kilo*0.95;
    return $prix_kilo;
}
echo calculerRemise(50,500);
echo "\n";
#Question 14.
function decodeBooleen (bool $val): string
{
    $res="Faux";
    if ($val == True)
        $res="Vrai";
    return $res;
}
function estBissextile(int $annee):bool
{
    $res=False;
    if ($annee%4==0 and $annee%100!=0 or $annee%400==0)
        $res=True;
    return $res;
}
$bool=estBissextile(2024);
echo decodeBooleen($bool);
echo "\n";
#Question 15.
function auMoinsDeuxVrais(bool $bool1, bool $bool2, bool $bool3): bool
{
    $res = False;
    if (($bool1 && ($bool2 || $bool3)) || ($bool2 && $bool3))
        $res = True;

    return $res;
}
$bool=auMoinsDeuxVrais(True,False,True);
echo decodeBooleen($bool);
echo "\n";

#Question 16.
function exactementDeuxVrais(bool $bool1, bool $bool2, bool $bool3): bool
{
    $res = False;
    if (($bool1 && ($bool2 || $bool3)) xor ($bool2 && $bool3))
        $res = True;

    return $res;
}
$bool=exactementDeuxVrais(True,False,True);
echo decodeBooleen($bool);
echo "\n";

#Question 17.
function saisieReponse(): string
{
    $resValide = False;
    $res="";
    while ($res != True)
        $res = readline("oui ou non ?");
        switch ($res) {
            case "Oui":
            case "oui":
            case "OUI":
            case "o":
            case "O":
            case "Yes":
            case "yes":
            case "YES":
            case "y":
            case "Y":
            case "Non":
            case "non":
            case "NON":
            case "n":
            case "N":
            case "No":
            case "no":
            case "NO":
                $resValide=True;
                break;
            default:
                $resValide=False;
                break;
        }
    return $res;
}

echo saisieReponse();
echo "\n";

function dessinerRectanglePlein(string $motif, int $li, int $col): void
{
    for ($i = 0; $i<$li; $i+=1) {
        for ($j = 0; $j < $col; $j += 1)
            echo $motif . " ";
        echo "\n";
    }
}
dessinerRectanglePlein("+",4,5);