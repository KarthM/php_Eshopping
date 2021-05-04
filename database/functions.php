<?php

// require MySQL Connection
require ('DBController.php');

// require Product Class
require ('Product.php');

// require Cart Class
require ('DBcart.php');


// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
$product_shuffle = $product->getData();

// Cart object
$Cart = new DBcart($db );