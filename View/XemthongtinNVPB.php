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
   <title>Xem Thong Tin NVPB</title>
   <style>
      .title {
         margin-top: 20px;
      }
   </style>
</head>

<body>
   <div class="container">
      <h2 class="title">Thông Tin Nhân Viên</h2>
      <table class="table table-hover">
         <thead>
            <tr>
               <th>IDNV</th>
               <th>Họ Tên</th>
               <th>IDPB</th>
               <th>Địa Chỉ</th>
               <!-- <th>Thao Tác</th> -->
            </tr>
         </thead>
         <tab>
            <?php
            foreach ($nhanvienList as $nvpb) {
            ?>
               <tr>
                  <td>
                     <?php echo $nvpb->id ?>
                  </td>
                  <td>
                     <?php echo $nvpb->name ?>
                  </td>
                  <td>
                     <?php echo $nvpb->idpb ?>
                  </td>
                  <td>
                     <?php echo $nvpb->diachi ?>
                  </td>
               </tr>
            <?php
            }
            ?>
            </tbody>
      </table>
      <button type="button" class="btn btn-secondary" onclick="history.back()">BACK</button>
   </div>
</body>

</html>