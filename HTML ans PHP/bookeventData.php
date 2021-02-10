<?php

$ev_typ=$_POST['Ventu_Type'];
$ev_vnu=$_POST['Ventu'];
$ev_date=$_POST['date'];
//$ev_food=$_POST['food'];
$ev_guest=$_POST['NOG'];
$ev_equip=$_POST['eqp'];
$ev_cost=$_POST['cost'];
$ev_status="Pending";
$ev_food = implode(',', $_POST['food']);


$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   } 
      include 'configconnection.php';

			if(isset($_POST['submit']))
				{
					$sql="INSERT INTO eventbooking(vtype,vanue,vdate,guests,equipment,cost,status)VALUES('{$ev_typ}','{$ev_vnu}','{$ev_date}','{$ev_guest}','{$ev_equip}','{$ev_cost}','{$ev_status}')";
                        $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");
   					for ($i=0; $i<count($ev_food); $i++)
       				 {
            			$query="INSERT INTO eventbooking (foods) VALUES ('" . $ev_food[$i] . "')";     
						mysql_query($query) or die (mysql_error() );
        		}
        		mysqli_close($con);

}

?>