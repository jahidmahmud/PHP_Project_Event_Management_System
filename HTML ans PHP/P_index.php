<?php
include 'P_header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    
    <?php
      include 'configconnection.php';

      $sql="select * from paymenthistory";
      $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");


      If(mysqli_num_rows($result)>0){

    ?>


    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Card No</th>
        <th>Cvv No</th>
        <th>Card Name</th>
        <th>Payment</th>
        </thead>
        <tbody>

            <?php

            while($row= mysqli_fetch_assoc($result)){

            ?>

            <tr>
                <td><?php echo $row['bid']?></td>
                <td><?php echo $row['cardno']?></td>
                <td><?php echo $row['cvvno']?></td>
                <td><?php echo $row['cardname']?></td>
                <td><?php echo $row['payment']?></td>
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