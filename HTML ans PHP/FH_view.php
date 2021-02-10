<?php include 'FH_header.php'; ?>
<div id="main-content">
    <h2>Update Record</h2>

    <?php

    include 'configconnection.php';

    $stu_id=$_GET['id'];

      $sql="select * from feedback where Booking_Id={$stu_id}";
      $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");


      If(mysqli_num_rows($result)>0){ while($row=mysqli_fetch_assoc($result)){

    ?>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Booking ID</label>
            <input type="text" name="id" value="<?php echo $row['Booking_Id']; ?>"readonly="readonly" />
        </div><br>
        <div id="textarea">
            <label><b>Feedback</b></label>
            <textarea name="fbdetails" rows="9" cols="50" readonly="readonly"><?php echo $row['Feedback']; ?></textarea> <br><br><br>
        </div>
        <input class="submit" type="submit" value="Back" onClick="history.go(-1);"/>
        
    </form>
    <?php }
        }
?>
</div>
<footer class="footer_container">
<a href="https://www.facebook.com/profile.php?id=100007828336544">Facebook</a>
<a href="https://www.youtube.com/channel/UCTVkdvIeUA5-9bmiuyB1sUA?view_as=subscriber">Youtube</a>
<a href="https://twitter.com/mahedianwar">Twitter</a>
<p>Copyright &copy; Event Management Team, 2020</p>
</div>
</body>
</html>

