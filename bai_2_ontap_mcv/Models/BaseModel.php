<?php
// tạo kết nối từ project php sang mysql
require_once "env.php";
class BaseModel
{
    protected $connect;
    public function __construct()
    {
        $this->connect = new PDO(
            "mysql:host=" . DBHOST
                . ";dbname=" . DBNAME
                . ";charset=" . DBCHARSET,
            DBUSER,
            DBPASS
        );
    }
    
    public function dataProcess($query, $getDataAll = true) {
        // $conn = getConnect();
        $stmt = $this->connect->prepare($query);
        $stmt->execute();
        if ($getDataAll) {
            return $stmt->fetchAll();
        }
        return $stmt->fetch();
    }
}
