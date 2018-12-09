<?php 
    include 'DAO/sachDAO.php';
    class sachService{
        var $sachDAO;
        
        function __construct(){
            $this->sachDAO = new sachDAO();
            
        }
 
        public function GetListSachByLoai($loai){
           return  $this->sachDAO->GetListSachByLoai($loai);
        }
        
        public function GetSachByMaSach($masach){
           return $this->sachDAO->GetSachByMasach($masach);
        }

        public function GetListSach(){
           return $this->sachDAO->GetListSach();
        }

        public function ThemSach($masach, $tensach, $soluong, $gia, $maloai, $sotap, $anh, $tacgia, $noidung){
            $this->sachDAO->ThemSach($masach, $tensach, $soluong, $gia, $maloai, $sotap, $anh, $tacgia, $noidung);
        }

        public function XoaSach($masach){
            $this->sachDAO->XoaSach($masach);
        }

        public function SuaSach($masach, $tensach, $soluong, $gia, $maloai, $sotap, $anh, $tacgia, $noidung){
            $this->sachDAO->SuaSach($masach, $tensach, $soluong, $gia, $maloai, $sotap, $anh, $tacgia, $noidung);
        }
        public function TimKiemTheoTen($value){
            return $this->sachDAO->TimKiemTheoTen($value);
        }
    }
?>