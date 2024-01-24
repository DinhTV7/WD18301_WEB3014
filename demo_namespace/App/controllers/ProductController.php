<?php
namespace App\Controllers;

require "App/models/Product.php";
use App\Models\ProductModel\Product;
use DateTime;

class ProductController
{
    public function __construct()
    {
        $product = new Product();
        echo "Đây là controller của Product <br/>";
        $dateTime = new DateTime();
        var_dump($dateTime);
    }
}