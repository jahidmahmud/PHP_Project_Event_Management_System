<?php

$ev_name=$_POST['eqname'];
$ev_cost=$_POST['eqcost'];
$ev_state=$_POST['eqpstatus'];

      include 'configconnection.php';

      $sql="INSERT INTO equipment(ename,ecost)VALUES('{$ev_name}','{$ev_cost}')";
      $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");
      header("Location:E_index.php");

      mysqli_close($con);

?>