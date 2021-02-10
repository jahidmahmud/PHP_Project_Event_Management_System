<?php include 'E_header.php'; 


if(isset($_POST['deletebtn'])){

    include "configconnection.php";
    $ev_id=$_POST['id'];

    $sql="DELETE FROM equipment WHERE eid={$ev_id}";
      $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");

      header("Location: E_index.php");
      mysqli_close($con);
  }
?>




<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
        <input class="submit" type="submit" value="Back" onClick="history.go(-1);"/>
    </form>
</div>
</div>
</body>
</html>