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
            <h2>Booking Stasus Checking</h2>
          </div>
        </center>
      </header> 
    </div><br><br>
  
      <div id="slider">
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <center>
                    <fieldset>
                       
                        <label ><b>Booking Id</b></label>
                        <input type="text" name="bid" placeholder="Booking Id" required><br><br>
                    
                    
                      <button type="submit" id="showbtn" name="showbtn">Search</button><br><br><br>
        

                     <?php

                      if(isset($_POST['showbtn'])){
                        include 'configconnection.php';
                        $id=$_POST['bid'];
                        $sql="select * from bookevent where id=$id";
                        $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");


                        If(mysqli_num_rows($result)>0){ while($row=mysqli_fetch_assoc($result)){

                      ?>

                      <label for="status"><b>Booking Status</b></label>
                      <br>
                      <?php echo $row['status']; ?>
                      
                      <br><br><br>

                          <input class="submit" type="submit" value="Back" onClick="history.go(-2);"/>
                          </form>
                          <?php }
                              }
                          }
                      ?>
                      </fieldset>
                    </center>
                    </form>
                
      </div>

<br><br><br>

    <footer class="footer_container">
        
        <a href="https://www.facebook.com/profile.php?id=100007828336544">Facebook</a>
          <a href="https://www.youtube.com/channel/UCTVkdvIeUA5-9bmiuyB1sUA?view_as=subscriber">Youtube</a>
        <a href="https://twitter.com/mahedianwar">Twitter</a>
        <p>Copyright &copy; Event Management Team, 2020</p>
      
    </footer>
     </div>
    
  </body>
</html>
