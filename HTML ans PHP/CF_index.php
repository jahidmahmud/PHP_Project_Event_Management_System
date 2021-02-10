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
            <h2>FeedBack</h2>
          </div>
        </center>
      </header> 
    </div>
  
      <div id="slider">
        <form class="post-form" action="feedbackData.php" method="post">
                    <center>
                    <fieldset>
                       
                        <label for="id"><b>Booking Id</b></label>
                        <input type="text" id="id" name="bid" placeholder="Booking Id" required><br><br><br>
                        <div id="textarea">
                        <label for="id"><b>Comment Box</b></label>
                        <textarea name="comment" rows="9" cols="50" placeholder="Write Your Feedback"></textarea> <br><br><br>
                        </div>
                      <button type="submit">Submit</button><br><br><br>
                      <input class="submit" type="submit" value="Back" onClick="history.go(-1);"/>
                    </center>
                </form>
      </div><br>
    <footer class="footer_container">
        
        <a href="https://www.facebook.com/profile.php?id=100007828336544">Facebook</a>
          <a href="https://www.youtube.com/channel/UCTVkdvIeUA5-9bmiuyB1sUA?view_as=subscriber">Youtube</a>
        <a href="https://twitter.com/mahedianwar">Twitter</a>
        <p>Copyright &copy; Event Management Team, 2020</p>
      
    </footer>
     </div>
    
  </body>
</html>