<?php
$ev_id=$_POST['id'];
$ev_name=$_POST['name'];
$ev_phone=$_POST['phone'];

     include 'configconnection.php';

     $sql="UPDATE venue SET name='{$ev_name}',cost='{$ev_phone}' WHERE id={$ev_id}";
     $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");
     header("Location: V_index.php");

     mysqli_close($con);



?>