<?php 
     include 'Service/loaisachService.php';
     $sachsv = new loaisachService();
    if(isset( $_GET['maloai']) && isset($_GET['tenloai']) && isset($_GET['them'])){
    	$maloai = $_GET['maloai'];
        $tenloai = $_GET['tenloai'];
        $sachsv->ThemLoai($maloai,$tenloai);
        header('Location: quanlyloai.php');
    }
    else if(isset( $_GET['maloai']) && isset($_GET['tenloai'])){
        $maloai = $_GET['maloai'];
        $tenloai = $_GET['tenloai'];
        $sachsv->SuaLoai($maloai,$tenloai);
        header('Location: quanlyloai.php');
       
    }
	
?>