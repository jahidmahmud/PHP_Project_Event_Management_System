
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My First Webpage</title>
  <link rel="stylesheet" href="css/Style.css">
</head>
  <body onLoad="show5()"> 
    <div id="wrapper">
    <header>
      <div id="header">
        <h2><b>Event Management</b></h2>
        <p>Welcome Ato our Website</p>
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
    <br><br>
    <section>
      <div id="about">
        <h2>About Our Agency</h2>
        <div id="agency_img">
          <img  src="img/page2_img.jpg" alt="An Image" />
        </div>
        <div id="agency">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
           </p>
        </div>
      </div>
      <div id="wteam">
        <h2>Our Work Team</h2>
        <div id="anwar">
          <img  src="img/mahedi.jpg" alt="An Image" />
          <p><a href="#"></a>- Mahedi Hasan<br>
            American International University...</p><br>
            <hr>
        </div>
        <div id="jahid">
          <img  src="img/jahid.jpg" alt="An Image" />
          <p><a href="#"></a>- Jahid Mahmud<br>
            American International University...</p><br>
            <hr>
        </div>
        <div id="araf">
          <img  src="img/araf.jpg" alt="An Image" />
          <p><a href="#"></a>- Araf Sheikh<br>
            American International University...</p><br>
            <hr>
        </div>

      </div>
    </section>
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