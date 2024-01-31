<?php

namespace App\Controllers;

use App\Models\Customer;

class CustomerController extends BaseController
{
    protected $customer;

    public function __construct()
    {
        // Khởi tạo class Customer model
        $this->customer = new Customer();
    }

    public function index()
    {
        // echo "Xin chào";
        $title = "Danh sách khách hàng";
        // Lấy giữ liệu bằng cách thực hiện phương thức của model
        // Cách 1:
        // $customer = new Customer();
        // $customers = $customer->getCustomer();

        // Cách 2: Đưa lên hàm __construct
        $customers = $this->customer->getCustomer();
        // var_dump($customers);
        // die();

        return $this->render('customer.index', compact('title', 'customers'));
    }

    // Hiển thị giao diện thêm khách hàng
    public function addCustomer()
    {
        return $this->render('customer.add');
    }

    // Thực hiện thêm dữ liệu khách hàng
    public function createCustomer()
    {
        // Nếu tiến hành ấn vào nút thêm
        if (isset($_POST['add'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            return $this->customer->addCustomer(Null, $name, $email, $phone);
        }
    }
}
