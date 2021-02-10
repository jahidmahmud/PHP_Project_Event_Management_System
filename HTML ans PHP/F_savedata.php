<?php

$f_name=$_POST['name'];
$f_cost=$_POST['cost'];

      include 'configconnection.php';

      $sql="INSERT INTO food(fname,cost)VALUES('{$f_name}','{$f_cost}')";
      $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");
      header("Location: F_index.php");

      mysqli_close($con);



?>