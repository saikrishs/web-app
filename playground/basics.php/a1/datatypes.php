<?php

//string data type
$name = 'sai';
echo $name;

echo "<br>";

//Integer
$age = 28;
echo $age;

echo "<br>";

//Float
$weight = 84.5;
 echo $weight;

echo "<br>";

//boolean
$isMajor = false;
echo $isMajor;

echo "<br>";

//Simple array
$favoriteMovies = ['NBK', 'NTR', 'NKR'];
$favoriteMovies[1] = 'Sai';
$favoriteMovies[5] = 'Vamsi';
var_dump($favoriteMovies);

echo "<br>";

//Associative Array
$address = [
    'House-number' => '2-122',
    'village' => 'bodawada',
    'city' => 'Parchur',
    'state' => 'AP',
    'pinCode' => '523169'
];
$address ['village'] = 'Adusumalli';
$address ['country'] = 'India';
print_r($address);

echo "<br>";

//Object
$educationObj = new stdClass();
$educationObj ->ssc = 480;
$educationObj ->Inter = 910;
$educationObj ->btech = 640;
$educationObj ->MS = 1000;
var_dump($educationObj);
/*$name = "sai";
$number = 5;
$weight = 83.5;
$isMajor = true;

echo $name;
echo $number;
echo $weight;
echo $isMajor;
echo "<br>";
$favNames = ["sai", "Vamsi", "gopi"];
var_dump($favNames);
echo "<br>";
$addres = ["a"=>1, "b"=>"sai", "c"=>3];
$addres["b"] = "vamsi";
var_dump($addres);*/

