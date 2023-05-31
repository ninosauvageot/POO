<?php
require_once "Point.php";
require_once "Segment.php";
#Nino SAUVAGEOT TD1A
function decodeBoolen (bool $var) : string
{
    if ($var == true)
        $res = "Vrai";
    else
        $res = "Faux";
    return $res;
}
#Question 8.
$origine = new Point;
$destination = new Point( 0.5 , 6.0 );
$coord = new Point(5);

#Question 9.
echo $destination ->getX() . "\n";
echo $destination ->getY() . "\n";

#Question 10.
echo "$origine\n";

#Question 11.
$origine ->translation(45,14);
echo "$origine\n";

#Question 13.
$segment1 = new Segment( $origine , $destination);

#Question 14.
echo "$segment1 \n\n\n";

#Question 15.

echo "$segment1\n";
$pointDebut = $segment1->getStart();
echo "$pointDebut\n";
$pointDebut->translation(2.,3.);
echo "$pointDebut\n";
echo "$segment1\n";


#Question 16.

echo "$segment1\n";
$segment1 ->setStart($pointDebut);
echo "$segment1\n";

#Question 17.
echo "$segment1\n";
$segment1 ->translationSegment(10,12);
echo "$segment1\n";

#Question 18.
echo $segment1 ->getLength() . "\n";

#Question 19.
$segment2 = new Segment( $origine , $destination);
echo decodeBoolen($segment1 ->isLongerThan($segment2)) . "\n";

#Question 20.
echo decodeBoolen($segment1 ->isEqual($segment2)) . "\n";

#Question 21.
$copieOrigine = clone $origine;
echo "origine -> $origine et copieOrigine -> $copieOrigine\n";
$copieSegment1 = clone $segment1;
echo "segment1 -> $segment1 et copieSegment1 -> $copieSegment1\n";