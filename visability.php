<?php

require_once "data/Product.php";

$product = new Product("Laptop", 10000000);

// tampilkan product get name
echo $product->getName() . PHP_EOL;
// tampilkan product get price
echo $product->getPrice() . PHP_EOL;
$dummy = new ProductDummy("Dummy", 10000000);
$dummy->info();