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
     include 'Service/loaisachService.php';
    $loaisachsv = new loaisachService();

    $loaisach = $loaisachsv->GetLoai($_GET['maloai']);
?>
<body>
    <form action="loaiController.php" class="form-group" style="text-align: center;">
        <label>Mã Loại:</label><input type="text" name="maloai" value="<?php echo $loaisach->maloai ?>" class="form-group"><br>
        <div><label>Tên loại:</label><input type="text" value="<?php echo $loaisach->tenloai ?>" name="tenloai" class="form-group"></div>
        <button class="btn btn-primary">Sửa Loại</button>
    </form>
</body>
</html>
