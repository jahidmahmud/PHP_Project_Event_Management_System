
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Webpage</title>
    <link rel="stylesheet" type="text/css" href="css/Astyle.css">

</head>
    <body onLoad="show5()"> 
        <div id="wrapper">
      <header>
       <div id="header">
        <h2><b>Event Management</b></h2>
        <p>Welcome to our Website</p>
        <!--<h3><a href="Home.html">logout</a></h3>-->
        <div id="Admin_liveclock">

          <script>
          function show5(){
           if (!document.layers&&!document.all&&!document.getElementById)
           return
           var Digital=new Date()
           var hours=Digital.getHours()
           var minutes=Digital.getMinutes()
           var seconds=Digital.getSeconds()
           var dn="AM" 
           if (hours>12){
           dn="PM";
           hours=hours-12;
           }
           if (hours==0)
           hours=12;
           if (minutes<=9)
           minutes="0"+minutes;
           if (seconds<=9)
           seconds="0"+seconds;
          myclock="<font size='2' face='Arial' ><b><font size='5'><b></font>"+hours+":"+minutes+":"
           +seconds+" "+dn+"</b></font>";
          if (document.layers){
          document.layers.Admin_liveclock.document.write(myclock);
          document.layers.Admin_liveclock.document.close();
          }
          else if (document.all)
          liveclock.innerHTML=myclock;
          else if (document.getElementById)
          document.getElementById("Admin_liveclock").innerHTML=myclock;
          setTimeout("show5()",1000);
           }
          </script>
          </div>

      </div>
    </header>
    <nav>
      <div id="nav">
        <ul>
          <li><a href="#">&#9776;Users
          </a>
            <ul>
               <li><a href="login.php">Login</a></li>
               <li><a href="Registration.php">Registration</a></li>
             </ul>
          </li>
          <li><a href="Home.php">Home </a></li>
          <li><a href="About.php">About Us </a></li>
          <li><a href="contactus.php">Contact Us </a></li>
          <li><a href="galary.php">Gallary </a></li>
        </ul>
      </div>
    </nav>
        <div class="map">
          <figure class="">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24214.807650104907!2d-73.94846048422478!3d40.65521573400813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1395650655094" style="border:0"></iframe>
          </figure>
        </div>

            <div class="container">  
              <form id="contact" action="" method="post">
                <h3> Contact Us</h3>
                <h4>Contact us today, and get reply with in 24 hours!</h4>
                <fieldset>
                  <input placeholder="Your name" type="text" name="name" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                  <input placeholder="Your Email Address" type="email" name="email" tabindex="2" required>
                </fieldset>
                <fieldset>
                  <input placeholder="Your Phone Number" type="tel" name="phone" tabindex="3" required>
                </fieldset>
                <fieldset>
                  <textarea placeholder="Type your Message Here...." name="textarea" tabindex="5" required></textarea>
                </fieldset>
                <fieldset>
                  <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                </fieldset>
              </form>
            </div>
        

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

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $ev_name=$_POST['name'];
$ev_email=$_POST['email'];
$ev_phone=$_POST['phone'];
$ev_text=$_POST['textarea'];

      include 'configconnection.php';

      $sql="INSERT INTO contactInfo(name,email,phone,textarea)VALUES('{$ev_name}','{$ev_email}','{$ev_phone}','{$ev_text}')";
      $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");
      header("Location:contactus.php");

      mysqli_close($con);
}


?>