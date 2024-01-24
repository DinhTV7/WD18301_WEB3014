<?php
require "App/controllers/CustomerController.php";
require "App/controllers/ProductController.php";
use App\Controllers\{CustomerController, ProductController};
// use App\Controllers\ProductController;

$customerController = new CustomerController();
$productController = new ProductController();