<?php
require_once "Point.php";
#Nino SAUVAGEOT TD1A
class Segment
{
    private Point $start;
    private Point $end;

    /**
     * permet de construire un segment grâce à 2 points, en reprenant leurs valeurs grâce aux get de X et Y
     * @param Point $start
     * @param Point $end
     */
    public function __construct (Point $start, Point $end)
    {
        $this->start = clone $start; #new Point($start -> getX(), $start->getY());
        $this->end = clone $end; #new Point($end -> getX(), $end->getY());
    }

    /** permet d'afficher le segment sous la forme [ (start) , (end) ], grâce à un echo
     * @return string
     */
    public function __tostring (): string
    {
        $res = "[ {$this->start} , ";
        $res = $res. "{$this->end} ]";
        return $res;
    }

    /**
     * permet d'afficher les valeurs du start dans le segment
     * @return Point
     */
    public function getStart () : Point
    {
        return clone $this -> start;#new Point($this -> start ->getX(), $this -> start ->getY());
    }

    /**
     * permet de modifier les valeurs du point start
     * @param Point $start
     * @return void
     */
    public function setStart(Point $start):void
    {
        $this -> start = clone $start; #new Point($start ->getX(),$start ->getY());
    }

    /**
     * permet d'augmenter les valeurs des 2 points du segment
     * @param Point $dstart
     * @param Point $dend
     * @return void
     */
    public function translationSegment(float $dstart , float $dend) : void
    {
        $this -> start -> translation($dstart,$dend);
        $this -> end -> translation($dstart,$dend);
    }

    /**
     * permet de calculer la distance entre 2 poins, et donc la mesure du segment
     * @return float
     */
    public function getLength () : float
    {
        $x1=$this -> start ->getX();
        $y1=$this -> start ->getY();
        $x2=$this -> end ->getX();
        $y2=$this -> end ->getY();
        return (sqrt(($x2-$x1)**2 + ($y2-$y1)**2));
    }

    /**
     * permet de déterminer si la longueur prit en paramètre est inférieur à notre segment de la méthode
     * @param Segment $segment2
     * @return bool
     */
    public function isLongerThan(Segment $segment2) : bool
    {
        $res = False;
        if ($this->getLength() > $segment2 -> getLength())
        {
            $res = true;
        }
        return $res;
    }

    /**
     * permet de déterminer si 2 segment sont égaux entre eux
     * @param Segment $segment
     * @return bool
     */
    public function isEqual(Segment $segment):bool
    {
        $res=True;
        if ($this ->start->getX() != $segment ->start->getX() || $this ->start->getX() != $segment ->start->getY() || $this ->start->getY() != $segment ->start->getX() || $this -> start->getY() != $segment -> start->getY() || $this ->start->getX() != $segment ->end->getX() || $this -> start->getX() != $segment ->end->getY() || $this -> end->getX() != $segment->end->getX() || $this ->end->getX() != $segment ->end->getY() || $this ->end->getY() != $segment ->end->getX() || $this ->end->getY() != $segment ->end->getY())
        {
            $res=False;
        }
        return $res;

    }

    /**
     * permet de cloner un segment (prendre ses valeurs) et de les intégrer dans un nouveau segment
     * pour faire une copie mise sur une autre variable
     * @return void
     */
    public function __clone()
    {
        $this->start = clone $this->start;
        $this->end = clone $this->end;
    }

}