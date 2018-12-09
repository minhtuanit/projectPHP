<?php 
     include 'Service/sachService.php';
     $sachsv = new sachService();
    if(isset( $_GET['maloai']) && isset($_GET['tenloai']) && isset($_GET['them'])){
    	$maloai = $_GET['maloai'];
        $tenloai = $_GET['tenloai'];
        $sachsv->ThemLoai($maloai,$tenloai);
       
    }
    else if(isset($_GET['sotap']) && isset($_GET['noidung']) && isset($_GET['tacgia'])&& isset( $_GET['masach']) && isset($_GET['tensach']) 
    	&& isset($_GET['soluong']) && isset($_GET['gia']) && isset($_GET['maloai'])){
       	$sachsv->SuaSach($_GET['masach'], $_GET['tensach'], $_GET['soluong'], $_GET['gia'], $_GET['maloai'], $_GET['sotap'],$_GET['anh'], $_GET['tacgia'], $_GET['noidung']);
    }
	
?>