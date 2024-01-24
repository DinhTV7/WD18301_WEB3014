<?php
require "Test1.php";
require "Test2.php";

// Nếu trường hợp use 2 class tên trùng nhau
// thì tiến hành đặt bí danh cho nó
use Test1\SinhVien as SinhVienTest1;
use Test2\SinhVien as SinhVienTest2;

// Trường hợp sử dụng 2 class có tên giống nhau 
// ta cần phải dùng namespace

// namespace dùng để định danh riêng cho class
// namespace luôn luôn được đặt ở đầu file PHP
// namespace giúp nhóm các class để quản lý code dễ dàng hơn

// Cách sử dụng:
// Cách 1:
// $tenObject = new TenNamespace\TenClass();
// $svTest1 = new Test1\SinhVien();
// $svTest2 = new Test2\SinhVien();

// Cách 2:
// use TenNamespace\TenClass;
// $tenObject = new TenClass();
$svTest1_2 = new SinhVienTest1("dinhtv7");
$svTest2_2 = new SinhVienTest2();