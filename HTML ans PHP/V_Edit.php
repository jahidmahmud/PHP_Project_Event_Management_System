<?php include 'V_header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>

    <?php

    include 'configconnection.php';

    $stu_id=$_GET['id'];

      $sql="select * from venue where id={$stu_id}";
      $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");


      If(mysqli_num_rows($result)>0){ while($row=mysqli_fetch_assoc($result)){

    ?>
    <form class="post-form" action="V_updateData.php" method="post">
      <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="id"  value="<?php echo $row['id']; ?>" />
            <input type="text" name="name" value="<?php echo $row['name']; ?>" />
        </div>
        <div class="form-group">
            <label>Cost</label>
            <input type="text" name="phone" value="<?php echo $row['cost']; ?>" />
        </div>
      <input class="submit" type="submit" value="Update"  />
      <input class="submit" type="submit" value="Back" onClick="history.go(-1);"/>
    </form>
  <?php }
   } ?>
</div>
</div>
</body>
</html>
