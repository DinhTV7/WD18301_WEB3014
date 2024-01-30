<?php

namespace App\Controllers;

class CustomerController extends BaseController
{
    public function index()
    {
        // echo "Xin chào";
        $title = "Danh sách khách hàng";
        $arr = [
            [
                "ten" => "Tạ Văn Định",
                "email" => "dinhtv7@fe.edu.vn",
            ],
            [
                "ten" => "Tạ Văn Định 222222",
                "email" => "dinhtv722222@fe.edu.vn",
            ]
        ];
        $this->render('customer.index', compact('title', 'arr'));
    }
}
