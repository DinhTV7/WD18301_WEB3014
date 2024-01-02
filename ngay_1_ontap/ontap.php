<?php
// PHP có bao nhiêu kiểu dữ liệu. Lấy ví dụ từng kiểu dữ liệu
$ho_ten = "Tạ Văn Định"; // Kiểu string
$nam_sinh = 2004; // Kiểu số nguyên
$sdt = "0379204876";

$myFloat = 5.5; // Kiểu số thực
$myBoolean = true; // Kiểu Boolean (true/false)
$myNull = null; // Không có gì cả (trống rỗng)

// Mảng trong PHP
// Cách khai báo
$mang_1 = [1, 3, 5, "Xin chao bay by", 6.5];

$mang_2 = array(1, 3, 5, "Xin chào bây by", 6.5);

var_dump($mang_1);
echo "<br>";
print_r($mang_1);
echo "<br>";

// Mảng tuần tự
// Là mảng mà các phần tử được đánh vị trí mặc định từ 0 -> n-1
// VD 1: Khai báo 1 mảng gồm họ tên 5 nyc
// Sử dụng for và foreach để in ra giá trị của các phần tử
$mang_3 = ['nyc1', 'nyc2', 'nyc3', 'nyc4', 'nyc5'];
// Sử dụng for
for ($i = 0; $i < count($mang_3); $i++) {
    echo $mang_3[$i];
    echo "<br>";
}
// Sử dụng foreach
foreach ($mang_3 as $key => $value) {
    echo "Nyc ở vị trí $key có tên là $value";
    echo "<br>";
}

// Mảng liên hợp
// Là mảng mà các phần tử được chỉ định bởi các khóa key duy nhất 
// thay vì các số nguyên mặc định

$sinh_vien = [
    'ho_ten' => 'Tạ Văn Định',
    'que_quan' => 'Nam Định',
    'nam_sinh' => 2004,
    'diem_tb' => 6.5,
];
// In ra giá trị
echo $sinh_vien['nam_sinh'];

// LAB 1
// Bài tập 1:
// Cho mảng sau. Hiển thị màu sắc ra 1 bảng (table), 
// backgroud phải tương ứng với màu sắc đấy
$mau_sac = [
    'red' => 'Màu đỏ',
    'blue' => 'Màu xang dương',
    'green' => 'Màu xanh lá'
];
// Bài tập 2:
// Khai báo 1 mảng gồm 10 ptu là số nguyên
// Hiển thị và tính tổng các số là số chẵn trong mảng
