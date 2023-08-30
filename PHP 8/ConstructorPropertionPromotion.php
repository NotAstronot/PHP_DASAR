<?php

class Product
{
    public function __construct(
        public string $id,
        public string $name,
        public int $price = 0,
        public int $quantity = 0,
        public bool $expensive = false
    ) {
    }
}


$product = new Product(id: "1", name: "Bakso", price: 20000);
var_dump($product);

echo $product->name . PHP_EOL;
