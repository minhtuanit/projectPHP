<?php
	include "ItemInCart.php";
	include "ShoppingCart.php";
	session_start();
	if($_SERVER["REQUEST_METHOD"] == "GET" && !isset($_GET["gh"])) {
	    $masach = $_GET["masach"];
	    $tensach= $_GET["tensach"];
	    $gia = $_GET["gia"];
	    $maloai = $_GET["maloai"];
	    $anh = $_GET["anh"];
	    $tacgia = $_GET["tacgia"];
	    $itemInCart = new ItemInCart($masach, $tensach, 1, $gia, $maloai, $anh, $tacgia);  
	    
	  
	    if (isset($_SESSION["ShoppingCart"])){
	        $list = $_SESSION["ShoppingCart"];
	        $list->addItem($itemInCart);
	        $_SESSION["ShoppingCart"] = $list;
	      
	    }
	    else{
	        $list = new ShoppingCart();
	        $list->addItem($itemInCart);
	        $_SESSION["ShoppingCart"] = $list;

	    }
	            header('location: ../GioHang.php');
	}
	else if(isset($_GET['gh'])){
		$itemInCart = new ItemInCart($_GET['masach'], 0, $_GET['soluong'], 0, 0, 0, 0);  
	    
	  
	    if (isset($_SESSION["ShoppingCart"])){
	        $list = $_SESSION["ShoppingCart"];
	        $list->addItem1($itemInCart);
	        $_SESSION["ShoppingCart"] = $list;
	      
	    }
	    else{
	        $list = new ShoppingCart();
	        $list->addItem1($itemInCart);
	        $_SESSION["ShoppingCart"] = $list;

	    }
	            header('location: ../GioHang.php');
	}
	
?>