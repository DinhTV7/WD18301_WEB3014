<?php
// Trừu tượng là gì?
// Cái gì mà không cụ thể hóa được thì ta phải trừu tượng nó lên

// Lớp trừu tượng được khai báo bằng từ khóa abstract
// phía trước từ khóa class
abstract class Crush {
    // MỘT SỐ ĐẶC ĐIỂM CƠ BẢN

    // Một class trừu tượng nó sẽ chứa những phương thức trừu tượng
    abstract public function thichToi();
    public function thichToi2(){
        echo(123);
    }
    // Phương thức trừu tượng chỉ được phép khai báo trong lớp trừu tượng
    // Và nó không có nội dung
    // Nếu không phải là phương thức trừu tượng thì vẫn triển khai như bình thường

    // Chỉ có phương thức trừu tượng chứ không có thuộc tính trừu tượng
    public $hoTen; // Thuộc tính bình thường
    // abstract public $hoTen2; // LỖI

    // Các phạm vi truy cập trong lớp trừu tượng chỉ được khai báo là public và protected
    // abstract private function nhay(); // LỖI
}
// Không thể khởi tạo đối tượng từ class trừu tượng
// $crush1 = new Crush(); // LỖI

class NguoiYeuCu extends Crush {
    public function thichToi()
    {
        echo "Đã từng thích tôi";
    }
}
$nyc1 = new NguoiYeuCu();
$nyc1->thichToi();
