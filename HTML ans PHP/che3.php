<?php 
  $etype=$_POST['type'];

  $evenue=$_POST['venue'];

  $edate=$_POST['date'];
  $guest=$_POST['noguest'];
  $efood=$_POST['food'];
  $equipments=$_POST['equipment'];
  $ecost=$_POST['cost'];
  $status="Pending";

	$servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "event_management";
  $conn = new mysqli($servername, $username, $password,$dbname)or die("connection error");
	
	$sql = "INSERT INTO bookevent (type,venue,date,nog,foods,eequipments,cost,status)
	VALUES ('{$etype}','{$evenue}','{$edate}','{$guest}','{$efood}','{$equipments}','{$ecost}','{$status}')";
	if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "Booking successful.Your booking ID is: ". $last_id." Please Check Booking Status,it is pending or accepted";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
    }
	$conn->close();

 ?>