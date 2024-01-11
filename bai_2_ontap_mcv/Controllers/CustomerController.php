<?php
require_once "Models/Customer.php";
function listCustomer()
{
    echo "Đây là danh sách khách hàng";
    $customers = getCustomers();
    // var_dump($customers);
    include_once "Views/Customer/listcustomer.php";
}

function addCustomer()
{
    echo "Đây là trang thêm khách hàng";
}
function editCustomer()
{
    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_GET['id'])) {
        $id = $_GET['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        updateCustomer($id, $name, $email, $phone);
        header("Location: index.php");
    } else if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $customer = getCustomerByID($id);
    }

    include_once "Views/Customer/editCustomer.php";
}

// Lab 3: Tiếp tục thực hiện các công việc Thêm, Sửa, Xóa