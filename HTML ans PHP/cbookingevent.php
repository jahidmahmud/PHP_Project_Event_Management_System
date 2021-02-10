<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "event_management";
$conn = mysqli_connect($servername, $username, $password,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
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
    <script src="query.js" type="text/javascript"></script>
  <script type="text/javascript">
    var x="";
    var z="";
    var dt="";
    var nog=1;
    var a;
    var b;
    var et="";
    $(document).ready(function(){
      var totalcost=0;
      $( "#venue" ).change(function() {
      x=$(this).val();
      z=x;
      $.ajax({
            url : "calculation.php",
            method : "POST",
            data : {item: x},
            dataType : "text",
            success: function(data) {
              totalcost+=parseInt($('#cost').html(data).text());
              $('#con').html(totalcost);
            }
          });
});
      $( "#nog" ).change(function() {
      nog=$(this).val();
    });

      $( "#btn1" ).click(function() {
      a = [];
        $('input[name="foods"]:checked').each(function(){
          a.push($(this).val());
          //console.log(a);
        });
        $.ajax({
            url : "che1.php",
            method : "POST",
            data : {item: a},
            dataType : "text",
            success: function(data) {
              totalcost+=parseInt($('#cost').html(data).text())*nog;
              $('#con').html(totalcost);
            }
          });
    });
      $( "#btn2" ).click(function() {
      b = [];
        $('input[name="equipments"]:checked').each(function(){
          b.push($(this).val());
          console.log(b);
        });
        $.ajax({
            url : "che2.php",
            method : "POST",
            data : {item: b},
            dataType : "text",
            success: function(data) {
              totalcost+=parseInt($('#cost').html(data).text());
              $('#con').html(totalcost);
            }
          });
    });

      $( "#dt" ).change(function() {
      dt=$(this).val();
    });
      $( "#event" ).change(function() {
      et=$(this).val();
    });

      $( "#btn" ).click(function() {
        var p=a.toString(); 
        var q=b.toString();
        $.ajax({
            url : "che3.php",
            method : "POST",
            data : {type: et, venue: z,date: dt, noguest: nog,food: p, equipment: q,cost: totalcost},
            dataType : "text",
            success: function(data) {
              alert(data);
            }
          });
    });

     

    });
  </script>

</head>
	<body>
		<div id="wrapper">
		<header>
            <center>
			<div id="header">
				<h2>Event Booking</h2>
				
            </div>
        </center>
		</header>
		<section>
			<div id="slider">
				<form class="post-form" id="myform" action="calculation.php" method="post">
                    <center>
                    <fieldset>

                        <label for="eventtype"><b>Venu Type:</b></label>
                        <select id="event" name="event">
                        <option>choose one</option>
                            <option value="marriage">Marriage ceremony</option>
                            <option value="birthday">Birthday Party</option>
                            <option value="conference">Conference</option>
                            <option value="farewell">Farewell Party</option>
                        </select>

                        <label for="venue"><b>Venu Name:</b></label>
                        <select id="venue" name="venue">
                            <option>choose one</option>
                               <?php
                                $sql = "select * from venue";

                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                  while($row = $result->fetch_assoc()) {

                               ?>
                               <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                                      
                              <?php }
                              }
                              ?>
                        </select><br>

                        <label for="mail"><b>Email:</b></label>
                        <input type="email" id="mail" name="email" placeholder="Optional"><br>


                        <label for="date"><b>Event Date:</b></label>
                        <input type="date" name="date" id="dt"><br><br><br>

                        <label for="noguest"><b>No Of Guest:</b></label>
                        <input type="Number" name="guest" id="nog">
                        <br><br><br>

                        <label for="food"><b>Food:</b></label>
                        <option>choose one</option>
                           <?php

                            $sql = "select * from food";

                            $result = $conn->query($sql);


                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {

                             ?>
                            <input type="checkbox" name="foods" id="food" value="<?php echo $row['fname']; ?>">
                             <?php echo $row['fname']; ?>  

                            <?php }
                            }
                            ?>
                         <br>
                         <input type="button" value="Add to Chart" id="btn1" style="height: 30px;width: 120px">
                         <br><br>

                        
                        <label for="equipment"><b>Equipment:</b></label>

                            <?php

                            $sql = "select * from equipment";

                            $result = $conn->query($sql);


                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {

                             ?>
                            <input type="checkbox" name="equipments" id="equipment" value="<?php echo $row['ename']; ?>">
                             <?php echo $row['ename']; ?>  

                            <?php }
                            }
                            ?><br>
                            <input type="button" value="Add to Chart" id="btn2" style="height: 30px;width: 110px">
                        
                        <br><br>
                        <!--

                        <label for="NOG"><b>Email:</b></label>
                        <input type="email" id="email" name="email"><br>
                        -->

                        <label for="cost"><b>Cost:</b></label>
                        <div id="con">

                        </div>
                        <br>
                        <input type="hidden" id="cost" name="custId">
                        <br>

                      
                    </fieldset>
                    
                      <input class="submit" type="button"  id="btn" value="Book">
                      <input class="submit" id="abc" type="button" value="Back" onClick="history.go(-1);" />
                    </center><br><br>
                </form>
                <script type="text/javascript"></script>
			</div>
		</section><br>
		<footer class="footer_container">
				
				<a href="https://www.facebook.com/profile.php?id=100007828336544">Facebook</a>
			    <a href="https://www.youtube.com/channel/UCTVkdvIeUA5-9bmiuyB1sUA?view_as=subscriber">Youtube</a>
				<a href="https://twitter.com/mahedianwar">Twitter</a>
				<p>Copyright &copy; Event Management Team, 2020</p>
			
		</footer>
	   </div>
		
	</body>
</html>

