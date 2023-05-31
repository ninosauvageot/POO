<?php
class Point{
    private float $x;
    private float $y;


    /**
     * permet de construire un nouveau point
     * si des valeurs ne sont pas indiqué, alors pas défaut ses valeurs seront à 0
     * @param float $x
     * @param float $y
     */
    public function __construct (float $x = 0, float $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * permet d'afficher la valeur x du point
     * @return string
     */
    public function getX (): string
    {
        return $this->x;
    }

    /**
     * permet d'afficher la valeur y du point
     * @return string
     */
    public function getY (): string
    {
        return $this->y;
    }

    /**
     * permet d'afficher l'objet Point sous la forme ( x , y ) avec un echo
     * @return string
     */
    public function __tostring (): string
    {
        $res = "( {$this->x} , ";
        $res = $res. "{$this->y} )";
        return $res;
    }

    public function translation(float $dx, float $dy) : void
    {
        $this->x = $this->x + $dx;
        $this->y = $this->y + $dy;
    }
}