<?php
declare(strict_types = 1);
#Nino SAUVAGEOT TD1A
#Question 19.
function creeTableau(int $taille, int $min, int $max): array
{
    $tab=array();
    for ($i = 0; $i<$taille; $i+=1){
        $tab[] = rand($min,$max);
    }
    return $tab;
}
echo var_dump(creeTableau(4,5,10));
echo "\n";

#Question 20.
function afficheTableau(array $tab): void
{
    echo "[ ";
    for ($i=0 ; $i<count($tab) ; $i+=1){
        echo $tab[$i] . " ";
    }
    echo "]";
}
echo afficheTableau(creeTableau(4,5,10));
echo "\n";

#Question 21.
function calculerMoyenne(array $tab): float
{
    $res=0;
    for ($i=0 ; $i<count($tab) ; $i+=1){
        $res+=$tab[$i];
    }
    $res=$res/count($tab);
    return $res;
}
echo calculerMoyenne(creeTableau(4,5,10));
echo "\n";

#Question 22.
function estPresent(array $tab, int $val): bool
{
    $res=False;
    for ($i=0 ; $i<count($tab) ; $i+=1){
        if ($tab[$i]==$val) {
            $res=True;
        }
    }
    return $res;
}
function decodeBooleen (bool $val): string
{
    $res="Faux";
    if ($val == True)
        $res="Vrai";
    return $res;
}

echo decodeBooleen(estPresent(creeTableau(4,5,10),5));
echo "\n";

#Question 23.
function indexOf (array $tab, int $val): int
{
    $res=-1;
    for ($i=0 ; $i<count($tab) ; $i+=1){
        if ($val == $tab[$i]){
            $res=$i;
        }
    }
    return $res;
}

echo indexOf(creeTableau(4,5,10),5);
echo "\n";

#Question 24.
function getMaximum(array $tab): int
{
    $res=$tab[0];
    for ($i=0 ; $i<count($tab) ; $i+=1){
        if ($res < $tab[$i]){
            $res=$tab[$i];
        }
    }
    return $res;
}
echo getMaximum(creeTableau(4,5,10));
echo "\n";

#Question 25.
function getIndiceMinimum(array $tab): int
{
    $res=$tab[0];
    $resValide=0;
    for ($i=0 ; $i<count($tab) ; $i+=1){
        if ($tab[$resValide] > $tab[$i]){
            $resValide=$i;
        }
    }
    return $resValide;
}
echo getIndiceMinimum(creeTableau(4,5,10));
echo "\n";

#Question 26.