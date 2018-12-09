<?php
    include 'DAO/loaisachDAO.php';
    class loaisachService{
       var $loaisachDAO;
       
       function __construct(){
           $this->loaisachDAO = new loaisachDAO();
       }
       
       public function GetListLoaiSach(){
           return $this->loaisachDAO->GetListLoaiSach();
       }

       public function XoaLoai($maloai){
            $this->loaisachDAO->XoaLoai($maloai);
       }
       public function GetLoai($maloai){
          return $this->loaisachDAO->GetLoaiSach($maloai);
       }
       public function SuaLoai($maloai,$tenloai){
            $this->loaisachDAO->SuaLoai($maloai,$tenloai);
       }
       public function ThemLoai($maloai,$tenloai){
            $this->loaisachDAO->ThemLoai($maloai,$tenloai);
       }
    }
?>