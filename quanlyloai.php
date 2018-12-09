<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
    include 'Service/loaisachService.php';
    $loaisachsv = new loaisachService();
    $list = $loaisachsv->GetListLoaiSach();
    if(isset($_GET['maloai'])){
      $loaisachsv->XoaLoai($_GET['maloai']);
    }
    $list = $loaisachsv->GetListLoaiSach();
?>


<div class="container">
  <h2>Quản lý loại</h2>
  <a href="themloai.php" class="btn btn-primary">Thêm loại</a>
  <table class="table">
    <thead>
      <tr>
        <th>Mã loại</th>
        <th>Tên loại</th>
        <th>Tùy chỉnh</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($list as $item) {?>
      <tr>
        <td><?php echo $item->maloai ?></td>
        <td><?php echo $item->tenloai ?></td>
        <td><a class="btn btn-primary" href="quanlyloai.php?maloai=<?php echo $item->maloai ?>">Xóa</a>
            <a class="btn btn-primary" href="sualoai.php?maloai=<?php echo $item->maloai?>">Sửa</a>
        </td>
      </tr>
      <?php }?>
    </tbody>
  </table>
</div>
</body>
</html>
