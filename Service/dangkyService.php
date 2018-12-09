<?php
    include 'DAO/dangkyDAO.php';
    class dangkyService{
        var $dangkyD;
        
        function __construct(){
            $this->dangkyD = new dangkyDAO();
        }
        
        public function DangKy($kh){
            return $this->dangkyD->DangKy($kh);
        }
    }

?>