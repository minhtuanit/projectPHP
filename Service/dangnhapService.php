<?php
    include '../DAO/dangnhapDAO.php';
    class dangnhapService{
          var $dangnhapDAO;
          function __construct(){
              $this->dangnhapDAO = new dangnhapDAO();
          }
          
          function kiemtradn($tendn,$matkhau){
              return $this->dangnhapDAO->kiemtradn($tendn, $matkhau);
            
          }
    }
?>