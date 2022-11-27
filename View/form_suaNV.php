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
   <title>CẬP NHẬT NHÂN VIÊN</title>
   <style>
      .title {
         margin-top: 20px;
      }
   </style>
</head>

<body>
   <div class="container">
      <h2 class="title"> CẬP NHẬT NHÂN VIÊN</h2>
      <form action="../Controller/C_NhanVien.php" method="POST">
         <div class="form-group">
            <lable for="idnv">Chọn Mã Nhân Viên</lable>

            <select name="sellist1">
                        <option value="" hidden>Chọn ID nhân viên</option>
                        <?php 
                            foreach($nhanVienList as $Employee) {
                                echo "<option value='$Employee->id'>$Employee->id</option>";
                            }
                        ?>
                        
                    </select>
         </div>
        
         <button name="btnSuaNV" class="btn btn-success">Tiếp tục</button>
         <button type="button" class="btn btn-secondary" onclick="history.back()">BACK</button>
      </form>
   </div>
</body>

</html>