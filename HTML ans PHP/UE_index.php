<?php
include 'UE_header.php';
?>
<div id="main-content">
    <h2>Next 10 Days Events</h2>
    
    <?php
      include 'configconnection.php';

      //$sql="select * from bookevent";
      $sql="SELECT * FROM bookevent
       WHERE `date` >= NOW()
      AND `date`  < NOW() + INTERVAL 10 DAY AND status='Accepted';";
      $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");


      If(mysqli_num_rows($result)>0){

    ?>


    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>ET</th>
        <th>Venu</th>
        <th>Date</th>
        <th>NOG</th>
        <th>food</th>
        <th>eqp</th>
        <th>cost</th>
        <th>Status</th>
        </thead>
        <tbody>

            <?php

            while($row= mysqli_fetch_assoc($result)){

            ?>

            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['type']?></td>
                <td><?php echo $row['venue']?></td>
                <td><?php echo $row['date']?></td>
                <td><?php echo $row['nog']?></td>
                <td><?php echo $row['foods']?></td>
                <td><?php echo $row['eequipments']?></td>
                <td><?php echo $row['cost']?></td>
                <td><?php echo $row['status']?></td>
            </tr>
        <?php } ?>
            
        </tbody>
    </table>
<?php }?>
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