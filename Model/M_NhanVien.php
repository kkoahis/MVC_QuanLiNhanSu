<?php
include_once("E_NhanVien.php");

class Model_NhanVien
{
    public function __construct()
    {
    }

    public function getAllNhanVien()
    {
        $link = new mysqli('localhost', 'root', '', 'dulieu999') or die('Could not connect: ' . $link->connect_error);
        mysqli_select_db($link, 'DULIEU999');
        $rs = mysqli_query($link, "SELECT * FROM NHANVIEN");
        $i = 1;
        while ($row = mysqli_fetch_array($rs)) {
            $IDNV = $row['IDNV'];
            $Hoten = $row['HoTen'];
            $IDPB = $row['IDPB'];
            $Diachi = $row['DiaChi'];
            $NhanViens[$i++] = new Entity_NhanVien($IDNV, $Hoten, $IDPB, $Diachi);
        }
        return $NhanViens;
    }

    public function getAllNhanVienId()
    {
        $link = new mysqli('localhost', 'root', '', 'dulieu999') or die('Could not connect: ' . $link->connect_error);
        mysqli_select_db($link, 'DULIEU999');
        $rs = mysqli_query($link, "SELECT IDNV FROM NHANVIEN");
        $i = 1;
        while ($row = mysqli_fetch_array($rs)) {
            $IDNVList[$i++] = $row['IDNV'];
        }
        return $IDNVList;
    }

    public function getNhanVienDetail($emid)
    {
        $link = new mysqli('localhost', 'root', '', 'dulieu999') or die('Could not connect: ' . $link->connect_error);
        mysqli_select_db($link, 'DULIEU999');
        $rs = mysqli_query($link, "SELECT * FROM NHANVIEN WHERE IDNV = '$emid'");
        while ($row = mysqli_fetch_array($rs)) {
            $IDNV = $row['IDNV'];
            $HoTen = $row['HoTen'];
            $IDPB = $row['IDPB'];
            $DiaChi = $row['DiaChi'];
            $Employee = new Entity_NhanVien($IDNV, $HoTen, $IDPB, $DiaChi);
        }
        return $Employee;
    }


    public function getNhanVienPhongBan($sidnvpb)
    {
        $link = new mysqli('localhost', 'root', '', 'dulieu999') or die('Could not connect: ' . $link->connect_error);
        mysqli_select_db($link, 'DULIEU999');
        $rs = mysqli_query($link, "SELECT * FROM NHANVIEN WHERE IDPB = '$sidnvpb'");
        
        while ($row = mysqli_fetch_array($rs)) {
            $IDNV = $row['IDNV'];
            $Hoten = $row['HoTen'];
            $IDPB = $row['IDPB'];
            $Diachi = $row['DiaChi'];
            $NhanVien = new Entity_NhanVien($IDNV, $Hoten, $IDPB, $Diachi);
        }
        return $NhanVien;
    }

    public function addNhanVien($IDNV, $Hoten, $IDPB, $Diachi)
    {
        $link = new mysqli('localhost', 'root', '', 'dulieu999') or die('Could not connect: ' . $link->connect_error);
        mysqli_select_db($link, 'DULIEU999');
        $rs = mysqli_query($link, "INSERT INTO NHANVIEN (IDNV, Hoten, IDPB, Diachi) VALUES ('$IDNV', '$Hoten', '$IDPB', '$Diachi')");
        mysqli_close($link);
    }

    public function updateNhanVien($IDNV, $Hoten, $IDPB, $Diachi)
    {
        $link = new mysqli('localhost', 'root', '', 'dulieu999') or die('Could not connect: ' . $link->connect_error);
        mysqli_select_db($link, 'DULIEU999');
        $rs = mysqli_query($link, "UPDATE NHANVIEN SET `IDNV` = '" . $IDNV . "', HoTen = '" . $Hoten . "', IDPB = '" . $IDPB . "', DiaChi = '" . $Diachi . "' WHERE IDNV = '" . $IDNV . "'");
        mysqli_close($link);
    }

    public function deleteNhanVien($id)
    {
        $link = new mysqli('localhost', 'root', '', 'dulieu999') or die('Could not connect: ' . $link->connect_error);
        mysqli_select_db($link, 'DULIEU999');
        $rs = mysqli_query($link, "DELETE FROM NHANVIEN WHERE IDNV = '" . $id . "'");
        mysqli_close($link);
    }

    public function searchNhanVien($option, $searchValue)
    {
        $link = new mysqli('localhost', 'root', '', 'dulieu999') or die('Could not connect: ' . $link->connect_error);

        if ($option == "searchManv") {
            $queryStr = "SELECT * FROM NHANVIEN WHERE IDNV = '$searchValue'";
        } else if ($option == "searchTennv") {
            $queryStr = "SELECT * FROM NHANVIEN WHERE HoTen LIKE '%$searchValue%'";
        } else if ($option == "searchDiachinv") {
            $queryStr = "SELECT * FROM NHANVIEN WHERE DiaChi LIKE '%$searchValue%'";
        }
        $rs = mysqli_query($link, $queryStr);
        $i = 1;
        while ($row = mysqli_fetch_array($rs)) {
            $IDNV = $row['IDNV'];
            $Hoten = $row['HoTen'];
            $IDPB = $row['IDPB'];
            $Diachi = $row['DiaChi'];
            $NhanViens[$i++] = new Entity_NhanVien($IDNV, $Hoten, $IDPB, $Diachi);
        }
        mysqli_free_result($rs);
        mysqli_close($link);
        return $NhanViens;
    }
}