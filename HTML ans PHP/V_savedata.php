<?php

$ev_name=$_POST['sname'];
$ev_phone=$_POST['sphone'];

      include 'configconnection.php';

      $sql="INSERT INTO venue(name,cost)VALUES('{$ev_name}','{$ev_phone}')";
      $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");
      header("Location: V_index.php");

      mysqli_close($con);



?>