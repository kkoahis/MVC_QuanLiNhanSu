<?php
include_once("../Model/M_User.php");
class Ctrl_User
{
    public function __invoke()
    {
        if (isset($_POST['login'])) {
            $username = $_REQUEST['username'];
            $password = $_REQUEST['password'];

            $modelUser = new Model_User();
            $user = $modelUser->login($username, $password);
            if ($user != null) {
               header("Location: ../indexs_admin.php");
            }
            else{
                header("Location: ../index.php");
            }
        } else {
            header("Location: ../index.php");
        }
    }
};
$C_User = new Ctrl_User();
$C_User->__invoke();
