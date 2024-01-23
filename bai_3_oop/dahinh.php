<?php
// interface Không phải là 1 class
// interface là 1 khuôn mẫu sử dụng để tạo ra bộ khung cho các class
// interface giống như 1 bản hợp đồng ràng buộc
// bắt buộc lớp kế thừa phải có đầy đủ các phương thúc trong bản hợp đồng đó
interface DiChuyen {
    // MỘT SỐ ĐẶC ĐIỂM

    // Không được phép khai báo thuộc tính
    // public $hoTen; // LỖI

    // Trong interface chỉ được phép khai báo phương thức
    // Và không không được phép triển khai nội dung trong phương thức
    // public function test() { //LỖI
    //     echo 123;
    // }
    public function di();

    // Phạm vi truy cập trong interface chỉ có public
    // Không có private và protected
    // private function di2(); LỖI
    // protected function di3(); LỖI
}
// Không thể khởi tạo đối tượng từ interface
// $test = new DiChuyen(); LỖI

// Để sử dụng interface, tà cần định nghĩa 1 class
// và implements từ interface đó
class ConCho implements DiChuyen
{
    // Các lớp được implements từ interface 
    // phải định nghĩa tất cả phương thức từ interface đó
    // Không thể thay đổi phạm vi truy cập sang private và protected
    public function di()
    {
        echo "Con chó đi bằng 4 chân";
    }
}

interface DiChuyen2
{
    public function di2();
}
// Một class có thể implements nhiều interface
class Oto implements DiChuyen, DiChuyen2
{
    public function di()
    {
        echo "Đi bằng 4 bánh";
    }

    public function di2()
    {
        echo "Đi bằng 6 bánh";
    }
}

// Các interface có thể kế thừa lẫn nhau
interface DiChuyen3 extends DiChuyen, DiChuyen2
{
    public function di3();
}

// => interface và abtract class đều là bản thiết kế chung của các class
// Nhưng mức độ mở rộng dự án của interface sẽ lớn hơn (vì nó có tính đa kế thừa)

// Khi nào cần sử dụng interface và abtract class ?
// Dùng abtract class khi:
// - Chia sẻ phương thức và thuộc tính giữa các class
// - Nếu muốn class này chứa những thành phần protected
// => KHi chúng ta xác định có sử dụng kế thừa để 
// chia sẻ dữ liệu và các lớp có mối liên hệ với nhau

// Dùng interface khi:
// - Khi cần sử dụng đa kế thừa
// - Định nghĩa các phương thức chung cho lớp 
// (ko cần có mối liên hệ với nhau)