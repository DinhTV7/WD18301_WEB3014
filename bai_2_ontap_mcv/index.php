<?php
// file index giúp điều hướng tới các hàm ở trong controller
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
// $url = $_GET['url'];

switch ($url) {
    case '/':
        require_once 'Controllers/CustomerController.php';
        echo listCustomer();
        break;
    case 'add-customer':
        require_once 'Controllers/CustomerController.php';
        echo addCustomer();
        break;
}

// Tạo 1 url mới add-customer để 
// điều hướng tới hàm addCustomer nằm trong controller
// Và echo "đây là controller addCustomer"