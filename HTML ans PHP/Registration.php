<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="css/RegStyle.css">
    <link rel="stylesheet" href="css/Style.css">
</head>
<body>
<?php
    require('configconnection.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $gender = stripslashes($_REQUEST['gender']);
        $gender = mysqli_real_escape_string($con, $gender);
        $usertype = stripslashes($_REQUEST['usertype']);
        $usertype = mysqli_real_escape_string($con, $usertype);
        //$query    = "INSERT into `customerreg` (username, email, password, gender, usertype) VALUES ('$username', '$email', '" . md5($password) . "', '$gender', '$usertype')";
        $query    = "INSERT into `customerreg` (username, email, password, gender, usertype) VALUES ('$username', '$email', '$password', '$gender', '$usertype')";
        $result   = mysqli_query($con, $query);

        if ($result) {
            echo "<div class='form1'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'><b>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form1'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <section>
            <div id="slider">
                <form>
                    <center>
                    <fieldset>
                        <legend>Your basic info</legend>
                        
                        <label for="name"><b>Username:</b></label>
                        <input type="text" id="name" name="username" placeholder="Username" required><br>
                        
                        <label for="mail"><b>Email:</b></label>
                        <input type="email" id="mail" name="email" placeholder="Email" required><br>
                        
                        <label for="password"><b>Password:</b></label>
                        <input type="password" id="password" name="password" placeholder="Password" required><br>
                        
                        <label><b>Gender:</b></label>
                        <input type="radio" name="gender" value="male"> Male
                        <input type="radio" name="gender" value="female"> Female
                        <input type="radio" name="gender" value="other"> Other<br><br>
                        
                        <label><b>User Type:</b></label>
                        <select name="usertype">
                            <option value="admin">admin</option>
                            <option value="customer">customer</option>
                            </select>
                      
                    </fieldset>
                    
                      <button type="submit" name="submit">Sign Up</button>
                    </center>
                </form>
            </div>
        </section>
<?php
    }
?>
</body>
</html>