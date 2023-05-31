<?php

class Shape
{
    protected int $vertices;

    /**
     * Permet la construction d'une forme (rectangle ou carre)
     * @param int $sommets
     */
    public function __construct (int $sommets)
    {
        $this->vertices = $sommets ;
        echo "Shape ( $sommets ) \n";
    }

    /**
     * Permet d'afficher les sommets de la forme
     * @return void
     */
    public function print () : void
    {
        echo "Sommets : $this->vertices\n";
    }

}