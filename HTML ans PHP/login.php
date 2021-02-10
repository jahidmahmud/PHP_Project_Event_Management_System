<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="l.js"></script>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/logstyle.css">
</head>
<body class="gradient ">
  <div class="box">
  <h2>Login</h2>
  <form action="logindata.php" method="post" onsubmit="return validation()">
    <div class="inputBox">
      <input type="text" name="user_name" id="uname" value="">
      <label>Username</label>
    </div>
    <div class="inputBox">
      <input type="password" name="user_password" id="pass" value="">
      <label>Password</label>
    </div>
        <br>
    <a style="color: #4bc970" href="forgetpassword.php">Forget Password?</a><br><br>
    <input type="submit" name="submit" value="Sign In">
  </form>
</div>

</body>
</html>






