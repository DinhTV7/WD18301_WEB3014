<?php
namespace Test1;
// Tạo 1 class SinhVien (hoTen, namSinh)
// Gán giá trị cho các thuộc tính
// Khởi tạo 1 phương thức hienThiThongTin để hiển thị ra hoTen, namSinh
class SinhVien
{
    public function __construct($name)
    {
        echo "Đây là class SinhVien test 1 <br/>" . $name;
    }
}