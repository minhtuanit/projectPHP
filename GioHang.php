<?php
include "./Entity/ItemInCart.php";
include "./Entity/ShoppingCart.php";
session_start();
$tongtien = 0;
if(isset($_SESSION['ShoppingCart'])){
    $list=$_SESSION['ShoppingCart'];
    $listcart = $list->listBook;
    foreach ($listcart as $value) {
      $tongtien += $value->soluong * $value->gia;
    }
}
else{
  $listcart = null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <script src="js/jquery.min.js" type="text/javascript" ></script>
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <link rel="stylesheet" type="text/css" href="css/comment.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/addons.min.css">
  <link rel="stylesheet" type="text/css" href="css/plugins.min.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
  <link rel="stylesheet" type="text/css" href="css/toolbar.css">
  <!-- <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
  <!-- <script src="js/owl.carousel.min.js"></script> -->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-3.2.1.min.js"></script>
  <!-- <script src="js/bootstrap.min.js"></script> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


</head>
<body id="ctl00_Body" class="canhcam homepage vi-vn">
  <div id="wrapper">
    <div class="topbar">
      <div class="container">
        <div class="quick-top-link pull-right">
          <div class="btn-group box-currency">
            <div class='hotline Module Module-162'>
              <div class='ModuleContent'><span>Hotline <em class="fa fa-caret-right"></em> </span><strong ><a style="color: #e5642f" href="tel:02873019777">028.1234.9777</a></strong>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <nav class="navbar yamm navbar-default">
      <div class="container">
        <div class="navbar-header brand">
          <div class='sitelogo Module'>
            <a href="index.php" target="_self">
              <img alt="Sách Khai Tâm" src="img/bookshop-logo.jpg" />
            </a>
          </div>
        </div>
        <div class="nav-inner">
          <div class="col-md-9 pull-right" style="margin-top: 15px">
            
          </div>
        </div>
      </div>
    </nav>
    <nav class="" style="background-color:#e5642f ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
          </button>
          <a class="navbar-brand" href="#" style="color: #fff">NHÀ SÁCH BOOK SHOP</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Tủ sách</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Hỗ trợ khách hàng<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Hướng dẫn mua hàng</a></li>
                <li><a href="#">Phương thức thanh toán</a></li>
                <li><a href="#">Phương thức giao hàng</a></li>
                <li><a href="#">Hướng dẫn đổi trả</a></li>
                <li><a href="#">Câu hỏi thường gặp</a></li>
              </ul>
            </li>
            <li><a href="#">Chăm sóc khách hàng</a></li>
            <li><a href="#">Giới thiệu</a></li>
            <li><a href="#">Góc chia sẻ</a></li>
            <li><a href="#">Điểm sách</a></li>
          </ul>
        </div>
      </div>
    </nav>
    
   
 
    <div class="full-content">
      <div class="container">
      <h2 text-align="center">Giỏ Hàng</h2>
      <?php if($listcart != null ){ ?>
     	<?php foreach ($listcart as $item){?>
        <div class="row">	
        <div class="col-md-4 col-sm-4 col-xs-12 text-center">
          <img alt="" src="<?php echo $item->anh?>" width="100" height="170">
          </div>
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="container-fluid">
             <h3><?php echo $item->tensach?></h3>
             <h5> <span style="color:red">Gía:</span> <?php echo $item->gia?></h5>
          </div>
          <form action="Entity/CheckOut.php">
          	<input type="number" value="<?php echo $item->soluong?>" name="soluong">
            <input type="hidden" name="masach" value="<?php echo $item->masach ?>">
            <input type="hidden" name="gh" value="1">
          	<button class="btn btn-primary">Nhập số lượng</button>
          </form>
        </div>
      	</div>
      	<hr>
  
      	<hr>
      	<?php }

          }?>
    </div>
        <div class="row"> 
        <div class="col-md-4 col-sm-4 col-xs-12 text-center">
          </div>
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="container-fluid">
            <h2><?php echo "Giá : ".$tongtien; ?></h2>
            <a href="Controller/thanhtoan.php" class="btn btn-primary">Thanh Toán</a>
          </div>
          
        </div>
    </div>
    
      
        
    </div>
    <footer>
      <div id="footer">
        <section class="bgend">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <section class="copyright">
                  Copyright &copy; 2015 - 2018 Book Shop
                </section>
              </div>
              <div class='col-md-4 Module Module-145'>
                <div class='ModuleContent'>
                  <section class="social">
                    <ul class="list-inline">
                      <li><a target="_blank" class="face" href="#"><em class="fa fa-facebook"></em></a>
                      </li>
                      <li><a class="youtube" href="#"><em class="fa fa-youtube"></em></a>
                      </li>
                      <li><a class="instagram" href="#"><em class="fa fa-instagram"></em></a>
                      </li>
                    </ul>
                  </section>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </footer>
</body>
</html>