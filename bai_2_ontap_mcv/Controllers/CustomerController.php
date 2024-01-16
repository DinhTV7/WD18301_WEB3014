<?php
require_once "Models/Customer.php";
class CustomerController
{
    protected $customer;

    public function __construct()
    {
        $this->customer = new Customer();
    }

    public function listCustomer()
    {
        echo "Đây là danh sách khách hàng";
        $customers = $this->customer->getCustomers();
        // var_dump($customers);
        include_once "Views/Customer/listcustomer.php";
    }

    public function addCustomer()
    {
        echo "Đây là trang thêm khách hàng";
    }

    public function detailCustomer()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $customer = $this->customer->getCustomerByID($id);
            include_once "Views/Customer/editCustomer.php";
        }
    }

    public function editCustomer()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_GET['id'])) {
            $id = $_GET['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $this->customer->updateCustomer($id, $name, $email, $phone);
            header("Location: index.php");
        }
    }
}


// Lab 3: Tiếp tục thực hiện các công việc Thêm, Sửa, Xóa