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
   <title>THÊM PHÒNG BAN</title>
   <style>
      .title {
         margin-top: 20px;
      }
   </style>
</head>

<body>
   <div class="container">
      <h2 class="title"> THÊM PHÒNG BAN</h2>
      <form action="../Controller/C_PhongBan.php" method="post">
         <div class="form-group">
            <lable for="idpb">Mã Phòng Ban</lable>
            <input type="text" class="form-control" name="idpb" id="idpb" />
         </div>
         <div class="form-group">
            <lable for="tenpb">Tên Phòng Ban</lable>
            <input type="text" class="form-control" name="tenpb" id="tenpb" />
         </div>
         <div class="form-group">
            <lable for="mota">Mô Tả</lable>
            <input type="text" name="mota" class="form-control" id="mota" />
         </div>
         <button name="btnThemPB" class="btn btn-success">Thêm Phòng Ban</button>
      </form>
   </div>
</body>

</html>