<?php

$ev_id=$_GET['id'];

	  include 'configconnection.php';
      $sql="DELETE FROM venue WHERE id={$ev_id}";
      $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");

      header("Location: V_index.php");
      mysqli_close($con);



?>