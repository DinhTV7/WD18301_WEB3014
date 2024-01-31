<?php

use App\Controllers\CustomerController;
use App\Controllers\ProductController;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('auth', function(){
    if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');die;
    }
});

// khu vực cần quan tâm -----------

// Khu vực định nghĩa ra các đường dẫn
// Cách định nghĩa: 
// $router->phuong_thuc_http('tên route', hàm xử lý )
$router->get('/', function () {
    return "Đây là trang chủ";
});

$router->get('list-product', [ProductController::class, 'index']);

// Nhóm các route
$router->group(['prefix' => 'product'], function($router) {
    // Định nghĩa các route trong group
    $router->get('detail-product/{id}', [ProductController::class, 'detail']);
});

$router->get('list-customer', [CustomerController::class, 'index']);
$router->get('add-customer', [CustomerController::class, 'addCustomer']);
$router->post('create-customer', [CustomerController::class, 'createCustomer']);

// khu vực cần quan tâm -----------

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>