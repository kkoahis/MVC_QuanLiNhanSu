<?php
include_once("E_PhongBan.php");
include_once("E_NhanVien.php");

class Model_PhongBan
{
    public function __construct()
    {
    }

    public function getAllPhongBan()
    {
        $link = new mysqli('localhost', 'root', '', 'dulieu999') or die('Could not connect: ' . $link->connect_error);
        mysqli_select_db($link, 'DULIEU999');
        $rs = mysqli_query($link, "SELECT * FROM PHONGBAN");
        $i = 1;
        while ($row = mysqli_fetch_array($rs)) {
            $IDPB = $row['IDPB'];
            $TenPB = $row['TenPB'];
            $MoTa = $row['MoTa'];
            $PhongBans[$i++] = new Entity_PhongBan($IDPB, $TenPB, $MoTa);
        }
        return $PhongBans;
    }

    public function getAllPhongBanID()
    {
        $link = mysqli_connect('localhost', 'root', '') or die('Could not connect:' . mysqli_error($link));
        mysqli_select_db($link, 'DULIEU999');
        $rs = mysqli_query($link, "SELECT IDPB FROM PHONGBAN");
        $i = 1;
        while ($row = mysqli_fetch_array($rs)) {
            $phongbanList[$i++] = $row['IDPB'];
        }
        return $phongbanList;
    }

    public function getPhongBanDetail($pbid)
    {
        $link = new mysqli('localhost', 'root', '', 'dulieu999') or die('Could not connect: ' . $link->connect_error);
        mysqli_select_db($link, 'DULIEU999');
        $rs = mysqli_query($link, "SELECT * FROM PHONGBAN WHERE IDPB = '$pbid'");
        while ($row = mysqli_fetch_array($rs)) {
            $IDPB = $row['IDPB'];
            $TenPB = $row['TenPB'];
            $MoTa = $row['MoTa'];
            $PhongBan = new Entity_PhongBan($IDPB, $TenPB, $MoTa);
        }
        return $PhongBan;
    }

    public function searchPhongBan($option, $searchValue)
    {
        $link = new mysqli('localhost', 'root', '', 'dulieu999') or die('Could not connect: ' . $link->connect_error);

        if ($option == "searchMapb") {
            $queryStr = "SELECT * FROM PHONGBAN WHERE IDPB = '$searchValue'";
        } else if ($option == "searchTenpb") {
            $queryStr = "SELECT * FROM PHONGBAN WHERE TenPB LIKE '%$searchValue%'";
        }
        $rs = mysqli_query($link, $queryStr);
        $i = 1;
        while ($row = mysqli_fetch_array($rs)) {
            $IDPB = $row['IDPB'];
            $TenPB = $row['TenPB'];
            $MoTa = $row['MoTa'];
            $PhongBan[$i++] = new Entity_PhongBan($IDPB, $TenPB, $MoTa);
        }
        mysqli_free_result($rs);
        mysqli_close($link);
        return $PhongBan;
    }

    public function addPhongBan($id, $ten, $mota)
    {
        $link = new mysqli('localhost', 'root', '', 'dulieu999') or die('Could not connect: ' . $link->connect_error);
        mysqli_select_db($link, 'DULIEU999');
        $rs = mysqli_query($link, "INSERT INTO PHONGBAN (IDPB, TenPB, MoTa) VALUES ('$id', '$ten', '$mota')");
        mysqli_close($link);
    }

    public function UpdatePhongBan($id, $name, $mota){
        $link = new mysqli('localhost', 'root', '', 'dulieu999') or die('Could not connect: ' . $link->connect_error);
        mysqli_select_db($link, 'DULIEU999');
        $rs = mysqli_query($link, "UPDATE PHONGBAN SET `IDPB` = '" . $id . "', TenPB = '" . $name . "', MoTa = '" . $mota . "' WHERE IDPB = '" . $id . "'");
        mysqli_close($link);
    }

    public function deletePhongBan($idpb){
        $link = new mysqli('localhost', 'root', '', 'dulieu999') or die('Could not connect: ' . $link->connect_error);
        mysqli_select_db($link, 'DULIEU999');
        $rs = mysqli_query($link, "DELETE FROM PHONGBAN WHERE IDPB = '$idpb'");
        mysqli_close($link);

        if ($rs == null) {
            $result = "<br><br><h1 style='color: red'>Lỗi Xóa Phòng Ban (có phòng ban đang chứa nhân viên)</h1>";
            echo $result.'<br><br>';
         }
    }
}
