<?php
//$ev_id=$_POST['id'];
//$ev_name=$_POST['name'];
$st="Rejected";
$stu_id=$_GET['id'];
     include 'configconnection.php';

     $sql="UPDATE bookevent SET status='{$st}' WHERE id={$stu_id}";
     $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");
     header("Location: VB_index.php");

     mysqli_close($con);



?>