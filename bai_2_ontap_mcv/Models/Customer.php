<?php
require_once "BaseModel.php";

class Customer extends BaseModel
{
    public function getCustomers()
    {
        $sql = "SELECT * FROM customer";
        return $this->dataProcess($sql);
    }
    public function getCustomerByID($id)
    {
        $sql = "SELECT * FROM customer where id = $id";
        return $this->dataProcess($sql, false);
    }

    public function updateCustomer($id, $name, $email, $phone)
    {
        $sql = "UPDATE customer SET name = '$name', email = '$email', phone = '$phone' WHERE id = '$id'";
        return $this->dataProcess($sql);
    }
}
