<?php
$ev_id=$_POST['id'];
$ev_name=$_POST['eqname'];
$ev_address=$_POST['eqcost'];
$ev_phone=$_POST['eqpstatus'];

      include 'configconnection.php';

      $sql="UPDATE equipment SET ename='{$ev_name}',ecost='{$ev_address}' WHERE eid={$ev_id}";
      $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");
      header("Location: E_index.php");

      mysqli_close($con);



?>