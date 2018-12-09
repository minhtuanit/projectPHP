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
<?php 
     include 'Service/sachService.php';
    $sachsv = new sachService();

    $sach = $sachsv->GetSachByMaSach($_GET['masach']);
?>
<body>
    <form action="sachController.php" class="form-inline" style="text-align: center;">
        <div style="padding-top: 20px;" class="form-group"><label>Mã sách:</label><input type="text" name="masach" value="<?php echo $sach->masach ?>" class="form-control"><br></div>
        <br>
        <div style="padding-top: 20px;" class="form-group"><label>Tên sách:</label><input type="text" value="<?php echo $sach->tensach ?>" name="tensach" class="form-control"></div>
        <br>
        <div style="padding-top: 20px;" class="form-group"><label>Số lượng:</label><input type="text" value="<?php echo $sach->soluong ?>" name="soluong" class="form-control"></div>
        <br>
        <div style="padding-top: 20px;" class="form-group"><label>Gía:</label><input type="text" value="<?php echo $sach->gia ?>" name="gia" class="form-control"></div>
        <br>
        <div style="padding-top: 20px;" class="form-group"><label>Mã loại:</label><input type="text" value="<?php echo $sach->maloai ?>" name="maloai" class="form-control"></div>
        <br>
        <div style="padding-top: 20px;" class="form-group"><label>Số tập:</label><input type="text" value="<?php echo $sach->sotap ?>" name="sotap" class="form-control"></div>
        <br>
        <div style="padding-top: 20px;" class="form-group"><label>Tác giả:</label><input type="text" value="<?php echo $sach->tacgia ?>" name="tacgia" class="form-control"></div>
        <br>
        <div style="padding-top: 20px;" class="form-group"><label>Nội dung:</label><input type="text" value="<?php echo $sach->noidung ?>" name="noidung" class="form-control"></div>
        <br>
        <button class="btn btn-primary">Sửa Sách</button>
    </form>
</body>
</html>
