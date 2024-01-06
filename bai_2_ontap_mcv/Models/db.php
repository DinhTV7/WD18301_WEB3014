<?php
// tạo kết nối từ project php sang mysql
require_once "env.php";
function getConnect()
{
    $connect = new PDO(
        "mysql:host=" . DBHOST
            . ";dbname=" . DBNAME
            . ";charset=" . DBCHARSET,
        DBUSER,
        DBPASS
    );
    return $connect;
}

function dataProcess($query, $getDataAll = true) {
    $conn = getConnect();
    $stmt = $conn->prepare($query);
    $stmt->execute();
    if ($getDataAll) {
        return $stmt->fetchAll();
    }
    return $stmt->fetch();
}