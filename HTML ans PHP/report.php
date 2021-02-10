
 <?php
  session_start();
  $username=$_SESSION["user_name"];
  
  if(!isset($_SESSION["user_name"]))
  {
    header("location:Home.php");
  }
?>

<?php  
 $connect = mysqli_connect("localhost", "root", "", "event_management");  
 $query = "SELECT venue, count(*) as number FROM bookevent GROUP BY venue";  
 $result = mysqli_query($connect, $query);  
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My First Webpage</title>
  <link rel="stylesheet" href="css/Style.css">

  <title></title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Venue', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["venue"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of venue usages',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script> 
</head>
  <body onLoad="show5()"> 
    <div id="wrapper">
    <header>
      <div id="header">
        <h2><b>Event Management</b></h2>
        <p>Welcome Admin ........</p>
        <!--<h3><a href="Home.html">logout</a></h3>-->
        <div id="show_name">
          <h5> Welcome,<a style="color:#0c0b0b;" href=" myprofile.php"><b><?php echo $username; ?></a></h5>
        </div>

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
          <li><a href="V_index.php">Vanue</a></li>
          <li><a href="F_index.php">Food </a></li>
          <li><a href="E_index.php">Equipment</a></li>
          <li><a href="P_index.php">Peymant History </a></li>
          <li><a href="VB_index.php">View Bookings </a></li>
          <li><a href="UE_index.php">Upcoming Event</a></li>
          <li><a href="FH_index.php">Feedback History </a></li>
          <li><a href="report.php">Report </a></li>
          <li><a href="logout.php">Logout </a></li>
          
        </ul>
      </div>
    </nav>
    <section>
      <div id="slider">

        <br /><br />  
           <div style=" margin-left: 150px;">  
                <div id="piechart" style="width: 900px; height: 500px;background-color:#EEE8ae;"></div>  
           </div>  
        
      </div>
      <br /><br /> 
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