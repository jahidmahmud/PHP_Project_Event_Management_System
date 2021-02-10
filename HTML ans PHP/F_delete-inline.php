<?php

$ev_id=$_GET['id'];

	  include 'configconnection.php';
      $sql="DELETE FROM food WHERE fid={$ev_id}";
      $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");

      header("Location: F_index.php");
      mysqli_close($con);



?>