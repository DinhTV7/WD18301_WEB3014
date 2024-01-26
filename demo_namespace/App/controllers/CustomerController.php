<?php
namespace App\Controllers;

require "App/models/Customer.php";
use App\Models\Customer;

class CustomerController
{
    public function __construct()
    {
        $customer = new Customer();
        echo "Đây là controller của customer";
    }
}