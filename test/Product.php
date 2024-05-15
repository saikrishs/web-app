<?php
class Product{
    public $name;
    public $color;
    public $price;
public function __construct ($name, $color, $price){
    $this->name = $name;
    $this->color = $color;
    $this->price = $price;
}
// public function messege(){
//     return "My car is a " . $this->name . " " . $this->color . "  " . $this->price . "!";
// }
}
