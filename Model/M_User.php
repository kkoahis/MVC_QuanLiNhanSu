<?php
include_once("E_User.php");
class Model_User
{
    public function __construct()
    {
    }

    public function login($username, $password)
    {
        $link = new mysqli('localhost', 'root', '', 'dulieu999') or die('Could not connect: ' . $link->connect_error);

        $queryStr = "SELECT * FROM ADMIN WHERE username = '$username' AND password = '$password'";

        $rs = $link->query($queryStr);
        $user = null;
        if ($row = mysqli_fetch_array($rs)) {
            $username = $row['username'];
            $password = $row['password'];
            $user = new Entity_User($username, $password);
        }
        mysqli_free_result($rs);
        mysqli_close($link);
        return $user;
    }
}
