<?php include 'E_header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="E_savedata.php" method="post">
        <div class="form-group">
            <label>Eq Name</label>
            <input type="text" name="eqname" />
        </div>
        <div class="form-group">
            <label>EQ Cost</label>
            <input type="text" name="eqcost" />
        </div>
        <input class="submit" type="submit" value="Save"  />
        <input class="submit" type="submit" value="Back" onClick="history.go(-1);"/>
    </form>
</div>
</div>
</body>
</html>
