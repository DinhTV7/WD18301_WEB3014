<?php
// Tính kế thừa trong OOP
// Một class kế thừa từ class cha của nó
// nó sẽ có thể sử dụng lại các thuộc tính và phương thức từ class cha

// Demo tính kế thừa
class ConNguoi
{
    public $chan;
    public $tay;
    public $mat;
    public $mui;

    public function setChan($soChan) 
    {
        $this->chan = $soChan;
    }

    public function setTay($soTay) 
    {
        $this->tay = $soTay;
    }

    public function an() 
    {
        echo "Ăn bằng mồm";
        echo "<br/>";
    }
}

class NguoiLon extends ConNguoi 
{
    public $longNach;
    public function di() {
        echo "Đi bằng " . $this->chan . " chân";
        echo "<br/>";
    }
}

$nguoiLon = new NguoiLon();
$nguoiLon->an();
$nguoiLon->setChan(2);
$nguoiLon->di();

// Tạo 1 class TreCon kế thừa từ class ConNguoi
// Trong class TreCon khai báo 1 phương thức Bo
// Hiển thị ra: "Trẻ con bò bằng 2 tay và 2 chân"

class TreCon extends ConNguoi
{
    public function bo() 
    {
        echo "Trẻ con bò bằng ". $this->tay . " tay và ". $this->chan . " chân";
        echo "<br/>";
    }
}

$treCon = new TreCon();
$treCon->setTay(2);
$treCon->setChan(2);
$treCon->bo();

// Phạm vi truy cập
// Public
// Private
// Protected

class TruyCap
{
    public $public = "Có thể truy cập ở bất cứ đâu";
    private $private = "Chỉ có thể truy cập được bên trong class";
    protected $protected = "Có thể truy cập dữ liệu ở trong class và các class kế thừa";

    public function layPrivate() {
        return $this->private;
    }

    public function layProtected() {
        return $this->protected;
    }
}
$phamViTruyCap = new TruyCap();
echo $phamViTruyCap->public;
echo "<br/>";
echo $phamViTruyCap->layPrivate();
echo "<br/>";
echo $phamViTruyCap->layProtected();
echo "<br/>";
