
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
   <title>Tim Kiem Nhan Vien</title>
   <style>
      .title {
         margin-top: 20px;
      }
   </style>
</head>

<body>
   <div class="container">
      <h2 class="title">TÌM KIẾM NHÂN VIÊN</h2>
      <form action="../Controller/C_NhanVien.php" method="POST" name="form2">
         <div class="form-group">
            <lable>Nhập thông tin tìm kiếm:</lable>
            <input type="text" class="form-control" name="search" id="search" />
         </div>
         <div class="form-group">
            <select name="optionSearch" class="custom-select">
               <option value="searchManv">Tìm Kiếm Theo Mã Nhân Viên</option>
               <option value="searchTennv">Tìm Kiếm Theo Tên Nhân Viên</option>
               <option value="searchDiachinv">Tìm Kiếm Theo Địa Chỉ Nhân Viên</option>
            </select>
         </div>
         <button name="btnTimkiemNV" class="btn btn-info" onclick="checkLogin()">Tìm Kiếm</button>
      </form>
   </div>
</body>
<script>
   function checkLogin() {
      var keyUser = document.form2.search.value;
      if (keyUser === "") {
         window.alert("Xin hãy nhập giá trị tìm kiếm");
      }
   }
</script>

</html>