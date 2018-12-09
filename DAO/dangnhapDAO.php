<?php
include '../Entity/khachhang.php';
 class dangnhapDAO{
    var $conn;
    function __construct(){
        $this->conn =  mysqli_connect("localhost", "root", "", "projectphp");
    }
    
    public function kiemtradn($tendn,$matkhau){
        $khachhang = null;
        $sql = "select * from khachhang where tendn='$tendn' and pass='$matkhau'";
        mysqli_set_charset($this->conn, 'UTF8');
        $query = mysqli_query($this->conn, $sql);
        if( mysqli_num_rows($query) > 0 ){
            while($res = mysqli_fetch_array($query)){
                $khachhang = new khachhang($res[0], $res[1], $res[2],$res[3], $res[4], $res[5], $res[6], $res[7]);
            }
        }
        return $khachhang;
    }
}
?>