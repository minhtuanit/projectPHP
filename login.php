<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Đăng Nhập</title>
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



  <style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 100%;
        margin: auto;
    }
    </style>
	<?php 
	
	    
	?>


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
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-5">
                <div class="cart-top">                                                    
                  <div class="btn-group btn-block">
                    <div data-toggle="dropdown" data-loading-text="Loading..." class="heading dropdown-toggle">
                      <div class="cart-inner pull-right">
                        <div class="icon-cart">
                          <i class="fa fa-cart-plus"></i>
                        </div>
                        <h4>Giỏ hàng</h4>
                        <a class="heading-cart" href="#"><span>0 Sản phẩm<i class='fa fa-angle-down'></i></span></a>
                      </div>
                    </div>
                  </div>
                  <input type="submit" name="ctl00$QuickViewCartListControl1$btnload" value="" id="ctl00_QuickViewCartListControl1_btnload" class="buttoncart" style="display: none;" />
                </div>
              </div>
            </div>
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
    
    <section class="full-content">
      <form id="Login" method="get" action="Controller/loginController.php">
        <div class="form-group">
            <input type="text" name="tendn" class="form-control"placeholder="Nhập Tên Tài Khoản">
        </div>
        <div class="form-group">
            <input type="password" name="matkhau" class="form-control"placeholder="Nhập Mật Khẩu">
        </div>
        <?php 
        if(isset($_GET['tendn']) && isset($_GET['matkhau']))
        {?>
        <div class="alert alert-danger">
  			Sai tên tài khoản hoặc mật khẩu
		</div>
        <?php 
        }
        ?>
        <br>
        <div style='margin-left: 500px;'>
	        <button  type="submit"  class="btn btn-default">Đăng Nhập</button>
        </div>
     </form>
    </section>
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
    </div>
</body>
</html>