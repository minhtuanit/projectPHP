<?php
    include 'Entity/hoadon.php';
    include 'Entity/chitiethoadon.php';
    class thanhtoanDAO{
        var $conn;
        function __construct(){
            $this->conn =  mysqli_connect("localhost", "root", "", "projectphp");
        }
        
        public function ThanhToanHD($listcart,$khachhang){
            $sql = "insert into hoadon values('$khachhang->makh','2012-12-12',0)";
            mysqli_set_charset($this->conn, 'UTF8');
            if( $this->conn->query($sql) === TRUE){
               
            }
            else{
              
            }
        }
        public function GetMaxMaHD(){

        }


    }

?>
