<?php
#Nino SAUVAGEOT TD1A
declare(strict_types = 1);
class Student
{
    private string $lastName;
    private string $firstName;
    private array $marks;

    /**
     * permet de construire un objet de type Student avec un tableau initialiser par défaut en tableau vide.
     * @param string $lastName
     * @param string $firstName
     * @param array $marks
     */
    public function __construct (string $lastName, string $firstName, array $marks=array())
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->marks = $marks;
    }

    /**
     * permet d'afficher avec echo l'objet Student
     * @return string
     */
    public function __tostring (): string
    {
        $res = "{$this->lastName} {$this->firstName}\n"."Notes : [";
        foreach($this->marks as $value)
        {
        $res = $res." $value ";
        }
        $res = $res."]";
        return $res;
    }

    /**
     * permet d'afficher le nom de l'objet Student.
     * @return string
     */
    public function getLastName():string
    {
        return $this->lastName;
    }

    /**
     * permet de modifier le nom de l'objet Student.
     * @param string $lastName
     * @return void
     */
    public function setLastName(string $lastName):void
    {
        $this -> lastName = $lastName;
    }

    /**
     * permet d'afficher la note parmi la liste de marks de l'objet Student et de vérifier si l'indice choisie est vérifiable.
     * @param int $index
     * @return float
     */
    public function getMark (int $index) : float // throw OutOfRangeException
    {
        if($index < 0 || $index >= count($this->marks))
            throw new OutOfRangeException ( "getMark - indice invalide : $index");
        return $this->marks[$index];
    }

    /**
     * permet de modifier une note parmi la liste marks de l'objet Student et de verifier si l'indice choisie est vérifiable.
     * @param float $val
     * @param int $index
     * @return void
     */
    public function setMark (float $val,int $index):void
    {
        if($index < 0 || $index >= count($this->marks))
            throw new OutOfRangeException ( "setMark - indice invalide : $index");
        $this -> marks[$index] = $val;
    }

    /**
     * permet de connaitre l'égalité entre les notes de deux étudiants.
     * @param Student $student
     * @return bool
     */
    public function isEqual (Student $student):bool
    {
        $res = false;
        if (count($this->marks) === count($student->marks))
        {
            $i = 0;
            $res = true;
            while ($res && $i < count($this->marks))
            {
                if (!(abs($this->getMark($i) - $student->getMark($i)) < (10**-5)))
                    $res = false;
                ++$i;
            }
        }
        return $res;
    }

    /**
     * renvoie le nombre de notes (marks) d'un étudiant
     * 
     * @return int
     */
    public function getMarksCount():int
    {
        return count($this->marks);
    }

    /** 
     * Calcule la moyenne des notes de l'étudiant
     *
     * @return float
     */
    public function getMean():float
    {
        $somme = 0;
        foreach ($this->marks as $mark)
        {
            $somme+=$mark;
        }
        return round($somme/count($this->marks), 2);
    }

    /** 
     * Trouve la plus note la plus basse d'un étudiant
     *
     * @return float
     */
    public function getMinimum():float
    {
        $mini = $this->getMark(0);
        foreach ($this->marks as $mark)
        {
            if ($mark < $mini)
            {
                $mini = $mark;
            }
        }
        return $mini;
    }

    /** 
     * Trouve la plus grande note d'un étudiant
     *
     * @return int
     */
    public function getMaximumIndex():int
    {
        $maxi = 0;
        for ($i=1; $i<count($this->marks);++$i)
        {
            if ($this->getMark($i) > $this->getMark($maxi))
            {
                $maxi = $i;
            }
        }
        return $maxi;
    }

    /** 
     * verifie si la note sélectionne correspond dans la liste de note d'un étudiant
     *
     * @param float
     * @return bool
     */
    public function contains(float $note):bool
    {
        $res = false;
        $i = 0;
        while (!$res && $i < count($this->marks))
        {
            if ((abs($this->getMark($i) - $note) < (10**-5)))
            {
                $res = true;
            }
            ++$i;
        }
        return $res;
    }

    /** 
     * Compte le nombre de fois que l'étudiant à la note choisie
     *
     * @param float
     * @return int
     */
    public function getOccurenceCount(float $note):int
    {
        $compteur = 0;
        foreach($this->marks as $elt)
        {
            if ((abs($note - $elt) < (10**-5)))
            {
                ++$compteur;
            }
        }
        return $compteur;
    }

    /** 
     * Cherche la première occurence d'une note parmi les notes d'un étudiant
     *
     * @param float
     * @return int
     * @throws UnexpectedValueException
     */
    public function getFirstOccurenceIndex(float $note):int // throw UnexpectedValueException
    {
        $i = 0;
        $res = false;
        while (!$res && $i < count($this->marks))
        {
            if ((abs($note - $this->getMark($i)) < (10**-5)))
            {
                $res = true;
            }
            ++$i;
        }
        if (!$res)
            throw new UnexpectedValueException("getFirstOccurenceIndex- note introuvable");
        return $i-1;
    }

    /** 
     * Cherche la dernière occurence d'une note parmi la liste de note d'un étudiant
     *
     * @param float
     * @return int
     * @throws UnexpectedValueException
     */
    public function getLastOccurenceIndex(float $note):int // throw UnexpectedValueException
    {
        $res = -1;
        for ($i=0; $i<count($this->marks);++$i)
        {
            if ((abs($note - $this->getMark($i)) < (10**-5)))
            {
                $res = $i;
            }
        }
        if ($res === -1)
            throw new UnexpectedValueException("getLastoccurenceIndex- note introuvable");
        return $res;
    }

    /** 
     * Inverse 2 notes dans la liste de note d'un étudiant grâce aux 2 variables index
     *
     * @param int
     * @param int
     * @return void
     * @throws OutOfRangeException
     */
    public function swapMarks(int $i1, int $i2):void
    {
        if($i1 < 0 || $i1 >= count($this->marks))
            throw new OutOfRangeException ( "swapMarks - indice invalide : $i1");
        if($i2 < 0 || $i2 >= count($this->marks))
            throw new OutOfRangeException ( "swapMarks - indice invalide : $i2");
        $tmp = $this->getMark($i1);
        $this->setMark($this->getMark($i2), $i1);
        $this->setMark($tmp, $i2);
    }
}
