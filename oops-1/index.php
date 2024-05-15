<?php
require_once("product.php");

$product1 = new Product('soap', 10, 100);
$product2 = new Product('oil', 20, 200);
print_r($product1);
// echo PHP_EOL;
print_r($product1->priceAsCurrency("$", "20"));
