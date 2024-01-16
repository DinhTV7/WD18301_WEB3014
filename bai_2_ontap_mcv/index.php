<?php
// file index giúp điều hướng tới các hàm ở trong controller
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
// $url = $_GET['url'];
require_once 'Controllers/CustomerController.php';
$customerController = new CustomerController();

switch ($url) {
    case '/':
        echo $customerController->listCustomer();
        break;
    case 'add-customer':
        echo $customerController->addCustomer();
        break;
    case 'detail_customer':
        echo $customerController->detailCustomer();
        break;
    case 'edit_customer':
        echo $customerController->editCustomer();
        break;
}

// Tạo 1 url mới add-customer để 
// điều hướng tới hàm addCustomer nằm trong controller
// Và echo "đây là controller addCustomer"