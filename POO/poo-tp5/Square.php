<?php

require_once "Rectangle.php";

class Square extends Rectangle
{

    /**
     * Permet de construire un carre
     * @param float $a1
     */
    public function __construct ( float $a1)
    {
        parent::__construct ($a1,$a1);
        echo "Square ( $a1 )\n";
    }
}

