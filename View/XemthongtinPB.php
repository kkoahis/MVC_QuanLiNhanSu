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
   <title>Thong Tin Phong Ban</title>
   <style>
      .title {
         margin-top: 20px;
      }
   </style>
</head>

<body>
   <form action="../Controller/C_NhanVien.php" method="POST">
      <div class="container">
         <h2 class="title">Thông Tin Phòng Ban</h2>
         <table class="table table-hover">
            <thead>
               <tr>
                  <th>IDPB</th>
                  <th>Tên Phòng Ban</th>
                  <th>Mô Tả</th>
                  <th>Thông Tin NVPB</th>
                  <!-- <th>Thao Tác</th> -->
               </tr>
            </thead>
            <tbody>
               <?php
               foreach ($PhongBanList as $PhongBan) {
               ?>
                  <tr>
                     <td>
                        <?php echo $PhongBan->id ?>
                     </td>
                     <td>
                        <?php echo $PhongBan->name ?>
                     </td>
                     <td>
                        <?php echo $PhongBan->mota ?>
                     </td>
                     <td>
                        <a href="../Controller/C_NhanVien.php?sidnvpb=<?php echo $PhongBan->id ?>" class="btn btn-outline-info btn-block" name="btn-nvpb">Chi Tiết</a>
                     </td>
                  </tr>
               <?php
               }
               ?>
            </tbody>
         </table>
      </div>
   </form>

</body>

</html>