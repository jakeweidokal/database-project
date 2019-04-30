<!DOCTYPE html>
<html> 
<body >
<div style="height:900px; background-color: lightblue;" align="center">
<br><br><br><br>


<?php
    require("proj_dbconnect.php");
    require("proj_tableshow.php");
    show_customer($conn);
?>



<br><br><br><br>
<hr width="50">
<a href="Frontpage.html" style="color:red;font-weight:bold;">Home</a>
<hr width="50">
</div>
</body> </html>
