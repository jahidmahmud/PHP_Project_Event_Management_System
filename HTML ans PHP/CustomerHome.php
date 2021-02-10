<?php
	session_start();
	$username=$_SESSION["user_name"];
	
	if(!isset($_SESSION["user_name"]))
	{
		header("location:Home.php");
	}
?>
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
				<h2>Event Management</h2>
				<p>Welcome Customer ........</p>
				<div id="show_name">
					<h5>Welcome,  <a style="color:#0c0b0b;" href=" myprofile.php"><b><?php echo $username; ?></a></h5>
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
					<li><a href="myprofile.php">My Profile </a></li>
					<li><a href="cbookingevent.php">Book Event</a></li>
					<li><a href="BS_index.php">Booking Status</a></li>
					<li><a href="VV_index.php">View Vanue </a></li>
					<li><a href="CF_index.php">FeedBack</a></li>
					<li><a href="C_Payment.php">Payment </a></li>
					<li><a href="logout.php">Logout</a></li>
					
				</ul>
			</div>
		</nav>
		<section>
			<div id="slider">
				<img  src="img/andreas-ronningen-S2YssLw97l4-unsplash.jpg" alt="An Image" />
			</div>
		</section>
		<div id="content_wrapper">
			<div id="content">
				<article>
					<h2>Lorem ipsum dolor sit amet, consectetuer</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendreri</p>
				</article>
			</div>
			<div id="sidebar">
				<aside>
					<h2>Sidebar Heading:</h2>
					<ul>
						<li><a href="#">List Item</a></li>
						<li><a href="#">List Item</a></li>
						<li><a href="#">List Item</a></li>
						<li><a href="#">List Item</a></li>
						<li><a href="#">List Item</a></li>
					</ul>
				</aside>
			</div>
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




