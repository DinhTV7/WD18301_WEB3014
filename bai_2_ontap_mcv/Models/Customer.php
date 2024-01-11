<?php
require_once "db.php";
function getCustomers()
{
    $sql = "SELECT * FROM customer";
    return dataProcess($sql);
}
function getCustomerByID($id)
{
    $sql = "SELECT * FROM customer where id = $id";
    // die($sql);
    return dataProcess($sql, false);
}

function updateCustomer($id, $name, $email, $phone) {
    $sql = "UPDATE customer SET name = '$name', email = '$email', phone = '$phone' WHERE id = '$id'";
    return dataProcess($sql);
}
