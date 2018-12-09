<?php
    include 'Entity/sach.php';
    class sachDAO{
        var $conn;
        function __construct(){
            $this->conn =  mysqli_connect("localhost", "root", "", "projectphp");
        }
        
        public function GetListSachByLoai($loai){
                $array = array();
                $sql = "select * from sach where maloai='$loai'";
                mysqli_set_charset($this->conn, 'UTF8');
                $query = mysqli_query($this->conn, $sql);
                if( mysqli_num_rows($query) > 0 ){
                    while($res = mysqli_fetch_array($query)){
                        $sach = new sach($res[0], $res[1],$res[2],$res[3],$res[4],$res[5],$res[6],$res[7],$res[8],$res[9]);
                        $array[] = $sach;
                        
                    }
                }
                return $array;
            }
            public function GetSachByMaSach($masach){
                $sql = "select * from sach where masach='$masach'";
                mysqli_set_charset($this->conn, 'UTF8');
                $query = mysqli_query($this->conn, $sql);
                if( mysqli_num_rows($query) > 0 ){
                    while($res = mysqli_fetch_array($query)){
                        $sach = new sach($res[0], $res[1],$res[2],$res[3],$res[4],$res[5],$res[6],$res[7],$res[8],$res[9]);
                        return $sach;
                    }
                }
                return null;
                
            }

             public function GetListSach(){
                $array = array();
                $sql = "select * from sach";
                mysqli_set_charset($this->conn, 'UTF8');
                $query = mysqli_query($this->conn, $sql);
                if( mysqli_num_rows($query) > 0 ){
                    while($res = mysqli_fetch_array($query)){
                        $sach = new sach($res[0], $res[1],$res[2],$res[3],$res[4],$res[5],$res[6],$res[7],$res[8],$res[9]);
                        $array[] = $sach;
                        
                    }
                }
                return $array;
            }
             public function ThemSach($masach, $tensach, $soluong, $gia, $maloai, $sotap, $anh, $tacgia, $noidung)
    {
        $sql = "INSERT INTO sach(masach, tensach, soluong, gia, maloai, sotap, anh, ngaynhap, tacgia, noidung) VALUES ('$masach', '$tensach', '$soluong', '$gia', '$maloai', '$sotap', '$anh', '2015-12-12', '$tacgia', '$noidung')";
        mysqli_set_charset($this->conn, 'UTF8');
        return mysqli_query($this->conn, $sql);
    }
    public function XoaSach($masach)
    {
        $sql = "DELETE FROM sach WHERE masach='$masach' ";
        mysqli_set_charset($this->conn, 'UTF8');
        return mysqli_query($this->conn, $sql);
    }
    public function SuaSach($masach, $tensach, $soluong, $gia, $maloai, $sotap, $anh, $ngaynhap, $tacgia, $noidung)
    {
        $sql = "UPDATE sach SET tensach='$tensach',soluong='$soluong',gia='$gia',maloai='$maloai',sotap='$sotap',anh='$anh'tacgia='$tacgia',noidung='$noidung' WHERE masach= '$masach' ";
        mysqli_set_charset($this->conn, 'UTF8');
        return mysqli_query($this->conn, $sql);
    }

    public function TimKiemTheoTen($value){
        $array = array();
        $sql = "select * from sach where tensach like '%$value%'";
        mysqli_set_charset($this->conn, 'UTF8');
        $query = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($query) > 0) {
            while ($res = mysqli_fetch_array($query)) {
                $sach = new sach($res[0], $res[1], $res[2], $res[3], $res[4], $res[5], $res[6], $res[7], $res[8], $res[9]);
                $array[] = $sach;

            }
        }
        return $array;
    }

    }

?>
