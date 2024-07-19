<?php
namespace App\Entity;

class Product
{
    private $name;
    private $price;
    private $discount;
    private $stock;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;

        $this->discount = 0;
        $this->stock = 0;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function getDiscountText()
    {
        if($this->discount > 0)
        {
            return ($this->discount * 100) . '%';
        }
        return '0%';
    }

    public function getRealPrice()
    {
        return $this->price * (1 - $this->discount);
    }

    public function isAvailable()
    {
        return ($this->stock > 0) ? true : false;
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    public function updateStock($change)
    {
        $this->stock += $change;
    }
}