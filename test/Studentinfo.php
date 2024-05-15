<?php 
requie_once("./Grad.php");
class StudentInfo extends Grad 
{
    public $name = 'sai';
    public $age = 28;
    public $address = '123 main st, 786881';
    
    public function __construct($name, $age, $address, Grad $grad){
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->grad = $grad;
    }

    public function caliculateAge(){
        $this->studentAddress();
        return "$this->name is $this->age of age and he lives in his $this->address";
    }

    public function estimatedSallary(){
        return "$this->name is $this->age of age and he lives in his $this->address";

    }

    public function distance(){
        (new Grad::class)->studentAddress();
        return "$name is $age of age and he lives in his $address";

    }
}