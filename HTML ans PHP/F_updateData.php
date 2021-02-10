<?php
$ev_id=$_POST['id'];
$ev_name=$_POST['foodname'];
$ev_cost=$_POST['foodcost'];

      include 'configconnection.php';

      $sql="UPDATE food SET fname='{$ev_name}',cost='{$ev_cost}' WHERE fid={$ev_id}";
      $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");
      header("Location: F_index.php");

      mysqli_close($con);



?>