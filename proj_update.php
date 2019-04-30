<!DOCTYPE html>
<html> 
<body >
<div style="height:900px; background-color: lightblue;" align="center">
<br><br><br><br>

<?php
	  
    require("proj_tableshow.php");
    require("proj_dbconnect.php");
    
        if(isset($_POST['update'])) {
        
            $i_ID = $_POST['i_ID'];
            $i_newQuantity = $_POST['i_newQuantity'];
            
            echo " <br> Inventory before update <br>";
            show_inventory($conn);

            $sql = "UPDATE inventory SET quantityInStock = $i_newQuantity WHERE itemNumber = $i_ID";
            echo "$sql";
            
            //mysqli_select_db($conn,'university');
            $retval = mysqli_query($conn, $sql);
            
            if(! $retval ) {
                die('Could not enter data: ' . mysqli_error($conn));
            }
            
            echo "Entered data successfully\n";
            
            echo " <br> Inventory after update <br>";
            show_inventory($conn);
            
            mysqli_close($conn);
        } 
        else if(isset($_POST['show'])){
            
            show_inventory($conn);
        }	 
        
        else {
    ?>
    <br><br><br><br>
    <p>enter item ID and updated quantity for inventory  <br> </p>
    <form method = "post" action = "<?php $_PHP_SELF ?>">
        <table width = "150" border = "0" cellspacing = "1" cellpadding = "2">
        <tr>
            <td width = "20">ID</td>
            <td>
                <input name = "i_ID" type = "text" id = "i_ID">
            </td>

            <td width = "20">Stock</td>
            <td>
                <input name = "i_newQuantity" type = "text" id = "i_newQuantity">
            </td>
        </tr>
        
        <tr>
            <td width = "150"></td>
            <td> </td>
        </tr>
        
        <tr>
            <td width = "70">
            <input name = "update" type = "submit" id = "update"  value = "update">
            </td width = "70">
            <td>
                <input name = "show" type = "submit" id = "show"  value = "show">
            </td>
        </tr>
        
        </table>

    
<?php
    }
?>


<br><br><br><br>
<hr width="50">
<a href="index.html" style="color:red;font-weight:bold;">Home</a>
<hr width="50">
</div>
</body> </html>
