<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My First Webpage</title>
    <link rel="stylesheet" href="css/RegStyle.css">
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="css/BStyle.css">
</head>
  <body>
    <div id="wrapper">
      <header>
        <center>
          <div id="header">
            <h2>Peyment System</h2>
          </div>
        </center>
      </header> 
    </div>
  
      <div id="slider">
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <center>
                    <fieldset>
                       
                        <label ><b>Booking Id</b></label>
                        <input type="text" name="bid"  placeholder="Booking Id">
                    
                    
                      <button type="submit" id="showbtn" name="showbtn">Search</button><br><br><br>
                      <label ><b>Booking Id</b></label>
                        <input type="text" name="idddd"  placeholder="Booking Id"><br>
                      <label for="card"><b>Card No</b></label>
                      <input type="text" name="cardno" placeholder="Card No" >
                      <br>
                      <label for="cvv"><b>CVV No</b></label>
                      <input type="text" name="cvv" placeholder="Cvv No" >
                      <br>
                      <label for="cardname"><b>Card Name</b></label>
                      <input type="text" name="cname" placeholder="Card Name" >
                      <br>
                      <?php

                      if(isset($_POST['showbtn'])){
                        include 'configconnection.php';
                        $id=$_POST['bid'];
                        $sql="select * from bookevent where id=$id";
                        $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");


                        If(mysqli_num_rows($result)>0){ while($row=mysqli_fetch_assoc($result)){

                      ?>
                     
                      <label for="payment"><b>Payment</b></label>
                      <input type="text" name="payment" value="<?php echo $row['cost']; ?>" placeholder="Amount" required >
                      <br>
                      <?php }
                              }
                          }
                      ?>
                     
                        <br>
                        <label ><b>Email</b></label>
                        <input type="email" name="email"  placeholder="Valid email"><br>
                        <button type="submit" id="submit" name="insert">Submit</button><br><br>
                        

                          <input class="submit" type="submit" value="Back" onClick="history.go(-2);"/>
                          </form>

                      </fieldset>    
                    </center>
                    </form>
                
      </div>

<br>

    <footer class="footer_container">
        
        <a href="https://www.facebook.com/profile.php?id=100007828336544">Facebook</a>
          <a href="https://www.youtube.com/channel/UCTVkdvIeUA5-9bmiuyB1sUA?view_as=subscriber">Youtube</a>
        <a href="https://twitter.com/mahedianwar">Twitter</a>
        <p>Copyright &copy; Event Management Team, 2020</p>
      
    </footer>
     </div>

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "event_management";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  if(isset($_POST['insert']))
  {
    $sql = "INSERT INTO paymenthistory (bid,cardno, cvvno,cardname,payment)
    VALUES ('".$_POST["idddd"]."','".$_POST["cardno"]."','".$_POST["cvv"]."','".$_POST["cname"]."','".$_POST["payment"]."')";

    if ($conn->query($sql) === TRUE) {
      header("location: CustomerHome.php");
    } 
    else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  

  $conn->close();
?>


<?php  
if(isset($_POST['insert'])){
$email=$_POST['email'];
if($email!=""){
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "event_management";
//$conn = new mysqli($servername, $username, $password,$dbname)or die("connection error");

//$myuseremail = mysqli_real_escape_string($conn,$_POST['email']);

//$query="select * from customerreg where email='$myuseremail'";
//$result = mysqli_query($conn,$query);
//$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//$count = mysqli_num_rows($result);

require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->SMTPDebug=1;
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = TRUE;
$mail->Username = "mahedianwar@gmail.com";
$mail->Password ="197119959563";
$mail->SMTPSecure = "false";
$mail->Port = 587;
$mail->Form = "mahedianwar@gmail.com";
$mail->FromName = "Event Management";
$mail->addAddress($_POST['email']);
$mail->isHTML(true);
$mail->Subject = "Send Confirmation";
$mail->Body = "Pement Successfyll!!! for Event Management Booking. we will contact with you.....";
$mail->AltBody = "It is a forgotten password mail";

if(!$mail->send())
  {
   echo "Mailer Error: ";
  }
  else
  {
   header("Location: Login.php");
  }



}
else{
  echo "error";
}
}


?>


    
  </body>
</html>

  



