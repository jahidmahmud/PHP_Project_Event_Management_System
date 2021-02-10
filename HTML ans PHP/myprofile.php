<?php
    session_start();
    $username=$_SESSION["user_name"];
    if(!isset($_SESSION["user_name"]))
    {
        header("location:CustomerHome.php.php");
    }
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
				<h2>MY Profile</h2>
				
            </div>
        </center>
		</header>
		<section>
            
			<div id="slider">
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

                $sql = "SELECT id, email, username, gender, usertype FROM customerreg WHERE username='".$_SESSION["user_name"]."'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    
                    while($row = $result->fetch_assoc()) {
                        $eid=$row["id"];
                        $uuname=$row["username"];
                        $eemail=$row["email"];                       
                        $ugender=$row["gender"];
                        $eusertype=$row["usertype"];
                    }
                    
                } else {
                    echo "0 results";
                }

                $conn->close();
                
                
             ?>
				<form method="post">
                    <center>
                    <fieldset>
                        <legend>Edit Your Profile</legend><br>
                        <label for="name"><b>Id:</b></label>
                        <input type="text" id="name" name="id" readonly="readonly" value="<?php echo $eid; ?>"><br>

                        <label for="name"><b>Username:</b></label>
                        <input type="text" id="name" name="user_name" value="<?php echo $uuname; ?>"><br>
                        
                        <label for="mail"><b>Email:</b></label>
                        <input type="email" id="mail" name="user_email" value="<?php echo $eemail; ?>"><br>
                        
                        <label><b>Gender:</b></label><br>
                        <input type="text" name="gender" value="<?php echo $ugender; ?>"/><br>
                        
                        <label><b>Usertype:</b></label>
                        <input type="text" name="usertype" readonly="readonly" value="<?php echo $eusertype; ?>" /><br>
                    </fieldset>
                    
                      <button type="submit">Submit</button><br>
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
		
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
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
                    $sql="UPDATE customerreg SET username='".$_POST["user_name"]."',email='".$_POST["user_email"]."',gender='".$_POST["gender"]."' WHERE id='".$eid."'";
                    if ($conn->query($sql) === TRUE) {
                        echo "New record created successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }

                    $conn->close();
            $_SESSION["user_name"]=$_POST["user_name"];
            header("Location:CustomerHome.php"); 
        }
        
        
    ?>

	</body>
</html>