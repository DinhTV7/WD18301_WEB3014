<?php
require_once "Models/Customer.php";
function listCustomer() {
    echo "Đây là danh sách khách hàng";
    $customers = getCustomers();
    // var_dump($customers);
    include_once "Views/Customer/listcustomer.php";
}

function addCustomer () {
    echo "Đây là trang thêm khách hàng";
}

// Lab 3: Tiếp tục thực hiện các công việc Thêm, Sửa, Xóa