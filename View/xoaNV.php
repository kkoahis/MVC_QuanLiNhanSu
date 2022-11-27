<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
   <title>Thong Tin Nhan Vien</title>
   <style>
      .title {
         margin-top: 20px;
      }
   </style>
</head>

<body>
   <form action="../Controller/C_NhanVien.php" method="POST">
      <div class="container">
         <h2 class="title">Xóa Nhân Viên</h2>
         <table class="table table-hover">
            <thead>
               <tr>
                  <th>IDNV</th>
                  <th>Họ Tên</th>
                  <th>IDPB</th>
                  <th>Địa Chỉ</th>
                  <th>Thao Tác</th>
               </tr>
            </thead>
            <tbody>
               <?php
                foreach ($nhanVienList as $nhanvien) {
               ?>
                  <tr>
                     <td>
                        <?php echo $nhanvien->id ?>
                     </td>
                     <td>
                        <?php echo $nhanvien->name ?>
                     </td>
                     <td>
                        <?php echo $nhanvien->idpb ?>
                     </td>
                     <td>
                        <?php echo $nhanvien->diachi ?>
                     </td>
                     <td>
                        <div class="form-check">
                           <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="<?php echo $nhanvien->id ?>" value="<?php echo $nhanvien->id ?>"> Chọn NV
                           </label>
                        </div>
                     </td>
                  </tr>
               <?php
               }
               ?>
            </tbody>
         </table>
         <button onclick="return confirm('Bạn có chắc chắn muốn xóa nhân viên này không?');" class="btn btn-outline-danger btn-block" name="btnDelete">Xóa Nhân Viên</button>
      </div>
   </form>

</body>

</html>