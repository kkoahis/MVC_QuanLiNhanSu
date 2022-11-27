<?php
include_once("../Model/M_PhongBan.php");
include_once("../Model/M_NhanVien.php");

class Ctrl_PhongBan
{
    public function __invoke()
    {
        if (isset($_GET['mod5'])) {
            include_once("../View/timkiempB.php");
        } 
        else if (isset($_POST['btnTimkiemPB'])) {
            $option = $_POST['optionSearch'];
            $searchValue = $_POST['search'];
            $modelPhongBan = new Model_PhongBan();
            $PhongBanList = $modelPhongBan->searchPhongBan($option, $searchValue);
            include_once("../View/XemthongtinPB.php");
        } 


        else if (isset($_GET['mod7'])){
            include_once("../View/themPB.php");
        }
        else if (isset($_POST['btnThemPB'])){
            $id = $_POST['idpb'];
            $ten = $_POST['tenpb'];
            $mota = $_POST['mota'];
            $modelPhongBan = new Model_PhongBan();
            $modelPhongBan->addPhongBan($id, $ten, $mota);
            
            $PhongBanList = $modelPhongBan->getAllPhongBan();
            include_once("../View/XemthongtinPB.php");
        }


        else if (isset($_GET['mod9'])){
            $modelPhongBan = new Model_PhongBan();
            $PhongBanList = $modelPhongBan->getAllPhongBan();
            include_once("../View/form_suaPB.php");
        }
        else if(isset($_POST['btnsuaPB'])){
            $idpb = $_POST['sellist1'];
            $modelPhongBan = new Model_PhongBan();
            $phongbanlist = $modelPhongBan->getPhongBanDetail($idpb);
            include_once("../View/suaPB.php");
        }
        else if(isset($_POST['btnEdit'])){
            $idpb = $_POST['idpb'];
            $tenpb = $_POST['tenpb'];
            $mota = $_POST['mota'];

            $modelPhongBan = new Model_PhongBan();
            $phongbanlist = $modelPhongBan->UpdatePhongBan($idpb, $tenpb, $mota);

            $PhongBanList = $modelPhongBan->getAllPhongBan();
            include_once("../View/XemthongtinPB.php");
        }


        else if(isset($_GET['mod11'])){
            $modelPhongBan = new Model_PhongBan();
            $PhongBanList = $modelPhongBan->getAllPhongBan();
            include_once("../View/XoaPB.php");
        }
        else if(isset($_POST['btnDelete'])){
            $modelPhongBan = new Model_PhongBan();
            $IDPBList = $modelPhongBan->getAllPhongBanID();
            foreach($IDPBList as $idpb) {
                if(isset($_REQUEST[$idpb])) {
                    $modelPhongBan->deletePhongBan($_REQUEST[$idpb]);
                }
            }

            $PhongBanList = $modelPhongBan->getAllPhongBan();
            include_once("../View/XemthongtinPB.php");
        }
       

        else {
            $modelPhongBan = new Model_PhongBan();
            $PhongBanList = $modelPhongBan->getAllPhongBan();
            include_once("../View/XemthongtinPB.php");
        }
    }
};
$C_PhongBan = new Ctrl_PhongBan();
$C_PhongBan->__invoke();
