<?php
require "vendor/autoload.php";

use App\Dinhtv7;
use App\Models\User;
use App\ProductController;
use Bai5\HomeController;

$homeController = new HomeController();
$productController = new ProductController();
$user = new User();
$dinhtv7 = new Dinhtv7();
getMess();
