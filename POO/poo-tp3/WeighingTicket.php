<?php
class WeighingTicket
{
    private string $articleName;
    private float $pricePerKilogram;
    private int $weight;
    private float $price;

    /**
     * Permet de construire l'objet WeighingTicket grâce 4 données
     * le nom de l'article, le prix en kilo, le poids, et le prix calculé
     * @param string $articleName le nom de l'article
     * @param float $pricePerKilogram le prix kilo
     * @param int $weight le poids en grammes
     * @param float $price le prix calculé (poids/1000)*le prix en kilo
     */
    public function __construct (string $articleName = "Unknown", float $pricePerKilogram = 0, int $weight = 0, float $price = 0)
    {
        $this->articleName = $articleName;
        $this->pricePerKilogram = $pricePerKilogram;
        $this->weight = $weight;
        $this->price = ($weight/1000)*$pricePerKilogram;
    }

    /**
     * permet d'afficher le nom de l'article de l'objet
     *
     * @return String nom de l'article
     */
    public function getArticleName (): String
    {
        return $this->articleName;
    }

    /**
     * permet d'afficher le prix kilo de l'objet
     * @return float le prix kilo
     */
    public function getPricePerKilogram (): float
    {
        return $this->pricePerKilogram;
    }

    /**
     * permet d'afficher le poids de l'objet
     * @return int le poids
     */
    public function getWeight (): int
    {
        return $this->weight;
    }

    /**
     * permet d'afficher le prix calculé de l'objet
     * @return float le prix calculé
     */
    public function getPrice (): float
    {
        return $this->price;
    }

    /**
     * permet de modifier le nom de l'article de l'objet
     * @param string $articleName le nom du nouvel article
     * @return void
     */
    public function setArticleName (string $articleName): void
    {
        $this->articleName = $articleName;
    }

    /**
     * permet de modifier le prix en kilo de l'objet,
     * mais également de relancer le calcul du prix
     * @param float $pricePerKilogram
     * @return void
     */
    public function setPricePerKilogram (float $pricePerKilogram): void
    {
        $this->pricePerKilogram = $pricePerKilogram;
        $this->price = ($this -> weight/1000)*$pricePerKilogram;
    }

    /**
     * permet de modifier le poids,
     * mais également de relancer le calcul du prix
     * @param int $weight
     * @return void
     */
    public function setWeight (int $weight): void
    {
        $this->weight = $weight;
        $this->price = ($weight/1000)*$this -> pricePerKilogram;
    }

    /**
     * permet de faire un affichage de l'objet
     * @return string
     */
    public function __toString() : string
    {
        $res = "********************\n";
        $res = $res . "* Article : {$this->articleName}\n";
        $res = $res . "* Prix au kilo : {$this->pricePerKilogram}\n";
        $res = $res . "* Poids (gr) : {$this->weight}\n" ;
        $res = $res . "* Prix : {$this->price}\n";
        $res = $res . "********************";
        return $res;
    }

    /**
     * permet de définir un poids aléatoire
     * @return void
     */
    public function weighing () : void
    {
        $pds = rand(0,5000);
        $this->setWeight($pds);
    }



}