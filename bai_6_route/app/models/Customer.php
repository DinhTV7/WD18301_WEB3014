<?php
namespace App\Models;

class Customer extends BaseModel
{
    protected $table = 'customer';

    // Lấy ra danh sách khách hàng
    public function getCustomer()
    {
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    // Thêm thông tin khách hàng
    public function addCustomer($id, $name, $email, $phone)
    {
        $sql = "INSERT INTO $this->table VALUES (?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute([$id, $name, $email, $phone]);
    }
}