I. Các bước để truy xuất CSDL MySQL bẳng PHP
   1. Thiết lập kết nối đến cơ sở dữ liệu 
   2. Lựa chọn cơ sử dữ liệu 
   3. Thực hiện truy vấn
   4. Xử lí dữ liệu
   5. Đóng kết nối

II. Bài tập áp dụng:
   - Tạo cơ sở dữ liệu: DULIEU (thống nhất tên cơ sở dữ liệu là như vậy)
      + Tạo bảng: NhanVien(IDNV, HoTen, IDPB, DiaChi) -- done
      + Tạo bảng: PhongBan(IDPB, TenPB, MoTa)   -- done
      + Tạo bảng: Admin(ID, Username, Password) -- done

   - Viết các trang: 
      + Xem thông tin NV.PHP: cho phép xem tất cả thông tin nhân viên bảng NhanVien --> (liên kết) Gọi đến trang XemthongtinNVPB.PHP -- done
      + Xem thông tin PB.PHP: cho phép xem thông tin của PhongBan và liệt kê tất cả nhân viên theo từng phòng ban -- done

   - Khi đăng nhập vào hệ thống:
      + Chèn thông tin bảng NhanVien -- done
      + Chèn thông tin bảng PhongBan -- done
      + Cập nhật lại hệ thống tin bảng PhongBan -- done
      + Xóa, xóa tất cả các nhân viên của bảng NhanVien, PhongBan
      
   - Khi không đăng nhập vào hệ thống:
      + Không có các form trên   -- done

   




   
