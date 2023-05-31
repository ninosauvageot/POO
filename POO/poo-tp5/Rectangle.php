<?php

require_once "Shape.php";

class Rectangle extends Shape {

    private float $edge1 ;
    private float $edge2 ;

    /**
     * Permet de construire un rectangle
     * @param float $a1
     * @param float $a2
     */
    public function __construct (float $a1, float $a2)
    {
        parent::__construct(4);
        $this->edge1=$a1;
        $this->edge2=$a2;
        echo "Rectangle ( $a1 , $a2 )\n";
    }

    /**
     * Permet d'afficher les arete du rectangle
     * @return void
     */
    public function print () : void
    {
        parent::print();
        echo "Arete1 : {$this->edge1}\n";
        echo "Arete2 : {$this->edge2}\n";
    }
}
