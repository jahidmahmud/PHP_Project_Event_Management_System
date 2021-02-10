<?php include 'V_header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="V_savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Cost</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save"  />
        <input class="submit" type="submit" value="Back" onClick="history.go(-1);"/>
    </form>
</div>
</div>
</body>
</html>
