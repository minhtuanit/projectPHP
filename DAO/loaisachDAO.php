<?php
    include 'Entity/loaisach.php';
    
    class loaisachDAO
    {
        var $conn;
        function __construct(){
            $this->conn =  mysqli_connect("localhost", "root", "", "projectphp");
        }
        
        public function GetListLoaiSach(){
            $array = array();
            $sql = "select * from loai";
            mysqli_set_charset($this->conn, 'UTF8');
            $query = mysqli_query($this->conn, $sql);
            if( mysqli_num_rows($query) > 0 ){
                while($res = mysqli_fetch_array($query)){
                    $loai = new loaisach($res[0], $res[1]);
                    $array[] = $loai;
                }
            }
            return $array;
        }

        public function XoaLoai($maloai){
            $sql = "delete from loai where maloai='$maloai'";
            $query = mysqli_query($this->conn, $sql);
        }

        public function GetLoaiSach($maloai){
            $sql = "select * from loai where maloai='$maloai'";
            mysqli_set_charset($this->conn, 'UTF8');
            $query = mysqli_query($this->conn, $sql);
            if( mysqli_num_rows($query) > 0 ){
                while($res = mysqli_fetch_array($query)){
                    $loai = new loaisach($res[0], $res[1]);
                    return $loai;
                }
            }
            return null;
        }
         public function SuaLoai($maloai,$tenloai){
            $sql = "update loai set maloai='$maloai', tenloai='$tenloai' where maloai='$maloai'";
            mysqli_set_charset($this->conn, 'UTF8');
            $query = mysqli_query($this->conn, $sql);
        }
        public function ThemLoai($maloai,$tenloai){
            $sql = "insert loai values('$maloai','$tenloai')";
            mysqli_set_charset($this->conn, 'UTF8');
            mysqli_query($this->conn, $sql);
        }
    }
?>