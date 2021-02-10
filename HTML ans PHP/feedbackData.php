<?php

$ev_Id=$_POST['bid'];
$ev_Comment=$_POST['comment'];

      include 'configconnection.php';

      $sql="INSERT INTO feedback(Booking_Id,Feedback)VALUES('{$ev_Id}','{$ev_Comment}')";
      $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");
      header("Location:CustomerHome.php");

      mysqli_close($con);

?>