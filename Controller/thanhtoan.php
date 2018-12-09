<?php 
	session_start();
	$tongtien = 0;
	if( !isset($_SESSION["khachhang"])){
		?>
		<a href="../login.php">Chưa login Click đây để login!</a>
		<?php
	}
	else{
	if(isset($_SESSION['ShoppingCart'])){
    	echo "Thanh toán thành công";
    	unset($_SESSION['ShoppingCart']);
    ?>
    <a href="../giohang.php">Click để về giỏ hàng!</a>
    <?php
    }
    else{
    	echo "Không có giỏ hàng";

    }
	}
?>