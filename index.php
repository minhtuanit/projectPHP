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



  <style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 100%;
        margin: auto;
    }
    </style>
<?php 
   
?>

<?php 
    include 'Entity/khachhang.php';
    include 'Service/sachService.php';
    include 'Service/loaisachService.php';
    $loaisach = new loaisachService();
    $sachService = new sachService();
    $array = $loaisach->GetListLoaiSach();
    $araysach;
    if(isset($_GET['maloai'])){
        $maloai = $_GET['maloai'];
        $arraysach = $sachService->GetListSachByLoai($maloai); 
       
    }
    else if(isset($_GET['search'])){
        $ten=$_GET['search'];
        $arraysach = $sachService->TimKiemTheoTen($ten);
    }
    else{
        $arraysach = $sachService->GetListSachByLoai("1");  
    }
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
          <?php session_start(); if(isset($_SESSION['khachhang'])){ ?>
          <div class="btn-group box-user">
          	<p> Xin chào : <b><?php echo $_SESSION['khachhang']->hoten;?></b></p>  
          	<a style="color: #e5642f; margin-right: 12px" class="" rxel="nofollow" href="Controller/dangxuatController.php">Đăng Xuất</a>
            <?php if( strcmp($_SESSION['khachhang']->quyen,"admin") == 0 ){ ?>
                <a style="color: #e5642f; margin-right: 12px" class="" rxel="nofollow" href="quanly.php">Quản lý</a
            <?php }?>
          </div>
          <?php }else{?>
          <div class="btn-group box-user">
            <a style="color: #e5642f; margin-right: 12px" class="" rxel="nofollow" href="login.php">Đăng nhập</a>
            <a style="color: #e5642f" class="" rel="nofollow" href="register.php">Đăng ký</a>
          </div>
          <?php }?>
        </div>
      </div>
    </div>
    <nav class="navbar yamm navbar-default">
      <div class="container">
        <div class="navbar-header brand">
          <div class='sitelogo Module'>
            <a href="Trangchu.html" target="_self">
              <img alt="Sách Khai Tâm" src="img/bookshop-logo.jpg" />
            </a>
          </div>
        </div>
        <div class="nav-inner">
          <div class="col-md-9 pull-right" style="margin-top: 15px">
            <div class="row">
              <div class="col-lg-9 col-md-9 col-sm-6 col-xs-7">
                <div class="search-box search-wrapper clearfix">
                  <div class="search_block">
                    <div class='Module Module-154'>
                      <div class='ModuleContent'>
                        <div class="pav-verticalmenu box-highlighted hidden-xs">
                          <div class="filter_type category_filter input-group-addon group-addon-select icon-select">
                            
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id='ctl00_SearchInput1_pnlSearch' class='productsearchbox search-input-wrapper clearfix clearfixs input-group'>
                      <form action="index.php">
                      <input onfocus="javascript:watermarkEnter(this, &#39;&#39;);" onblur="javascript:watermarkLeave(this, &#39;&#39;);" name="search" type="text" id="ctl00_SearchInput1_txtSearch" title="Tìm kiếm" class="form-control" autocomplete="off" placeholder="Nhập từ khóa cần tìm" />
                      <button id="ctl00_SearchInput1_btnSearch" class="btn btn-default">
                        <span class='btnse'><i class='fa fa-search'></i></span>
                      </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <a href="GioHang.php">G iỏ Hàng </a>
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
      <div class="container">
        <div class="row">
          <div id="ctl00_divCenter" class="middle-fullwidth">
            <section class="pav-container">
              <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class='ModuleContent'>
                  <div class="header-menu dropdown-toggle nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link header-nav" id="navbarDropdown" data-toggle="dropdown" role="button"><i class="fa fa-bars"></i><span> Tất cả Danh Mục</span></a>
                    <ul class="header-list-menu dropdown-menu" role="menu">
                    <?php foreach ($array as $value){?>
                             <li><a href="index.php?maloai=<?php echo $value->maloai?>" target="_self"><span class="menu-title"><?php echo $value->tenloai?></span></a></li>
                    <?php }?>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div id="main">
                  <div id="carousel-simple" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators" style="bottom: 0px">
                      <li data-target="#carousel-simple" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-simple" data-slide-to="1"></li>
                      <li data-target="#carousel-simple" data-slide-to="2"></li>
                      <li data-target="#carousel-simple" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <a href="#"><img src="img/chiasesachhay.png" alt=""></a>
                      </div>
                      <div class="item">
                        <a href="#"><img src="img/duongsinhdoisonghangngay.png" alt=""></a>
                      </div>
                      <div class="item">
                        <a href="#"><img src="img/nhagiakim.png" alt=""></a>
                      </div>
                      <div class="item">
                        <a href="#"><img src="img/sach-20-11.png" alt=""></a>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </section>
              <section class="col-sm-12 col-xs-12 mrb20">
                <div class="row">
                  <div class='product-bg Module Module-139'>
                    <div class='ModuleContent'>
                      <div class="col-xs-12 col-md-12 col-lg-3 img-zone mrb20">
                          <div class="banner-image">
                            <a class="hidden-md hidden-sm hidden-xs" href="#" target="_self" title="Sách mới tuyển chọn">
                                <img src="img/sach-moi-tuyen-chon.png" alt="Sách mới tuyển chọn">
                            </a>
                            <h2 class="hidden-lg">
                              <a href="#" target="_self" title="Sách mới tuyển chọn">Sách mới tuyển chọn</a>
                            </h2>
                          </div>
                      </div>
                      <div class="col-md-12 col-lg-9 products-block mrb20">
                          <?php foreach($arraysach as $value){?>
                          <div class="col-lg-3 col-sm-3 col-xs-6 product-col">
                            <div class="product-variant">
                                <div class="product-img relative">
                                  <a class="img" href="#" target="_self" title="Lẽ thường">
                                      <figure>
                                        <img src="<?php echo $value->anh ?>" alt="image">
                                        <figcaption>
                                        </figcaption>
                                      </figure>
                                  </a>
                                </div>
                                <div class="product-description">
                                  <div class="product-meta">
                                      <h2 class="product-name">
                                        <a href="#" target="_self">
                                          <span class="autoCutStr_45"><?php echo $value->tensach ?></span>
                                        </a>
                                      </h2>
                                      <h3 class="product-sign">
                                        <a class="autoCutStr_30" href="/sach?tacgia=Thomas+Paine"><?php echo $value->tacgia ?></a>
                                      </h3>
                                    </div>
                                  <div class="row">
                                      <div class="col-md-6 price">
                                       
                                        <div class="row">
                                          <span class="price-new"><?php echo $value->gia?></span>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 cart-button">
                                        <a href="xemchitiet.php?masach=<?php echo $value->masach;?>" class="button btn-cart cart" class="cart-ifarme">
                                            Xem Chi Tiết
                                        </a>
                                      </div>
                                  </div>
                                  <div class="product-label">
                                  </div>
                                </div>
                            </div>
                          </div>
                          <?php }?>
                      </div>
                      <div class="col-xs-12 col-md-12 col-lg-3 img-zone mrb20">
                          <div class="banner-image">
                            <a class="hidden-md hidden-sm hidden-xs" href="#" target="_self" title="Sách bán chạy">
                                <img src="img/untitled-1.png" alt="Sách bán chạy">
                            </a>
                            <h2 class="hidden-lg">
                                <a href="#" target="_self" title="Sách bán chạy">Sách bán chạy</a>
                            </h2>
                          </div>
                      </div>                    
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section class="col-xs-12 col-sm-12">
                <div class='box pavreassurances clearfix Module Module-138'>
                  <div class='ModuleContent'>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 column">
                      <div class="reassurances-left">
                        <span class="icon-name pull-left fa fa-truck"></span>
                        <div class="description media-body">
                          <h4>Giao hàng miễn phí</h4>
                          <p>Từ 120.000đ ở HCM, và không áp dụng ở tỉnh</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 column">
                      <div class="reassurances-left">
                        <span class="icon-name pull-left fa fa-smile-o"></span>
                        <div class="description media-body">
                          <h4>Giá trị cộng thêm</h4>
                          <p>Tặng bookmark danh ngôn<br />
                      Bao sách miễn phí (theo yêu cầu)<br /></p>
                        </div>
                      </div>
                    </div>
                  <!--end step 3-->
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 column">
                      <div class="reassurances-left">
                        <span class="icon-name pull-left fa fa-comments-o"></span>
                        <div class="description media-body">
                          <h4>Đổi trả hàng</h4>
                          <p>Hàng bị lỗi được đổi trả nhanh chóng</p>
                        </div>
                      </div>
                    </div>
                    <!--end step 3-->
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 column">
                      <div class="reassurances-left">
                        <span class="icon-name pull-left fa fa-heart"></span>
                        <div class="description media-body">
                          <h4>Đánh giá</h4>
                          <p>Nhận xét của khách hàng là rất quan trọng</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
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