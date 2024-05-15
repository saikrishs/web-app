<?php
class Product 
{
    // public string $name;
    // public int $price;
    // private int $quantity;
    public function __construct(public string $name,public int $price, public int $quantity)
    {
    // $this->name = $name;
    // $this->price = $price;
    // $this->quantity = $quantity;
    }
    public function __destruct()
    {
        echo "The product {$this->name} has been removed from the memory";
    }

    public function priceAsCurrency(string $currencySymbol, int $divisor): string
    {
    $priceAsCurrency = $this->price / $divisor;
    return $currencySymbol . $priceAsCurrency;
    }
}