<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
   <!-- jQuery library -->
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
   <!-- Popper JS -->
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <!-- Latest compiled JavaScript -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
   <title>THÊM NHÂN VIÊN</title>
   <style>
      .title {
         margin-top: 20px;
      }
   </style>
</head>

<body>
   <div class="container">
      <h2 class="title"> CHỈNH SỬA NHÂN VIÊN</h2>
      <form action="../Controller/C_NhanVien.php" method="POST">
         <div class="form-group">
            <lable for="idnv">Mã Nhân Viên</lable>
            <input type="text" class="form-control" name="idnv" value="<?php echo $nhanVienList->id ?> " readonly />
         </div>
         <div class="form-group">
            <lable for="tennv">Tên Nhân Viên</lable>
            <input type="text" class="form-control" name="tennv" value="<?php echo $nhanVienList->name ?> " />
         </div>
         <div class="form-group">
            <lable for="tennv">Phòng Ban</lable>

            <select name='sellist2' value="<?php echo $nhanVienList->IDPB ?>">
               <?php
               foreach ($phongbanlist as $IDPB)
                  echo "<option value=$IDPB>$IDPB</option>";
               ?>
            </select>
         </div>
         <div class="form-group">
            <lable for="diachi">Địa Chỉ Hiện Tại</lable>
            <input type="text" class="form-control" name="diachi" value="<?php echo $nhanVienList->diachi ?> " />
         </div>
         <button name="btnEdit" class="btn btn-success">Chỉnh Sửa Nhân Viên</button>
      </form>
   </div>
</body>

</html>