<?php include 'VV_header.php'; ?>
<div id="main-content">
    <h2>View Record</h2>

    <?php

    include 'configconnection.php';

    $stu_id=$_GET['id'];

      $sql="select * from venue where id={$stu_id}";
      $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");


      If(mysqli_num_rows($result)>0){ while($row=mysqli_fetch_assoc($result)){

    ?>
    <form class="post-form" action="" method="post">
        <div class="form-group">
          <label for="">Id</label>
          <input type="text" name="id"  value="<?php echo $row['id']; ?>" readonly="readonly"/>
        </div>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" value="<?php echo $row['name']; ?>" readonly="readonly"/>
        </div>

        <div class="form-group">
            <label>Address</label>
            <input type="text" name="cost" value="<?php echo $row['cost']; ?>" readonly="readonly"/>
        </div>
      
    </form>


  <?php }
   } ?>
</div>
</div>
</body>
</html>
