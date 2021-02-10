<?php include 'F_header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>

    <?php

    include 'configconnection.php';

    $stu_id=$_GET['id'];

      $sql="select * from food where fid={$stu_id}";
      $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");


      If(mysqli_num_rows($result)>0){ while($row=mysqli_fetch_assoc($result)){

    ?>
    <form class="post-form" action="F_updateData.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="id"  value="<?php echo $row['fid']; ?>" />
            <input type="text" name="foodname" value="<?php echo $row['fname']; ?>" />
        </div>
        <div class="form-group">
        <label>Food Cost</label>
        <input type="text" name="foodcost" value="<?php echo $row['cost']; ?>" />
        </div>
    <input class="submit" type="submit" value="Update"  />
    <input class="submit" type="submit" value="Back" onClick="history.go(-1);"/>
    </form>
    <?php }
        }

?>
</div>
</div>
</body>
</html>

