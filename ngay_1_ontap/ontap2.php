<?php
// Kiểm tra xem số 5 và số 6 là sỗ chẵn hay số lẻ
// Thực hiện in thông báo ra màn hình
$a = 5;
if ($a % 2 == 0) {
    echo "$a là số chẵn";
} else {
    echo "$a là số lẻ";
}

$b = 6;
if ($b % 2 == 0) {
    echo "$b là số chẵn";
} else {
    echo "$b là số lẻ";
}

// Hàm là đoạn code dùng để thực hiện 1 công việc cụ thể
// và có tính tái sử dụng cao

// Hàm không trả về có tham số
function checkNumber($num) {
    if ($num % 2 == 0) {
        echo "$num là số chẵn";
    } else {
        echo "$num là số lẻ";
    }
}
checkNumber(9);
echo "<br>";

// Viết hàm trả về có tham số. Tính diện tích hình thang
// Sau đó hiển thị kết quả ra màn hình
function tinhDienTichHinhThang ($dayLon, $dayNho, $chieuCao) {
    $dienTich = ($dayLon + $dayNho) * $chieuCao / 2;
    return $dienTich;
}
$a = 7; // Đáy lớn
$b = 6; // Đáy bé
$c = 7; // Chiều cao
$ket_qua = tinhDienTichHinhThang($a, $b, $c);
echo $ket_qua;

// Lab 2:
// Bài 1: Sử dụng hàm trả về để tính phương tình bậc 2
// Bài 2: Sử dụng hàm không trả về để thực hiện bài toán sau:
    // Truyền vào thông tin: Họ tên, năm sinh, giới tính 
    // (0 là nam, 1 là nữ)
    // Kiểm tra xem người này có đủ tuổi đi NVQS hay không
    // Hiển thị kết quả "Ông/Bà có/không đủ tuổi đi nvqs"
    // tuổi = năm hiện tại - năm sinh
    // độ tuổi đi NVQS là từ 18 đến 27 tuổi