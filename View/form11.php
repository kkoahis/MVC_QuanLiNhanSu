
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/styleForm1.css" />
  <script language="JavaScript">
    function clearFields() {
      document.form2.username.value = "";
      document.form2.password.value = "";
    }

    function checkLogin() {
      var keyUser = document.form2.username.value;
      var keyPass = document.form2.password.value;

      if (keyUser === "" && keyPass === "") {
        window.alert("Xin hãy nhập Username và Password");
      } else if (keyPass === "") {
        window.alert("Xin hãy nhập Password");
      } else if (keyUser === "") {
        window.alert("Xin hãy nhập Username");
      } 
    }
  </script>
  <title>Form 1</title>
</head>

<body bgcolor="BBFFCC">
  <form action="../Controller/C_User.php" name="form2" method="post" target="_top">
    <div class="container">
      <table border="0" class="table-form1">
        <caption>
          LOGIN
        </caption>
        <tr>
          <td>Username</td>
          <td>
            <input type="text" name="username" id="username" class="input-Username" />
          </td>
        </tr>
        <tr>
          <td>Password</td>
          <td>
            <input type="password" name="password" id="password" class="input-Password" />
          </td>
        </tr>
        <tr>
          <td></td>
          <td>
            <div class="button-form1">
              <button onclick="checkLogin()" class="login-btn" name="login">
                Login
              </button>
              <input name="ResetButton" value="Reset" onclick="clearFields()" class="reset-btn" />
            </div>
          </td>
        </tr>
      </table>
    </div>
  </form>
</body>
</html>