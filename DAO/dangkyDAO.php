<?php
    include 'Entity/khachhang.php';
    class dangkyDAO{
        var $conn;
        
        function __construct(){
            $this->conn =  mysqli_connect("localhost", "root", "", "projectphp");
        }
        
        public function DangKy($kh){
            $sql = "insert into khachhang values('$kh->hoten','$kh->diachi','$kh->sdt','$kh->email','$kh->tendn','$kh->pass','khachhang')";
            mysqli_set_charset($this->conn, 'UTF8');
            if( $this->conn->query($sql) === TRUE){
                return true;
            }
            else{
                return false;
            }
        }
        
    }

?>