<?php

class Lodgement
{
    private float $surface;
    private string $type;
    private float $meterPrice;

    public function __construct(float $surface, string $type, float $meterPrice)
    {
        $this->surface=$surface;
        $this->type=$type;
        $this->meterPrice=$meterPrice;
    }

    public function getMeterPrice() : float
    {
        return $this -> meterPrice;
    }

    public function setMeterPrice(float $newPrice):void
    {
        $this->meterPrice=$newPrice;
    }

    public function __toString(): string
    {
        $res = "Surface : $this->surface\n";
        $res = $res."Type : $this->type\n";
        $res = $res."Prix du m : $this->meterPrice\n";
        return $res;
    }

    public function getPrice():float
    {
        return $this->meterPrice * $this->surface;
    }
}