<?php

$ev_id=$_GET['id'];

	  include 'configconnection.php';
      $sql="DELETE FROM equipment WHERE eid={$ev_id}";
      $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");

      header("Location:E_index.php");
      mysqli_close($con);



?>