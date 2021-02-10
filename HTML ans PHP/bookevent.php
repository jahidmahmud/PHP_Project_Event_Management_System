<?php include 'configconnection.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My First Webpage</title>
    <link rel="stylesheet" href="css/RegStyle.css">
    <link rel="stylesheet" href="css/Style.css">
</head>
	<body>
		<div id="wrapper">
		<header>
            <center>
			<div id="header">
				<h2>Event Booking</h2>
				
            </div>
        </center>
		</header>
		<section>
			<div id="slider">
				<form class="post-form" action="" method="post">
                    <center>
                    <fieldset>

                        <label><b>Venu Type:</b></label>
                        <select name="Ventu_Type">
                        <?php

                        $sql="select * from venue";
                        $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");
                         If(mysqli_num_rows($result)>0){ 
                            while($row=mysqli_fetch_assoc($result)){
                              ?>
                              <option><?php echo $row['vname'];?></option>
                        <?php   
                            }
                        }
                        ?>
                        </select>

                        <label><b>Venu Name:</b></label>
                        <select name="Ventu">
                            <?php

                        $sql="select * from venumanagement";
                        $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");
                         If(mysqli_num_rows($result)>0){ 
                            while($row=mysqli_fetch_assoc($result)){
                              ?>
                              <option><?php echo $row['name'];?></option>
                        <?php   
                            }
                        }
                        ?>
                        </select><br>
                        
                        <label for="mail"><b>Email:</b></label>
                        <input type="email" id="mail" name="email" placeholder="Optional"><br>


                        <label for="name"><b>Event Date:</b></label>
                        <input type="date" name="date"><br><br><br>

                        <label><b>Food:</b></label>
                        <input type="checkbox" name="food[]" value="Buffet"> Buffet
                        <input type="checkbox" name="food[]" value="chinese"> chinese
                        <input type="checkbox" name="food[]" value="Italian food"> Italian food
                        <input type="checkbox" name="food[]" value="softdrinks"> softdrinks
                        <input type="checkbox" name="food[]" value="Bengalee"> Bengalee<br><br><br>

                        <label for="NOG"><b>No Of Guest:</b></label>
                        <input type="number" id="NOG" name="NOG"><br><br><br>
                        <label><b>Equipment:</b></label>
                        <input type="checkbox" name="eqp" value="TC"> Table & Chair
                        <input type="checkbox" name="eqp" value="chinese"> DJ
                        <input type="checkbox" name="eqp" value="Italian food"> LIghting
                        <input type="checkbox" name="eqp" value="softdrinks"> Flower
                        <input type="checkbox" name="eqp" value="Bengalee"> Milke & Speaker<br><br>

                        <label for="NOG"><b>Email:</b></label>
                        <input type="email" id="email" name="email"><br>

                        <label for="cost"><b>cost:</b></label>
                        <input type="number" id="cost" name="cost"><br><br>

                      
                    </fieldset>
                    
                      <button type="submit" name="submit">Book</button><br>
                      <input class="submit" type="submit" value="Back" onClick="history.go(-1);"/>
                    </center>
                </form>
			</div>
		</section>
		<footer class="footer_container">
				
				<a href="https://www.facebook.com/profile.php?id=100007828336544">Facebook</a>
			    <a href="https://www.youtube.com/channel/UCTVkdvIeUA5-9bmiuyB1sUA?view_as=subscriber">Youtube</a>
				<a href="https://twitter.com/mahedianwar">Twitter</a>
				<p>Copyright &copy; Event Management Team, 2020</p>
			
		</footer>
	   </div>
		
	</body>
</html>

<?php
if(isset($_POST['submit'])){

//include 'configconnection.php';

$ev_typ=$_POST['Ventu_Type'];
$ev_vnu=$_POST['Ventu'];
$ev_date=$_POST['date'];
$ev_food=$_POST['food'];
$ev_guest=$_POST['NOG'];
$ev_equip=$_POST['eqp'];
$ev_cost=$_POST['cost'];
$ev_status="Pending";

$chk="";  
foreach($ev_food as $chk1)  
   {  
      $chk .= $chk1.",";  
   } 

$chk2="";  
foreach($ev_food as $chk3)  
   {  
      $chk2 .= $chk3.",";  
   } 
      

            
    $sql="INSERT INTO eventbooking(vtype,vanue,vdate,foods,guests,equipment,cost,status)VALUES('{$ev_typ}','{$ev_vnu}','{$ev_date}','{$chk}','{$ev_guest}','{$chk2}','{$ev_cost}','{$ev_status}')";
     $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");
     mysqli_close($con);

}

?>