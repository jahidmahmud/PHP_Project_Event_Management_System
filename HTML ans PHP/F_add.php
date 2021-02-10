<?php include 'F_header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="F_savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" />
        </div>
        <div class="form-group">
            <label>Food Cost</label>
            <input type="text" name="cost" />
        </div>
        <input class="submit" type="submit" value="Save"  />
        <input class="submit" type="submit" value="Back" onClick="history.go(-1);"/>
    </form>
</div>
</div>
</body>
</html>
