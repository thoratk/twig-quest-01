<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';
require_once 'products.php';

$name = 'Wilder';

echo $twig->render('home.html.twig', ['name' => $name]);

echo $twig->render('products.html.twig', ['products' => $products]);
