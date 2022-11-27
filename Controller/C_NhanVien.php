<?php
include_once("../Model/M_NhanVien.php");
include_once("../Model/M_PhongBan.php");

class Ctrl_NhanVien
{
    public function __invoke()
    {
        if (isset($_GET['sidnvpb'])) {
            $modelNhanVien = new Model_NhanVien();
            $nhanvienList = $modelNhanVien->getNhanVienPhongBan($_GET['sidnvpb']);
            include_once("../View/XemthongtinNVPB.php");
        }

        else if (isset($_GET['mod4'])) {
            include_once("../View/timkiemNV.php");
        } 
        else if (isset($_POST['btnTimkiemNV'])) {
            $option = $_POST['optionSearch'];
            $searchValue = $_POST['search'];
            $modelNV = new Model_NhanVien();
            $nhanVienList = $modelNV->searchNhanVien($option, $searchValue);
            include_once("../View/XemthongtinNV.php");
        } 


        else if(isset($_GET['mod6'])){
            $phongban = new Model_PhongBan();
            $phongbanList = $phongban->getAllPhongBanID();
            include_once("../View/themNV.php");
        }
        else if(isset($_POST['btnThemNV'])){
            $idnv = $_POST['idnv'];
            $ten = $_POST['tennv'];
            $idpb = $_POST['sellist1'];
            $diachi = $_POST['diachi'];
            $nhanvien = new Model_NhanVien();
            $nhanvien->addNhanVien($idnv, $ten, $idpb, $diachi);
            
            $nhanVienList = $nhanvien->getAllNhanVien();
            include_once("../View/XemthongtinNV.php");
        }


        else if(isset($_GET['mod8'])){
            $modelNhanVien = new Model_NhanVien();
            $nhanVienList = $modelNhanVien->getAllNhanVien();
            include_once("../View/form_suaNV.php");
        }
        else if(isset($_POST['btnSuaNV'])){
            $idnv = $_POST['sellist1'];
            $modelNhanVien = new Model_NhanVien();
            $nhanVienList = $modelNhanVien->getNhanVienDetail($idnv);

            $modelPB = new Model_PhongBan();
            $phongbanlist = $modelPB->getAllPhongBanID();
            include_once("../View/suaNV.php");
        }
        else if (isset($_POST['btnEdit'])){
            $idnv = $_POST['idnv'];
            $name = $_POST['tennv'];
            $idpb = $_POST['sellist2'];
            $diachi = $_POST['diachi'];

            $modelNhanVien = new Model_NhanVien();
            $nhanVienLists = $modelNhanVien->updateNhanVien($idnv, $name, $idpb, $diachi);

            $nhanVienList = $modelNhanVien->getAllNhanVien();
            include_once("../View/XemthongtinNV.php");
        }

        else if (isset($_GET['mod10'])){
            $modelNV = new Model_NhanVien();
            $nhanVienList = $modelNV->getAllNhanVien();
            include_once("../View/XoaNV.php");
        }
        else if (isset($_POST['btnDelete'])){
            $Employee = new Model_NhanVien();
            $IDNVList = $Employee->getAllNhanVienId();
            foreach($IDNVList as $IDNV) {
                if(isset($_REQUEST[$IDNV])) {
                    $Employee->deleteNhanVien($_REQUEST[$IDNV]); 
                }
            }

            $nhanVienList = $Employee->getAllNhanVien();
            include_once("../View/XemthongtinNV.php");
        }
        
        else {
            $modelNV = new Model_NhanVien();
            $nhanVienList = $modelNV->getAllNhanVien();
            include_once("../View/XemthongtinNV.php");
        }
    }
};

$C_NhanVien = new Ctrl_NhanVien();
$C_NhanVien->__invoke();
