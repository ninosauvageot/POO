<?php

class Person
{
    private string $lastName;
    private string $firstName;
    private int $age;

    /**
     * permet d'afficher les valeurs de l'objet
     * @return void
     */
    public function print() : void
    {
        echo "Nom : {$this->lastName}\n";
        echo "Prenom : {$this->firstName}\n";
        echo "Age : {$this->age}\n" ;
    }
    /**
     * Constructeur de la classe Person. Ce constructeur permet d’affecter un nom, un pr ́enom
     * et un age `a une personne. Lorsque ces caract ́eritiques ne sont pas renseign ́ees lors de
     * l’appel du contructeur, la personne aura pour nom "Doe", pr ́enom "John" et age 0.
     *
     * @param string $lastName (optional) Nom de la personne
     * @param string $firstName (optional) Pr ́enom de la personne
     * @param int $age (optional) Age de la personne
     */
    public function __construct (string $lastName = "Doe", string $firstName = "John", int $age = 0)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->age = $age;
    }

    /**
     * Accesseur au nom de la personne. Retourne la valeur du nom sous forme de chaıne de
     * caracteres.
     *
     * @return string Nom de la personne
     */
    public function getLastName() : string
    {
        return $this->lastName;
    }

    /**
     * Accesseur au prenom de la personne. Retourne la valeur du prenom sous forme de chaıne de
     * caracteres.
     *
     * @return string Prenom de la personne
     */
    public function getFirstName() : string
    {
        return $this->firstName;
    }

    /**
     * Accesseur de l'age de la personne. Retourne la valeur de l'age sous forme d'entier
     *
     * @return string
     */
    public function getAge() : string
    {
        return $this->age;
    }

    /**
     * Permet de modifier la valeur Age de l'objet
     * @param int $age age de la personne
     *
     * @return void
     */
    public function setAge(int $age) : void
    {
        $this->age = $age;
    }
    /**
     * Permet de modifier la valeur du Prenom de l'objet
     * @param String $firstName Prenom de la personne
     *
     * @return void
     */
    public function setFirstName(String $firstName) : void
    {
        $this->firstName = $firstName;
    }

    /**
     * Permet de modifier la valeur du Nom de l'objet
     * @param String $lastName Nom de la personne
     * @return void
     */
    public function setLastName(String $lastName) : void
    {
        $this->lastName = $lastName;
    }

    /**
     * Permet de convertir l'objet en String
     * @return string Objet de la personne en chaine de caractères
     */
    public function __toString() : string
    {
        $res = "Nom : {$this->lastName}\n";
        $res = $res."Prenom : {$this->firstName}\n";
        $res = $res."Age : {$this->age}" ;
        return $res;
    }


}

