<?php
require_once "db.php";
function getCustomers() {
    $sql = "SELECT * FROM customer";
    return dataProcess($sql);
}