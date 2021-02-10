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
				<p>Event Planner...</p>
			</div>
			<div id="liveclock">

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
				document.layers.liveclock.document.write(myclock);
				document.layers.liveclock.document.close();
				}
				else if (document.all)
				liveclock.innerHTML=myclock;
				else if (document.getElementById)
				document.getElementById("liveclock").innerHTML=myclock;
				setTimeout("show5()",1000);
				 }
				</script>
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
		<section>
			<div id="slider">
				<img  src="img/home.jpg" alt="An Image" />
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