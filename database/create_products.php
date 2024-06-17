<?php

use App\Models\Product;
require_once __DIR__.'/../vendor/autoload.php';
// Data pro první produkt
$data = [
    'name' => 'Product 1',
    'collection' => 'Spring 2024',
    'category' => 'Apparel',
    'year' => 2024,
    'reservation' => false,
    'sold' => false,
    'price' => 19.99,
];


// Vytvoření tří produktů
Product::createProduct($data);

