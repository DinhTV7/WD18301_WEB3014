<?php
// Định nghĩa 1 class SinhVien
class SinhVien {
    // Khai báo các thuộc tính của đối tượng (Biến trong class)
    public $tenSV;
    public $namSinh;
    public $maSV;

    // Hàm khởi tạo __construct (magic function)
    public function __construct($tenSV, $namSinh, $maSV) // Có tham số
    {
        // Tên hàm __construct là cố định và không thể thay đổi
        // PHP nó sẽ tự động tìm và ưu tiên chạy hàm nếu nó tồn tại
        // Thường được sử dụng để khởi tạo các giá trị ban đầu cho 
        // các thuộc tính của đối tượng
        $this->tenSV = $tenSV;
        $this->namSinh = $namSinh;
        $this->maSV = $maSV;
    }

    // Khai báo 1 phương thức để set giá trị cho thuộc tính tenSV
    // Set giá trị cho 1 thuộc tính riêng biệt
    // public function setTenSV($tenSV) {
    //     // Muốn sử dụng được thuộc tính trong class ta phải dùng từ khóa
    //     // $this->tên thuộc tính
    //     $this->tenSV = $tenSV;
    // }

    // public function setNamSinh($namSinh) {
    //     $this->namSinh = $namSinh;
    // }

    // public function setMaSV($maSV) {
    //     $this->maSV = $maSV;
    // }

    public function tinhTuoi() {
        $tuoi = date('Y') - $this->namSinh;
        return $tuoi;
    }

    // Hiển thị thông tin sinh viên
    public function hienThiThongTin() {
        echo "Tên: ". $this->tenSV . " - Năm sinh: " . $this->namSinh . " - Mã SV: " . $this->maSV . " - Tuổi: " . $this->tinhTuoi();
    }
}

// Khởi tạo 1 đối tượng thông qua class
$sv1 = new SinhVien("Tạ Văn Định", 2004, "PH99999");

// Gán giá trị cho các thuộc tính
// $sv1->setTenSV("DinhTV7");
// $sv1->setNamSinh(2004);
// $sv1->setMaSV("PH99999");
$sv1->hienThiThongTin();

$sv2 = new SinhVien("Nguyễn Văn A", 1989, "PH11111");
$sv2->hienThiThongTin();

// Khai báo thêm 2 thuộc tính (namSinh, maSV)
// Set giá trị cho các thuộc tính
// Thực hiện công việc in toàn bộ thông tin sinh viên ra màn hình
// Tên: "tenSV" - Mã SV: "maSV" - Năm Sinh: "namSinh"
// Sử dụng hienThiThongTin()

// Xây dựng 1 hàm tính tuổi có trả về trong class 
// (tuoi = năm hiện tại - năm sinh)
// Hiển thị tuổi trong phương thức hienThiThongTin()


// Khởi tạo 1 class GiangVien gồm các thuộc tính
// (maGV, tenGV, namBatDau, luongGV, soGioDay)
// Tạo phương thức set giá trị cho các thuộc tính ở trên
// Tạo 1 phương thức tính tongLuong = luongGV * soGioDay
// Tạo 1 phương thức để hienThiThongTinGV gồm đầy đủ 
// các thuộc tính và tổng lương
// Khởi tạo tối thiểu 3 GV