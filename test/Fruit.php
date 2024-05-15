<?php

class Fruit {
    public $name;
    public $color;
    public $price;

    public function __construct($name, $color, $price) {
        print_r("test");
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }

    public function fruitAsPrice($name, $color, $price) {
        return "$this->name is $this->color in color and its price is $this->price";
    }

    public function testing() {
        echo $this->fruitAsPrice;
    }

}