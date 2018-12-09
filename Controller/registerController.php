<?php
    include 'Service/dangkyService.php';
    $dangkySV = new dangkyService();
    $kh = null;
    if( $_SERVER["REQUEST_METHOD"] == "GET"){
        $kh = new khachhang($_GET['makh'], $_GET['hoten'], $_GET['diachi'], $_GET['sdt'], $_GET['email']
            , $_GET['tendn'], $_GET['pass'], 'khachhang');
        if($dangkySV->DangKy($kh) == true){
            
        }
    }
    
    
?>