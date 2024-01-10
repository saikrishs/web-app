<?php

class person
{
public $name;
public $age;

public function __construct($name, $age)
{
$this-> name = $name;
$this-> age = $age;
}
public function details()
{
echo "$this->name" , "$this->age";
}
}