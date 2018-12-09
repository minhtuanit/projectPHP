<?php
    include '../Service/dangnhapService.php';
    $dangnhapSV = new dangnhapService();
    if(isset( $_GET['tendn']) && isset($_GET['matkhau'])){
        $tendn = $_GET['tendn'];
        $matkhau = $_GET['matkhau'];
        $khachhang = $dangnhapSV->kiemtradn($tendn, $matkhau);
        if( $khachhang != null ){
            session_start();
            $_SESSION["khachhang"] = $khachhang;
            header('Location: ../index.php');
        }
        else{
            header('Location: ../login.php?tendn=1&matkhau=1');
        }
    }

?>