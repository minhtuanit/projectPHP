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
   include 'Service/sachService.php';
  $sachSV = new sachService();
  if(isset($_GET['masach'])){
    $sachSV->XoaSach($_GET['masach']);
  }
  $listsach = $sachSV->GetListSach();
?>
<div class="container">
  <h2>Quản lý sách</h2>
  <a href="themsach.php" class="btn btn-primary">Thêm sách</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Mã sách</th>
        <th>Tên sách</th>
        <th>Số lượng</th>
        <th>Gía</th>
        <th>Mã loại</th>
        <th>Số tập</th>
        <th>Tác giả</th>
        <th>Nội dung</th>
        <th>Chỉnh Sửa</th>
      </tr>
    </thead>
    <tbody>
       <?php foreach($listsach as $value){ ?>
      <tr>
        <td><?php echo $value->masach ?></td>
        <td><?php echo $value->tensach ?></td>
        <td><?php echo $value->soluong ?></td>
        <td><?php echo $value->gia ?></td>
        <td><?php echo $value->maloai ?></td>
        <td><?php echo $value->sotap ?></td>
        <td><?php echo $value->tacgia ?></td>
        <td><?php echo $value->noidung ?></td>
         <td>
            <a class="btn btn-primary" href="quanlysach.php?masach=<?php echo $value->masach ?>">Xóa</a>
            <a class="btn btn-primary" href="suasach.php?masach=<?php echo $value->masach?>">Sửa</a>
        </td>
      </tr>
     <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
