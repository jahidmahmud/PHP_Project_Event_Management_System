<?php 
  $namee=$_POST["user_name"];

  $pass=$_POST["user_password"];
  if($namee!="" && $pass!=""){

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "event_management";
  $conn = new mysqli($servername, $username, $password,$dbname)or die("connection error");
  $myusername = mysqli_real_escape_string($conn,$_POST['user_name']);
    $mypassword = mysqli_real_escape_string($conn,$_POST['user_password']); 
      
      $sql = "SELECT * FROM customerreg WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);

      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
         session_start();
         if($row['usertype']=="admin"){

         $_SESSION["user_name"]=$_POST["user_name"];
         
         header("location: AdminHome.php");
      }else if($row['usertype']=="customer"){
        $_SESSION["user_name"]=$_POST["user_name"];

         header("location: CustomerHome.php");
      }
      }else {
         //$error = "Your Login Name or Password is invalid";
         //echo "error";

          // Here, we use single quotes for PHP and double quotes for JavaScript
          echo '<script type="text/javascript">;';
          echo 'window.alert("Your Login Name or Password is invalid");';
          echo 'window.location= "Home.php";';
          echo '</script>';

      }
   }
 ?>
